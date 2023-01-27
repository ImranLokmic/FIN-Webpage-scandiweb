function deletedb(){
      var items = [];
      $.each($("input[name='chkbox']:checked"), function(){
        items.push($(this).val());
      });

      $.ajax({
         type: 'post', 
         url: 'php/delete.php', 
         data: {
             'id': items
         },
         success: function() {   
          window.location.reload();  
      }
     });
}