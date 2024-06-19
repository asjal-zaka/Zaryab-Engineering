/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

window.onload = () => {
  let yearNode = Array.from(document.getElementsByClassName('year'));
  let currentYear = new Date().getFullYear()
  yearNode.map((node) => {
    node.innerHTML = currentYear;
  })
}