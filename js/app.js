var quant = 4;
var tipo = 'sentences';

$(function() {

    function rand_col() { //function name
        var color = '#'; // hexadecimal starting symbol
        var letters = ['5B513C', '554524', '5B4224', '452D10', '6A5944', '6D4D26', '463A2C', '6D6255']; //Set your colors here
        color += letters[Math.floor(Math.random() * letters.length)];
        return color;
    }

    function show_itsum(q, t) {
        $('.ipsum').hide();
        $('.ipsum[data-quant="' + q + '"][data-tipo="' + t + '"]').show('slow');
    }

    show_itsum(quant, tipo);
    $('.quant span[data-rel-quant="' + quant + '"]').addClass('active');
    $('.tipo span[data-rel-tipo="' + tipo + '"]').addClass('active');


    $('.quant span').each(function() {
        var a = Math.random() * 10 - 5;
        $(this).css('transform', 'rotate(' + a + 'deg) scale(1.25)');
        $(this).css('background', rand_col);
    });
    $('.tipo span').each(function() {
        var a = Math.random() * 10 - 5;
        $(this).css('transform', 'rotate(' + a + 'deg) scale(1.25)');
        $(this).css('background', rand_col);
    });
    $('.quant span').click(function() {
        $('.quant span').removeClass('active');
        $(this).addClass('active');
        quant = $(this).attr('data-rel-quant');
        show_itsum(quant, tipo);
    });
    $('.tipo span').click(function() {
        $('.tipo span').removeClass('active');
        $(this).addClass('active');
        tipo = $(this).attr('data-rel-tipo');
        show_itsum(quant, tipo);
    });


    $('#orig').keydown(function() {
        translate($(this).val());
    });
    $('#orig').keydown();

    function translate(str){
        $('.translate').html(str.replace(/[aeiou]/, 'i').replace(/[AEIUO]/, 'I').replace(/[àèìòù]/g, 'ì').replace(/[áéíóú]/g, 'ì'));
    }
});
