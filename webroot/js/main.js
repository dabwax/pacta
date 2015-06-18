
$(document).ready(function(){

    $(".ver-vagas-disponiveis").click(function() {
        var json = $(this).data("json");

        $("#vaga-nome").html(json.name);
        $("#vaga-descricao").html(json.description);
        $("#vaga-localizacao").html(json.local + " " + json.city + " " + json.state + " " + json.country);
        $("#myModal").modal("show");
    });

    // Brazilian Portuguese
jQuery.timeago.settings.strings = {
   prefixAgo: "há",
   prefixFromNow: "em",
   suffixAgo: null,
   suffixFromNow: null,
   seconds: "alguns segundos",
   minute: "um minuto",
   minutes: "%d minutos",
   hour: "uma hora",
   hours: "%d horas",
   day: "um dia",
   days: "%d dias",
   month: "um mês",
   months: "%d meses",
   year: "um ano",
   years: "%d anos"
};

    jQuery("abbr.timeago").timeago();


$("div.bhoechie-tab-menu>div.list-group>a").click(function(e) { //abas de
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });

    function validarEmail(element) {
        var email = $(element).val();
        var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        var url = $(element).data("url");

        if(filtro.test(email)) {

            $.ajax({
                type: "POST",
                url: url,
                data: {email: email},
                success: function(data) {
                    data = jQuery.parseJSON(data);

                    if(data.result == "success") {
                        $(".alerta-newsletter").fadeOut(500);
                        $(".btn-news").prop("disabled", false);
                    } else {
                        $(".alerta-newsletter").html("Este e-mail já encontra-se cadastrado.").fadeIn(500);
                        $(".btn-news").prop("disabled", true);
                    }
                }
            });
        } else {
            $(".alerta-newsletter").html("Este e-mail é inválido.").fadeIn(500);
            $(".btn-news").prop("disabled", true);
        }
    }
    $(".input-news").keyup(function() {
        validarEmail($(this));
    });
    $(".input-news").blur(function() {
        validarEmail($(this));
    });

    $(".ver-mais-noticias").on("click", function() {
        var json_data = $(this).data("json");

        $("#campo-titulo-noticia").html(json_data.title);
        $("#campo-conteudo-noticia").html(json_data.description);
        $("#campo-data-noticia").html(json_data.published_date);

        $("#modalNoticia").modal("show");
    });
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {//js click botão login
        e.stopPropagation();
    });
    //slider de parceiros
    $('.parceiros').carousel({
      //interval: 1200
    })

    //slider de planos
    $('.planos').carousel({
      //interval: 1800
    })

   $(".scroll").click(function(event){//js para ancora animada
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
   });

   $('.btn-file').click(function(){//js para funcionar o botao de upload de corriculo
        $('input[name="attachment"]').click();
    });



    /*$('.telefone').mask('(00)0000-0000');
    $('.cnpj').mask('00.000.000/0000-00');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    var maskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    options = {onKeyPress: function(val, e, field, options) {
            field.mask(maskBehavior.apply({}, arguments), options);
        }
    };

    $('.tel-cel').mask(maskBehavior, options);
*/
$( "#abriTexto" ).click(function() {
  $( "#txtOculto" ).fadeToggle( "slow", "linear" );
});



});

$(function () {
        $("[rel='tooltip']").tooltip();
    });



//$('.item-slider').height($(document).height());
$('.item-slider').height($(window).height());
$('#ged').height($(window).height());

/*function equal_cols(el)
{
    var h = 0;
    $(el).each(function(){
        $(this).css({'height':'auto'});
        if($(this).outerHeight() > h)
        {
            h = $(this).outerHeight();
        }
        $(this).css({'height':h});
    });*/



jQuery(function($) {
		$('.element').responsiveEqualHeightGrid();
        $('.altura-rodape').responsiveEqualHeightGrid();
        $('.height-planos').responsiveEqualHeightGrid();
        $('.height-onde-estamos').responsiveEqualHeightGrid();
        $('.height-oportunidades').responsiveEqualHeightGrid();
        $('.height-servicos').responsiveEqualHeightGrid();
        $('.aba-insti').responsiveEqualHeightGrid();
        $('.institucional').responsiveEqualHeightGrid();
         $('.auto-height').responsiveEqualHeightGrid();
	});

jQuery(function($) {

    });

jQuery(function($) {

    });
jQuery(function($) {

    });

jQuery(function($) {

    });
jQuery(function($) {

    });

$(document).ready(function(){   RadioImg();     });

function RadioImg(){
$("input[type=radio]").click(function(){
var rel = $(this).attr('data-radio');
  switch(rel){

    case 'pacta':
    $("#pacta").show();
    $("#fare").hide();
    $("#todos").hide();
    break;

    case 'fare':
    $("#fare").show();
    $("#pacta").hide();
    $("#todos").hide();

    break;

    case 'todos':
    $("#todos").show();
    $("#pacta").hide();
    $("#fare").hide()
    break;
        }
    })
}

$(document).ready(function(){
    $('.telefone').mask('(00)0000-0000');
    $('.cnpj').mask('00.000.000/0000-00');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    var maskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    options = {onKeyPress: function(val, e, field, options) {
            field.mask(maskBehavior.apply({}, arguments), options);
        }
    };

    $('.tel-cel').mask(maskBehavior, options);


});

