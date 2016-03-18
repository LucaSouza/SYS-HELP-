$( document ).ready(function() {
  $( ".container-user" ).click(function() {
    $( "#container-menu-user" ).slideToggle( "fast" );
  });
  new dgCidadesEstados(
           document.getElementById('estado'),
           document.getElementById('cidade'),
           true
       );
  $('.data').mask("00/00/0000", {clearIfNotMatch: true});
  $('.cpf').mask('000.000.000-00', {reverse: false});
  $('.telefone').mask('0000-0000');
});
