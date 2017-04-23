$(document).ready(function () {
    $('body').scrollspy({ target: '#navbar' });

    
    $("#submit").click(function () {

        var name = $("#nameTxt").val();
        var email = $("#emailTxt").val();
        var phone = $("#phoneTxt").val();
        var message = $("#messageTxt").val();

        var dataString = 'name=' + name + '&email=' + email + '&contact=' + phone;

        if(validateTxt(name,email,phone,message))
        {    
        $.ajax({
            type: "POST",
            url: "addMessage.php",
            data: dataString,
            cache: false,
            success: function (result) {
             alert("message sent successfully");
            }
        });


        }
        return false;
    });
});


function validateTxt(name, email, phone, message)
{
    if (name === '') 
    $("#errorMessage").text("Please Fill your Full Name  ");
    else if (email === '')
    $("#errorMessage").text("Please Fill Your Email");
    else if (!validateEmail(email))
    $("#errorMessage").text("Your Email is Invalid");
    else if (phone === '')
    $("#errorMessage").text("Please Fill Your Phone Number");
     else if (message === '')
    $("#errorMessage").text("Please Fill Your message");
    else
    return true;    
}

function validateEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test(email)) {
        return false;
    } else {
        return true;
    }
}

