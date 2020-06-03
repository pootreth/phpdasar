$(document).ready(function(){

    // hilangkan tombol cari
    $('#btn-cari').hide();

    // event ketika keyword ditulis
    $('#keyword').on('keyup', function(){
        // munculkan icon loading
        $('.loader').show();

        // ajax menggunakan load
        // $('#container').load('ajax/book.php?keyword=' + $('#keyword').val());

        // $.get()
        $.get('ajax/book.php?keyword=' + $('#keyword').val(), function(data){
            $('#container').html(data);
            $('.loader').hide();
        });
    });
});