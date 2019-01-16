
<style>
.mySlides {display:none;}
</style>
<h2 class="w3-center">Giảm giá 50%</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="img/nam1.jpg" style="width:100%">
  <img class="mySlides" src="img/nam2.jpg" style="width:100%">
  <img class="mySlides" src="img/nu1.jpg" style="width:100%">
  <img class="mySlides" src="img/nu3.jpg" style="width:100%">
  <img class="mySlides" src="img/nu4.jpg" style="width:100%">
  <img class="mySlides" src="img/tre1.jpg" style="width:100%">
  <img class="mySlides" src="img/tre4.jpg" style="width:100%">

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

