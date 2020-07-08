// PARA MULTIPLICAR DOS INPUT DE MODAL AGREGAR//
$('input[name="can"]').keyup(function() {
    var a = $('input[name="pre"]').val();
    var b = $(this).val();
    $('input[name="tot"]').val(a * b);
  });

// PARA MULTIPLICAR DOS INPUT DE MODAL EDITAR//
$('input[name="cantidad"]').keyup(function() {
  var a = $('input[name="precio"]').val();
  var b = $(this).val();
  $('input[name="total"]').val(a * b);
});


// PARA RESTAR DOS INPUT DE MODAL EDITAR //

$('.amt').keyup(function() {
var importe_total = 0
  $(".amt").each(
    function(index, value) {
      if ( $.isNumeric( $(this).val() ) ){
      importe_total = -eval($(this).val()) - importe_total;
      //console.log(importe_total);
      }
    }
  );
      $("#sal").val(importe_total);
});

// PARA RESTAR DOS INPUT DE MODAL AGREGAR //

$('.jem').keyup(function() {
  var importe_total = 0
    $(".jem").each(
      function(index, value) {
        if ( $.isNumeric( $(this).val() ) ){
        importe_total = -eval($(this).val()) - importe_total;
        //console.log(importe_total);
        }
      }
    );
        $("#saldos").val(importe_total);
  });


  $('.jer').keyup(function() {
    var importe_total = 0
      $(".jer").each(
        function(index, value) {
          if ( $.isNumeric( $(this).val() ) ){
          importe_total = -eval($(this).val()) - importe_total;
          //console.log(importe_total);
          }
        }
      );
          $("#saldito").val(importe_total);
    });