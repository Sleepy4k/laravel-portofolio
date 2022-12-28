<?php

return [

    /*
    |--------------------------------------------------------------------------
    |   DataTable Languages Lang
    |--------------------------------------------------------------------------
    |
    |   The following language lines are used by the paginator library to build
    |   the simple pagination links. You are free to change them to anything
    |   you want to customize your views to better match your application.
    |
    */

    'translate' => [
        "sProcessing"       => trans('table.proccess'),
        "sLengthMenu"       => trans('table.lenght'),
        "sZeroRecords"      => trans('table.empty.datatable'),
        "sEmptyTable"       => trans('table.empty.table'),
        "sInfo"             => trans('table.info'),
        "sInfoEmpty"        => trans('table.infoEmpty'),
        "sInfoFiltered"     => trans('table.infoFilter'),
        "sSearch"           => trans('table.search'),
        "sInfoThousands"    => trans('table.infoThousand'),
        "sLoadingRecords"   => trans('table.loading'),
        "oPaginate"         => [
            "sFirst"    => trans('pagination.first'),
            "sLast"     => trans('pagination.last'),
            "sNext"     => trans('pagination.next'),
            "sPrevious" => trans('pagination.previous')
        ],
        "oAria" => [
            "sSortAscending"    => trans('table.aria.newest'),
            "sSortDescending"   => trans('table.aria.oldest')
        ]
    ]

];