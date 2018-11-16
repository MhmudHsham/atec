var Generic = function() {

    var init = function() {
        var id = $("#id").val() || "";
        if (id !== "") {
            validateCreateForm();
            if (id !== 0) {
                handleFormValues(id);
            }
        } 
        deleteURL();
    };

    var handleFormValues = function(id) {
        var show_link = $("#show_link").val();
        $.ajax({
            url: config.admin_url + "/" + show_link,
            type: "get",
            data: {},
            success: function(msg) {
                for (var i in msg) {
                    if(i == "image") {
                        var img_src = config.base_url + "/public/uploads/images/" + msg[i];
                        $(".thumbnail").html("<img src='" + img_src + "' />");
                    } else {
                        $("#" + i).val(msg[i]);
                    }
                }
            }
        });
    };

    var validateCreateForm = function() {
        var form1 = $('#current_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);
        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: custom_config.messages,
            rules: custom_config.rules,
            invalidHandler: function(event, validator) { //display error alert on form submit
                success1.hide();
                error1.show();
                App.scrollTo(error1, -200);
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element); // for other inputs, just perform default behavior
            },
            highlight: function(element) { // hightlight error inputs
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function(element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
            },
            success: function(label) {
                label.closest('.form-group').removeClass('has-error'); // set success class to the control group
            },
            submitHandler: function(form) {
                success1.show();
                error1.hide();
                form.submit();
            }
        });
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
                    // $("#sample_1").ajax().reload();
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