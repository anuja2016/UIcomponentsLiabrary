<?php
include_once 'header.php';
?>

<h2 class="">Dropdown Button</h2>
<div class="cDropdown ">
  <button onclick="myFunction()" class="cDropbtn">Dropdown</button>
  <div id="cDropdown" class="cDropdown-content">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </div>
</div>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("cDropdown").classList.toggle("cShow");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.cDropbtn')) {
    var dropdowns = document.getElementsByClassName("cDropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('cShow')) {
        openDropdown.classList.remove('cShow');
      }
    }
  }
}
</script>
<?php
include_once 'footer.php';
?>