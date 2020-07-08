$('input[name="cantidad"]').keyup(function() {
  var a = $('input[name="precio"]').val();
  var b = $(this).val();
  $('input[name="total"]').val(a * b);
});

