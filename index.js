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

function showone(){
    document.getElementById("abt-bdy1").className= "active-body";
    document.getElementById("abt-bdy2").className= "display-none";
    document.getElementById("abt-bdy3").className= "display-none";
}
function showtwo(){
    document.getElementById("abt-bdy2").className= "main-nav-rest";
    document.getElementById("abt-bdy1").className= "display-none";
    document.getElementById("abt-bdy3").className= "display-none";
}
function showthree(){
    document.getElementById("abt-bdy3").className= "main-nav-rest";
    document.getElementById("abt-bdy2").className= "display-none";
    document.getElementById("abt-bdy1").className= "display-none";
}
