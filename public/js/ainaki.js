/**
 * Created by mr-code on 7/29/2018.
 */
$(document).ready(function () {
    $("#signUpForm").submit(function (event) {
        $('#myModalRegister').css({'z-index': "99999"}).modal('hide');
        event.preventDefault();
        var $form = $(this),
            url = $form.attr('action');

        var posting = $.ajax({

            method: "POST",
            url: url,
            data: {phone:$('#signUpPhone').val() , email: $('#signUpEmail').val(), pswd: $('#signUpPwd').val()},
            success: function (response) {
                if (!response.error ) {
                    $('#messageModalTitle').text('عملیات موفق');
                    $('#messageModalMessage').text(response.message);
                    $('#messageModal').css({'z-index': "99999"}).modal('show');
                }else{
                    $('#messageModalTitle').text('خطا');
                    $('#messageModalMessage').text(response.message);
                    $('#messageModal').css({'z-index': "99999"}).modal('show');
                }
            },
            dataType: "json"
        });
    });


    $("#loginFrom").submit(function (event) {
        $('#myModalRegister').css({'z-index': "99999"}).modal('hide');
        event.preventDefault();
        var $form = $(this),
            url = $form.attr('action');

        var posting = $.ajax({
            method: "POST",
            url: url,
            data: {email: $('#loginEmail').val(), pswd: $('#loginPwd').val(), remember:$('#loginRemember').prop('checked')},
            success: function (response) {
                if (!response.error ) {
                    $('#messageModalTitle').text('عملیات موفق');
                    $('#messageModalMessage').text(response.message);
                    $('#messageModal').css({'z-index': "99999"}).modal('show');
                }else{
                    $('#messageModalTitle').text('خطا');
                    $('#messageModalMessage').text(response.message);
                    $('#messageModal').css({'z-index': "99999"}).modal('show');
                }
            },
            dataType: "json"
        });
    });
});
