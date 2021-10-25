$(function () {

    $("#frm-login").submit(function (event) {
        event.preventDefault();

        let options = {
            "url": "http://localhost/first_repository/server/login.php",
            "method": "post",
            "data": $("#frm-login").serialize(),
            "success": function (res) {
                let response = JSON.parse(res);
                if (response.status == 1) {
                    //get the user detail 
                    console.log(response.user_details)
                    $('#mdl-login').modal('hide');
                    //Replace 
                } else {
                    $("#error-msg").show();
                    $("#error-msg").html(response.message);
                    console.log(response.message);
                }
            },
            "error": function (err) {
                console.log(err.statusText);
            }
        };



        $.ajax(options);
    });
});