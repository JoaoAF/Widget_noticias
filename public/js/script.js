/*João Ferreira*/
$( "#select-categoria" ).change(function() {

    var categoria = $('#select-categoria').val();
    var urlRaiz = 'http://localhost/joao/widget/public/';
    console.log(categoria);
    $('#script_do_widget').text('<script src="'+urlRaiz+'js/categorias/'+categoria+'.js"><\/script>');
    $(".diversos, .empregos, .especiais, .imoveis, .popnews, .populares, .veiculos, .ultimas").css("display", "none");
    $("."+categoria).css("display", "block");

});