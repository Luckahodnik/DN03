$(document).ready(function(){
  $('.parallax').parallax();
  $('.sidenav').sidenav();
  $('.modal').modal();
		$('.modal-trigger').modal({
		dismissible: false
  });
		$(".dropdown-trigger").dropdown();
});

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.parallax');
  M.Parallax.init(elems);
});
