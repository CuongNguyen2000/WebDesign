/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function Function_drop() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function Function_drop_login() {
  document.getElementById("dropdown_login").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var dropdown_login = document.getElementById("dropdown_login");
    if (dropdown_login.classList.contains('show')) {
      dropdown_login.classList.remove('show');
    }
  }
}