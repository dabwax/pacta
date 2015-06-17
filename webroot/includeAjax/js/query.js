$(function(){
    //quando for carregado a pagina, carrega a home
    $.ajax({
        'url':'index.php',
        'dataType':'php',
        success:function(data){
            $('#conteudo').html(data);
        },
        error:function(error){
            alert("Erro!");
            console.log(error);
        }
    });
    $('#menu a').click(function(e){
       //desabilitando click
       e.preventDefault();
       
       //pegar o valor do data-href
       var page = $(this).attr('data-href');
       
       //ajax para carregar no click
       $.ajax({
        'url': page+'.php',
        'dataType':'php',
         success:function(data){
          $('#conteudo').html(data);
         },
         error:function(error){
          alert("Erro!");
          console.log(error);
        }
       });
      
    });
})
