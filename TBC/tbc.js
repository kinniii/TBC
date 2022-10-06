function toggleNavBar() {
    var n = document.getElementById("navbar");
    if (n.style.display === "block") {
         n.style.display = "none";
    } else {
         n.style.display = "block";
    }
}

window.onresize = function (event) {
    var n = document.getElementById("navbar");
  
    // if desktop width and menu not showing, show menu
    if (window.matchMedia("(min-width:768px)").matches && n.style.display === "none") {
      n.style.display = "block";
    }
  }

