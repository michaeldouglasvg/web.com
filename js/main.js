$(document).ready(function(){

    $("#text-search").on("keyup", function() {

      var value = $(this).val().toLowerCase();
      console.log(value);
      $(".item, h3, p").filter(function() {

      var word = $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       
      });

    });


});