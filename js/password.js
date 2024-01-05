$(document).ready(function(){

    let upperCase = new RegExp('[A-Z]');
    let numbers = new RegExp('[0-9]');


  
    $("#newpwd , #newpwdrepeat").keyup(function(){
        let password = $(this).val()
        if(password.length >= 8) {
            $(".maxLength").css("color", "green");
        }else{
            $(".maxLength").css("color", "red");
        }

        if(password.match(upperCase)){
            $(".upCase").css("color", "green");
        }else {
            $(".upCase").css("color", "red");
        }

        if(password.match(numbers)){
            $(".oneNumber").css("color", "green");
        }else {
            $(".oneNumber").css("color", "red");
        }

        if(/^[a-zA-Z0-9]*$/.test(password) == false) {
            $(".oneSpecial").css("color", "green");
        }else {
            $(".oneSpecial").css("color", "red");
        }

        if ($('#newpwd').val() == $('#newpwdrepeat').val()) {
            $('.pwdmatch').css('color', 'green');
          } else 
            $('.pwdmatch').css('color', 'red');

        if((password.length >= 8) && password.match(upperCase) && password.match(numbers) && (/^[a-zA-Z0-9]*$/.test(password) == false)) {
            btn_sbmt.removeAttribute('disabled');
        }else {
            btn_sbmt.setAttribute('disabled', 'disabled');
        }
    });



})