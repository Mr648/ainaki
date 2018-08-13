/**
 * Created by mr-code on 7/29/2018.
 */
$(document).ready(function () {


    $("#signUpForm").submit(function (event) {
        // $('#myModalRegister').css({'z-index': "99999"}).modal('hide');
        event.preventDefault();
        $(this).find('.alert.alert-danger').each(function () {
            $(this).addClass('invisible');
            $(this).text('');
        });
        $(this).find('input').each(function () {
            $(this).removeClass('is-invalid');
        });

        $(this).find('div.form-control-feedback').each(function () {
            $(this).removeClass('invalid-feedback');
            $(this).text('');
        });
        var $form = $(this),
            url = $form.attr('action');

        var posting = $.ajax({

                method: "POST",
                url: url,
                data: {phone: $('#signUpPhone').val(), email: $('#signUpEmail').val(), pswd: $('#signUpPswd').val()},

                dataType: "json",
                statusCode: {
                    404: function () {
                        alert("page not found");
                    },
                    400: function (data) {
                        function capitalizeFirstLetter(string) {
                            return string.charAt(0).toUpperCase() + string.slice(1);
                        }

                        function handleError($label, $input, msg) {
                            $label.text(msg);
                            $label.addClass('invalid-feedback');
                            $input.addClass('is-invalid');
                        }

                        function handleSuccess($label, $input) {
                            $label.text('');
                            $label.addClass('valid-feedback');
                            $input.addClass('is-valid');
                        }

                        var messages = data.responseJSON.messages;
                        var fields = ['email', 'phone', 'pswd'];
                        fields.forEach(function (item) {
                            if (messages.hasOwnProperty(item)) {
                                handleError($('#' + item + 'Feedback'), $('#signUp' + capitalizeFirstLetter(item)), messages[item]);
                            } else {
                                handleSuccess($('#' + item + 'Feedback'), $('#signUp' + capitalizeFirstLetter(item)));
                            }
                        });
                    }
                }
            }).done(function (response) {

                if (!response.error) {
                    $('.form-inputs').hide(1000);
                    $('.form-response').show(1000);
                    $('.form-response > .alert.alert-success').text(response.message);
                } else {
                    $alert = $('.alert.alert-danger');
                    $alert.removeClass('invisible');
                    $alert.text(response.message);
                }
            })
            ;
    });


//    $("#loginFrom").submit(function (event) {
//        $('#myModalRegister').css({'z-index': "99999"}).modal('hide');
//        event.preventDefault();
//        var $form = $(this),
//            url = $form.attr('action');
//
//        var posting = $.ajax({
//            method: "POST",
//            url: url,
//            data: {},
//            success: function (response) {
//                if (!response.error ) {
    //                     // $('#messageModalTitle').text('عملیات موفق');
    //                     // $('#messageModalMessage').text(response.message);
    //                     // $('#messageModal').css({'z-index': "99999"}).modal('show');//                     window.location.href='/';
//                }else{
    //                     // $('#messageModalTitle').text('خطا');
    //                     // $('#messageModalMessage').text(response.message);
    //                     // $('#messageModal').css({'z-index': "99999"}).modal('show');
//                }
//            },
//            dataType: "json"
//        });
//    });
});
