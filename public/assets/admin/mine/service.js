var Category = function() {
    var init = function() {
        var id = $("#id").val() || "";
        if (id !== "") {
            validateCreateForm();
            if (id !== 0) {
                handleFormValues(id);
            }
        } 
    };


    var handleFormValues = function(id) {
        $.ajax({
            url: config.admin_url + "/categories/show/" + id,
            type: "get",
            data: {},
            success: function(msg) {
                for (var i in msg) {
                    $("#" + i).val(msg[i]);
                }
            }
        });
    };

    var validateCreateForm = function() {
        var form1 = $('#category_form');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);
        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                title_ar: {
                    required: lang.this_field_is_required
                },
                title_en: {
                    required: lang.this_field_is_required
                },
                icon: {
                    required: lang.this_field_is_required
                }
            },
            rules: {
                title_ar: {
                    required: true
                },
                title_en: {
                    required: true
                },
                icon: {
                    required: true
                }
            },
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
    return {
        init: function() {
            init();
        }
    };
}();
$(document).ready(function() {
    Category.init();
});