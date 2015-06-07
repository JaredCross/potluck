$(function ()
  {
    $.ajax({
      url: '../pages/json-request.php',
      data: "",

      dataType: 'json',
      success: function(rows)
      {
        for (var i in rows) {
          var row = rows[i];
          var id = row[0];
          var student_name = row[1];
          var main_result = row[2];
          var side_result = row[3];
          var dessert_result = row[4];
          var other_result = row[5];
          $('.potluck-table-data').append("<tr><td>"+student_name+"</td>"
            +"<td>"+main_result+"</td>"+"<td>"+side_result+"</td>"
              +"<td>"+dessert_result+"</td>"+"<td>"+other_result+"</td>"
               + "</tr>");
          $('.update-by-name').append($('<option/>', {
            value: id,
            text : student_name
          }));
        }
      }
    });
});


$("#submit").click(function() {
  setTimeout(function(){
    location.reload(true);
  }, 500);
});
