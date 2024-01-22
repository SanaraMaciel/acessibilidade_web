/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(function () {
        $(".isencao").click(function () {
            var valor = $(this).val();

            if (valor == '1') {
                $("#divNis").show(500);

            } else {
                $("#nis").val();
                $("#divNis").hide(500);
            }
        });

        $(".necessidadeEspecial").click(function () {
            var valor = $(this).val();

            if (valor == '1') {
                $("#divNecessidadeEspecial").show(500);

            } else {
                $("#descricaoatendimento").val();
                $("#divNecessidadeEspecial").hide(500);
            }
        });

    });
    
    
    $(function () {

    $("#dataExp").datepicker({
        dateFormat: 'dd/mm/yy',
        changeYear: true,
        changeMonth: true,
        yearRange: "1917:2017",
        minDate: "-100Y",
        maxDate: "-1D"
    });

    $("#dataNasc").datepicker({
        dateFormat: 'dd/mm/yy',
        changeYear: true,
        changeMonth: true,
        yearRange: "1917:2000",
        minDate: "-100Y",
        maxDate: "-17Y"
    });


});


$(function () {
    var sohLetrasOuEspaco = /[^(A-Z| )]/ig;
    var duploEspaco = /\s{2}/;

    $(".sohLetrasOuEspaco").keypress(function () {
        var el = $(this);
        setTimeout(function () {
            var text = $(el).val();
            text = text.toUpperCase();
            text = text.replace(sohLetrasOuEspaco, '');
            text = text.replace(duploEspaco, ' ');
            el.val(text);
        }, 100);
    });

});

$("#telResidencial").mask("(00) 0000-0009");
$("#telCelular").mask("(00) 0000-00009");

//$("#telResidencial").mask("(00) 0000-0009");
//$("#telCelular").mask("(00) 0000-00009");
