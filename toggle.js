$(document).ready(function() {

  $('.det').hide();
  
  $(".mod").click(function(){
      $(".det").not($(this).next()).hide(400);
     $(this).next().toggle(400);
});
         
});