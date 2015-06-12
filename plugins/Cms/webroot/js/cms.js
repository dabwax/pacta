$(document).ready(function() {

    $(".validate").validate();

    $('.editor').ckeditor();

    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });

    $("input[name='zip_code']").keyup(function() {
        var value = $(this).val();


        if(value.length >= 8) {
            $.ajax({
                type: "GET",
                url: "http://apps.widenet.com.br/busca-cep/api/cep/" + value + ".json",
                success: function(data) {
                    if(data.status == 1) {
                        $("input[name='zip_code']").val(data.code);
                        $("#city").val(data.city);
                        $("#state").val(data.state);
                        $("#country").val("Brasil");
                    }
                    console.log(data);
                }
            });
        }
    });

    $("input[name='rg']").inputmask("99.999.999-9");
    $("input[name='cpf']").inputmask("999-999-999-99");
    $("input[name='cnpj']").inputmask("99.999.999/9999-99");

});