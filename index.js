window.onscroll = function() {myFunction()};

var navbar = document.getElementById("nav-container");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
//tab-nav
var x = document.getElementById("about-nav");
var y = x.getElementsByClassName("nav-btn");
for (var i = 0; i < y.length; i++)
{
  y[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
//tab-body
jQuery('.about-nav li').click(function(){
  var index = $(this).index();
  jQuery('.abt-bdy').hide();
  jQuery('.abt-bdy').eq(index).show();
  return false
});
