<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('permission.table_names');

        if (empty($tableNames)) {
            throw new \Exception('Error: config/permission.php not loaded. Run [php artisan config:clear] and try again.');
        }

        Schema::create($tableNames['permissions'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();     // For MySQL 8.0 use string('guard_name', 125);
            $table->string('description')->nullable();      // For MySQL 8.0 use string('name', 125);
            $table->timestamps();
        });

        Schema::create($tableNames['roles'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();     // For MySQL 8.0 use string('name', 125);
            $table->string('description')->nullable(); // For MySQL 8.0 use string('guard_name', 125);
            $table->timestamps();
        });

        Schema::create($tableNames['roles_user'], function (Blueprint $table) use ($tableNames) {
            $table->integer('role_id')-unsigned();
            $table->integer('user_id')-unsigned();

            $table->foreign('user_id')->references('id')->on($tableNames['users'])
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on($tableNames['roles'])
            ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'role_id']);
        });

        Schema::create($tableNames['permissions_role'], function (Blueprint $table) use ($tableNames) {
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('permission_id')->references('id')->on($tableNames['permissions'])
            ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('role_id')->references('id')->on($tableNames['roles'])
            ->onDelete('cascade')->onDelete('cascade');

            $table->primary(['permission_id', 'role_id'], 'role_has_permissions_permission_id_role_id_primary');
        });

        app('cache')
            ->store(config('permission.cache.store') != 'default' ? config('permission.cache.store') : null)
            ->forget(config('permission.cache.key'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('permission.table_names');

        if (empty($tableNames)) {
            throw new \Exception('Error: config/permission.php not found and defaults could not be merged. Please publish the package configuration before proceeding, or drop the tables manually.');
        }

        Schema::drop($tableNames['permissions_role']);
        Schema::drop($tableNames['roles_user']);
        Schema::drop($tableNames['roles']);
        Schema::drop($tableNames['permissions']);
    }
}
