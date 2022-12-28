<?php

return [

    /*
    |--------------------------------------------------------------------------
    |   DataTable Bahasa Untuk Api
    |--------------------------------------------------------------------------
    |
    |   Baris bahasa berikut digunakan oleh perpustakaan paginator untuk membangun
    |   link pagination sederhana. Anda bebas mengubahnya menjadi apa saja
    |   Anda ingin menyesuaikan tampilan agar lebih cocok dengan aplikasi Anda.
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