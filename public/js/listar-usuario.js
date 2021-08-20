$(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
});
var base_url = "http://" + window.location.host.toString();
var base_url = location.protocol + "//" + window.location.host.toString() + "/";
$(document).ready(function($) {
    $('#usuario').DataTable(
        {
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": base_url+ "user/show"
            },
            "scrollCollapse": true,
            "paging": true,
            "searching": false,
            "deferRender": true,
            "order": [0, "DESC"],
            "columns": [
                { "data": "name", "name": "name" },
                { "data": "email", "name": "email" },
                { "data": "tipo", "name": "tipo" },
                { "data": "status", "name": "status" }
            ],
            "language": {
                "url": 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json'
            },
        },
    )
});