$(document).ready(function(){
  $('.child').hide();
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    if($('#wrapper').hasClass('toggled')){
      $('#menu-toggle').html('<i class="fas fa-toggle-on"></i>');
    }else{
      $('#menu-toggle').html('<i class="fas fa-toggle-off"></i>');
    }
  });

  $('.father').click(function(){
    $('.child').slideToggle();
    return false;
  });
});
