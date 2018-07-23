var Generic = function() {

    var init = function() {
        deleteURL();
    };

    var deleteURL = function() {
        $(document).on("click", ".delete-url", function(e) {
            e.preventDefault();
            var id = $(this).attr("data-id");
            var href = $(this).attr("href");          
            $.ajax({
                url: href,
                type: "delete",
                data: {},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(msg) {
                    $(".tr_" + id).fadeOut(500);
                    toastr.success("تم الحذف بنجاح");
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });
    };

    return {
        init: function() {
            init();
        }
    };

}();

$(document).ready(function() {
    Generic.init();
});