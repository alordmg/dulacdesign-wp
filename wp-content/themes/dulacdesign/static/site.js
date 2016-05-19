$(document).ready(function() {

  //var element = $("#hero").offset().top;
  var hauteurHero = $("#hero").height();

  $(window).scroll(function(){
    var y = $(window).scrollTop();
      if (y >= hauteurHero){
        $('#navigation-desktop').addClass('bg-blanc');
        $('#navigation-desktop ul li a').addClass('nav-fonce');
        $('.logo-noir').show();
      }

      if (y <= hauteurHero){
        $('#navigation-desktop').removeClass('bg-blanc');
        $('#navigation-desktop ul li a').removeClass('nav-fonce');
        $('.logo-noir').hide();
      }
  });

  $('.scroll-to').on('click', function() { // Au clic sur un élément
    var page = $(this).attr('href'); // Page cible
    var speed = 750; // Durée de l'animation (en ms)
    $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
    return false;
  });

  $('.nav-icon').on('click', function() {
    $('#navigation').toggleClass('nav-ouvert');
  })

  $('.container-photos').Chocolat();

});
