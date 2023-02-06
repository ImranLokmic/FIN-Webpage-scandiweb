$(document).ready(function () {
  $('#lweight').hide();
  $('#weight').val('').prop('disabled', true).hide();

  $('#lsize').hide();
  $('#size').val('').prop('disabled', true).hide();

  $('#height').hide();
  $('#lheight').val('').prop('disabled', true).hide();

  $('#width').hide();
  $('#lwidth').val('').prop('disabled', true).hide();

  $('#length').hide();
  $('#llength').val('').prop('disabled', true).hide();

  $('select').change(function () {

      $('#lweight').hide();
      $('#weight').val('').prop('disabled', true).hide();

      $('#lsize').hide();
      $('#size').val('').prop('disabled', true).hide();

      $('#lheight').hide();
      $('#height').val('').prop('disabled', true).hide();

      $('#lwidth').hide();
      $('#width').val('').prop('disabled', true).hide();

      $('#llength').hide();
      $('#length').val('').prop('disabled', true).hide();

      var a = $(this).val();
      if (a === 'furniture') {
        $('#lheight').show();
        $('#height').prop('disabled', false).show();

        $('#lwidth').show();
        $('#width').prop('disabled', false).show();

        $('#llength').show();
        $('#length').prop('disabled', false).show();
      } else {
        $("#l" + a).show();
        $("#" + a).prop('disabled', false).show();
      }
    
  }
)
})


function adding_db() {
  $("#product_form").submit();
};