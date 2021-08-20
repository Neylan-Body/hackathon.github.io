@extends('layouts.app')

@section('main-content')
<!-- Main content -->
<div class="row">
    <div class='col-md-12'>
        <!-- small box -->
        <div class='card card-primary'>
            <div class='card-header with-border'>
                <h3 class='card-title'>Cadastrar função</h3>
            </div>
            <form method="post" id="formFuncao">
                <div class="card-body">  
                    <div class="row">
                        <div class="col-3">
                            <label>Edital</label>
                            <select name="edital" class="form-control" required>
                                @foreach($editais as $key => $edital)
                                <option value="{{$edital->numero}}">{{$edital->titulo}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-9">
                            <label>Função </label>
                            <input type="text" name="funcao" class="form-control" required>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">SALVAR</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection