$(document).ready(function () {
        var a = $("#periode-table").DataTable({
            lengthChange: !1,
            buttons: ["print"],
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        });
        a.buttons().container().appendTo("#periode-table_wrapper .col-md-6:eq(0)"), $("#alternative-page-datatable").DataTable({
            pagingType: "full_numbers",
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        })
        // $('#start-datepicker').datepicker({
        //     todayBtn: "linked",
        //     format: 'dd-mm-yyyy',
        //     autoclose: true,
        //     todayHighlight: true,
        //     orientation: "top",
        //     language: 'en',
        //     templates: {
        //         leftArrow: '<i class="fa fa-angle-left"></i>',
        //         rightArrow: '<i class="fa fa-angle-right"></i>'
        //     }
        // });
        // $('#end-datepicker').datepicker({
        //     todayBtn: "linked",
        //     format: 'dd-mm-yyyy',
        //     autoclose: true,
        //     todayHighlight: true,
        //     orientation: "top",
        //     language: 'en',
        //     templates: {
        //         leftArrow: '<i class="fa fa-angle-left"></i>',
        //         rightArrow: '<i class="fa fa-angle-right"></i>'
        //     }
        // });
        $('#form-periode').submit(function (e) { 
            e.preventDefault();
            getPeriodic(
                $("#start").val(),
                $("#end").val()
            );
        });

        //Bulan

        // $('#bulan-table').DataTable();
        var b = $("#bulan-table").DataTable({
            lengthChange: !1,
            buttons: ["print"],
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        });
        b.buttons().container().appendTo("#bulan-table_wrapper .col-md-6:eq(0)"), $("#alternative-page-datatable").DataTable({
            pagingType: "full_numbers",
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        })

        $('#bulan').change(function (e) { 
            e.preventDefault();
            if($(this).find('option:selected').val() != ''){
                getMonth($(this).find('option:selected').val());
            }else{
                $('#bulan-table').DataTable().clear().destroy();
                $('#bulan-table').DataTable();
            }
        });

        //Tahun

        $('#tahun-table').DataTable();
        $('#tahun').change(function (e) { 
            e.preventDefault();
            if($(this).find('option:selected').val() != ''){
                getYear($(this).find('option:selected').val());
            }else{
                $('#tahun-table').DataTable().clear().destroy();
                $('#tahun-table').DataTable();
            }
        });
    });

    function getPeriodic(start, end) { 
        $('#periode-table').DataTable().clear().destroy();
        var t = $('#periode-table').DataTable({
            "ajax": {
                url: "{{ base_url('api/article/periode/') }}"+start+"/"+end,
                type: "get",
                dataSrc: 'data'
            },
            "columns": [
                {
                    data: null
                },
                {
                    data: "nama"
                },
                {
                    data: "jml"
                }
            ]
        });
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    }

    function getMonth (month) {  
        $('#bulan-table').DataTable().clear().destroy();
        var t = $('#bulan-table').DataTable({
            "ajax": {
                url: "{{ base_url('api/article/bulan/') }}"+month,
                type: "get",
                dataSrc: 'data'
            },
            "columns": [
                {
                    data: null
                },
                {
                    data: "nama"
                },
                {
                    data: "jml"
                }
            ]
        });
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    }

    function getYear (year) {  
        $('#tahun-table').DataTable().clear().destroy();
        var t = $('#tahun-table').DataTable({
            "ajax": {
                url: "{{ base_url('api/article/tahun/') }}"+year,
                type: "get",
                dataSrc: 'data'
            },
            "columns": [
                {
                    data: null
                },
                {
                    data: "nama"
                },
                {
                    data: "jml"
                }
            ]
        });
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    }