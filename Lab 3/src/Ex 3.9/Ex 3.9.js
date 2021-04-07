$(document).ready(function(){
    var pass = $("#Password");
    var conf = $("#RepeatPassword");
    function validatePassword() {
        if (pass.val().length > 15 || pass.val().length < 6) {
            pass[0].setCustomValidity("Passwords ranges 6 to 15 characters!")
        }
    }
    function validateConfirmPassword() {
        if(pass.val() != conf.val()) {
            conf[0].setCustomValidity("Passwords Don't Match!");
        } else {
            conf[0].setCustomValidity("");
        }
    }
    pass.on('change',validatePassword);
    conf.on('keyup',validateConfirmPassword);
    $(document).on("submit", "form", function(e){
        e.preventDefault();
        alert('Success Register');
        location.reload();
        return  false;
    });
});