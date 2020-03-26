$(document).ready(function() {
    var table = $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "./helper/company_search.php",
        "oLanguage": {
            "sSearch": ""
        },
        "columns": [
            { "data": "id" },
            { "data": "company_name" },
            { "data": "address" },
            { "data": "PLZ" },
            { "data": "town" },
        ],
        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            }
        ]
    } );
    $('.dataTables_filter input').parent().wrap("<form class='form-inline'></form>" );
    $('.dataTables_filter input').addClass('form-control form-control-sm ml-6');
    $('.dataTables_filter input').attr('placeholder', 'Suche');
    $('.dataTables_filter input').before('<i class="fas fa-search" aria-hidden="true"></i>');
    $('.dataTables_filter').addClass('pull-left');

    $('#example tbody').on( 'click', 'tr', function () {
        data = table.row( this ).data();
        location.href = "./menu.php?id="+data.id;
    } );

} );