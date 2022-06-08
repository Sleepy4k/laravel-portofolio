$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Apakah kamu yakin?',
        text: 'Kamu akan menghapus data ini secara permanen!',
        icon: 'warning',
        buttons: ["Cancel", "Yakin"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});