$(document).ready(function () {

    $('.order').on('click', function () {
        var value = 0;
        if($(this).hasClass('freetext') ) {
            value = parseInt($('#freevalue_field').val());
        }else{
            value = $.parseJSON($(this).attr('data-value'));
        }

        const queryString = window.location.search;
        params = getParams(queryString)

        location.href = "./pay.php?id=" + params.id + "&amount=" + value;

    });

    var getParams = function (url) {
        var params = {};
        var parser = document.createElement('a');
        parser.href = url;
        var query = parser.search.substring(1);
        var vars = query.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            params[pair[0]] = decodeURIComponent(pair[1]);
        }
        return params;
    };
});