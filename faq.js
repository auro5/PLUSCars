$(document).ready(function() {

  $('.answer').hide();
  
  $(".question").click(function(){
      $(".answer").not($(this).next()).hide(400);
     $(this).next().toggle(400);
});
         
});