$(function() {
    "use strict";

    //LOGIN FORM START
    //getting body of a html page
    var body = $("body");

    $(document).on({
        ajaxStart: function() { //adding loading class to body of html page when ajax request started
            body.addClass("loading");
        },
        ajaxStop: function() { //removing loading class to body of html page when ajax request stoped
            body.removeClass("loading");
        }
    });

    $("#login-form").on('submit', function(e) { // targeting form that containing #login-form id on submit event
        e.preventDefault(); // preventing default form submition

        $.ajax({
            url: $(this).attr('action'), //getting acction attribute from the selected form
            method: $(this).attr('method'), //getting method attribute from the selected form
            data: new FormData(this), // getting input datas from selected form
            processData: false,
            dataType: 'json',
            contentType: false,
            beforeSend: function() { // before sending ajax request finding span.error-text element on login.blade.php document
                $(document).find('span.error-text').text();
            },
            success: function(data) { // success state and its logic
                if (data.status == false) {
                    $(document).find('span.error-text').remove();
                    var div = document.getElementById('alert');
                    div.classList.add("alert-warning");
                    div.innerHTML = data.message;
                    div.classList.add("animate__fadeIn");
                } else {
                    $(document).find('span.error-text').remove();
                    var div = document.getElementById('alert');
                    div.classList.remove("alert-warning");
                    div.classList.add("alert-success");
                    div.innerHTML = data.message;
                    div.classList.add("animate__fadeIn");
                    setTimeout(function() { // if data.status is true means user auth successful then wait 2 second and redirect to dashboard
                        window.location = config.route; // config.route actually holding dashboard route which is comming from login.blade.php page
                    }, 2000);
                }
            },
            error: function(err) { // getting error
                if (err.status == 422) { // when status code is 422, it's a validation issue
                    $.each(err.responseJSON.errors, function(prefix, val) { // looping through each validation error
                        $('span.' + prefix + '_error').text(val[0]);
                    });
                }
            }

        });
    });

    //LOGIN FORM END
});