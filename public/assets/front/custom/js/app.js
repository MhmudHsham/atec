var Home = function() {

    var init = function() {
        subscribe();    
    };

    var subscribe = function() {        
        $("#subscribe-form").submit(function(e) {
            e.preventDefault();          
            // alert(custom.subscribe_url)  
            var form_data = $(this).serialize();            
            $.ajax({
                url: custom.subscribe_url,
                type: "post",
                data: form_data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    $("#subscribe_email").closest(".form-group").find(".help-block").css("color", "green").html(data.message);
                    setTimeout(function() {
                        $("#subscribe_email").closest(".form-group").find(".help-block").css("color", "green").html("");
                    }, 2000);
                }, 
                error: function(xhr, errors) {
                    var $errors = xhr.responseJSON.errors;
                    for(var i in $errors) {                                                
                        $("#" + i).closest(".form-group").find(".help-block").css("color", "red").html($errors[i][0]);
                        setTimeout(function() {
                            $("#subscribe_email").closest(".form-group").find(".help-block").css("color", "green").html("");
                        }, 2000);
                    }
                }
            });
        });
    };  

    return {
        init: init()
    }
}();