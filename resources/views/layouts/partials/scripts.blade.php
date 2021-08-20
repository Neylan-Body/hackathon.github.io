<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3.4.1 -->
<script src="{{ asset('/vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap 4.4.1 -->
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE -->
<script src="{{ asset('/js/adminlte.min.js') }}"></script>

<!-- DataTables -->
<!-- <script src="{{ asset('/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/js/dataTables.bootstrap4.js') }}"></script> -->

<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

@yield('table')
@yield('script-end')
@yield('script-form')