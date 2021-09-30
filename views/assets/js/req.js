$(function () {
    $("form").submit(function (e) {
        e.preventDefault()

        var form = $(this);
        var action = form.attr("action");
        var data = form.serialize();

        console.log(data)
        $.ajax({
            url: action,
            data,
            type: "post",
            dataType: "json",
            
            success: function (su) {
                

                if (su.redirect) {
                    window.location.href = su.redirect.url;
                }
            }
        });
    });      
      
});