$(document).ready(function(){
    $("#submit").click(function(){
        swal("System under maintainance", "Am sorry for using this contact page at the moment is still under php backend processing. The form will be ready soon, am working on in. Thanks for your submit", "success");
    })
    $("#name, #email, #phone, #subject, #message").on("keyup", function(){
        swal("Oops", "The inputs are not yet ready to hold your data, please press send to read more on this problem. You are welcomed");
    })
})