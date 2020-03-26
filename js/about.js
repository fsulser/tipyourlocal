$(document).ready(function () {

    $('.order').on('click', function () {
        var value = parseInt($('#freevalue_field').val());

        location.href = "./pay?id=1&amount=" + value;

    });
});