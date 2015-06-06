$("#submit").click(function() {
    if($("#name").val()!="") {
        $.ajax({
            url: "../pages/process.php",
            type: "POST",
            async: true,
            data: { name:$("#name").val(), main:$("#main-dish").val(), side:$("#side-dish").val(),
              dessert:$("#dessert-dish").val(), other:$("#other").val()},

            success: function(data) {
                console.log(data);
            },
        });
    } else {

    }
});
