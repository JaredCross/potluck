
$(".update-by-name").change(function() {

  $('#button-container').empty();
    if($(this).val()!="invalid") {
        $.ajax({
            url: "../pages/selected-option-update.php",
            type: "POST",
            async: true,
            data: { id:$(this).val()},
            dataType: 'json',
            success: function(selected_row)
            {
              var id = selected_row[0];
              var name = selected_row[1];
              var main = selected_row[2];
              var side = selected_row[3];
              var dessert = selected_row[4];
              var other = selected_row[5];
              $('#id').val(id);
              $('#name').val(name);
              $('#main-dish').val(main);
              $('#side-dish').val(side);
              $('#dessert-dish').val(dessert);
              $('#other').val(other);
              $('.instructions').text('Update Mode: Please change the information'
                +' desired and press "Update", or press "Delete" to remove your entry.');
              $('.instructions').addClass('instructions-update').removeClass('instructions');
              $('#button-container').append('<input type="button" value="Update" name ="update">');
              $('#button-container').append('<div id="delete-button-container">'
                +'<p>OR</p><input type="button" value="Delete" name ="delete"></div>');
            }
          });
    } else {

    }
});

$(document).on("click","input[name='update']",function() {
    console.log("update");
    if($("#update-name").val()!="") {
      console.log("update2");
        $.ajax({
            url: "../pages/post_update.php",
            type: "POST",
            async: true,
            data: { id:$("#id").val(),name:$("#name").val(),
              main:$("#main-dish").val(),side:$("#side-dish").val(),
                dessert:$("#dessert-dish").val(), other:$("#other").val()},

            success: function(data) {
              setTimeout(function(){
                location.reload(true);
              }, 500);
            },
        });
    } else {

    }

});

$(document).on("click","input[name='delete']",function() {
  if (confirm('Are you sure you want to delete this entry?')) {
    if($("#update-name").val()!="") {
      console.log("update2");
        $.ajax({
            url: "../pages/delete_entry.php",
            type: "POST",
            async: true,
            data: { id:$("#id").val()},

            success: function(data) {
              setTimeout(function(){
                location.reload(true);
              }, 500);
            },
        });
    }
  }

});
