window.onload = function() {
  //alert('TEST');
  var classesIconNav = document.getElementsByClassName("nav-icon");

  for (var i = 0; i < classesIconNav.length; i++) {
      classesIconNav[i].addEventListener('click', ouvrirNavigation, false);
  }
}

function ouvrirNavigation() {
  document.getElementById('navigation').classList.toggle('nav-ouvert');
}
