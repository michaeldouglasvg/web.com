
$(document).ready(function{
    $(".hamburger .fas").click(function(){
        $(".wrapper").addClass("active")
    })
    
    $(".wrapper .sidebar .close").click(function(){
        $(".wrapper").removeClass("active")
    })
    
    function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
})