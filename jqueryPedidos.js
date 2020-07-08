$('input[name="cantidad"]').keyup(function() {
    var a = $('select[name="precio"]').val();
    var b = $(this).val();
    $('input[name="totpaga"]').val(a * b);
  });
  


  $('.amd').keyup(function() {
    var importe_total = 0
      $(".amd").each(
        function(index, value) {
          if ( $.isNumeric( $(this).val() ) ){
          importe_total = -eval($(this).val()) - importe_total;
          //console.log(importe_total);
          }
        }
      );
          $("#saldo").val(importe_total);
    });


    $('.hol').keyup(function() {
      var importe_total = 0
        $(".hol").each(
          function(index, value) {
            if ( $.isNumeric( $(this).val() ) ){
            importe_total = -eval($(this).val()) - importe_total;
            //console.log(importe_total);
            }
          }
        );
            $("#totpaga").val(importe_total);
      });