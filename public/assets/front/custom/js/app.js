var Home = function() {

    var init = function() {
        subscribe();    
    };

    var subscribe = function() {        
        $("#subscribe-form").submit(function(e) {
            e.preventDefault();            
            var form_data = $(this).serialize();            
            $.ajax({
                url: custom.subscribe_url,
                type: "post",
                data: form_data,
                success: function(data) {
alert(data);
                }
            });
        });
    };  

    return {
        init: init()
    }
}();