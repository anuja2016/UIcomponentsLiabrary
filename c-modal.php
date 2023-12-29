<?php
include_once 'header.php';
?>


<!-- <div class="cModal">
    <div class="cModalBody">
        <div class="cModalHeader"></div>
        <div class="cModalFooter"></div>
    </div>    
<div> -->


<!-- Modal top-->
<h2 class="cText-center">Modal with Header and Footer</h2>

<!-- Trigger/Open The Modal -->
<div class="cText-center">
<button id="myBtn" class="cBtn-open">Open Modal</button>
</div>
<!-- The Modal -->
<div id="myModal" class="cModal">

  <!-- Modal content -->
  <div class="cModal-content">
    <div class="cModal-header">
      <span class="cClose">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="cModal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="cModal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>


<script>
    // Get top modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("cClose")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == cModal) {
    modal.style.display = "none";
  }
}


</script>
<?php
include_once 'footer.php';
?>


