    // resources/js/app.js
import $ from 'jquery';

$(document).ready(function() {
    $('.article-link').on('click', function(event) {
        event.preventDefault(); // Mencegah pindah halaman

        var url = $(this).attr('href');

        $.ajax({
            url: url,
            method: 'GET',
            success: function(response) {
                $('#article-detail').html(response).show();
                $('html, body').animate({ scrollTop: $('#article-detail').offset().top }, 500);
            },
            error: function() {
                alert('Terjadi kesalahan saat memuat detail artikel.');
            }
        });
    });
});
