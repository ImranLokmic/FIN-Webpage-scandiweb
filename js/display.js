$(document).ready(function(){
$('#lBook').hide();
$('#Book').hide();
$('#lDVD').hide();
$('#DVD').hide();
$('#lFurniture').hide();
$('#Furniture').hide();
$('select').change(function() {
 $('#lBook').hide();
$('#Book').hide();
$('#lDVD').hide();
$('#DVD').hide();
$('#lFurniture').hide();
$('#Furniture').hide();
  var a = $(this).val();
  $("#" + a).show();
  $("#l" + a).show();
})
})
function adding_db(){
  $("#product_form").submit();
};