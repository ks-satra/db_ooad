<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-home"></i> หน้าแรก
    </div>
    <div class="panel-body">
    	<!-- <h2 class="w3-center">Manual Slideshow</h2> -->
	<div class="w3-content w3-display-container">
      <img class="mySlides" src="image/1.jpg" style="width:100%">
      <img class="mySlides" src="image/12.jpg" style="width:100%">
      <img class="mySlides" src="image/3.jpg" style="width:100%">
      <img class="mySlides" src="image/4.jpg" style="width:100%">
          <!-- <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a> 
          <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a> -->
          <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)"><i class="fa fa-hand-o-left" aria-hidden="true"></i></a>
          <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)"><i class="fa fa-hand-o-right" aria-hidden="true"></i></a>
	</div>
	<script>
		var slideIndex = 1;
		showDivs(slideIndex);
		
		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}
		
		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  if (n > x.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
			 x[i].style.display = "none";  
		  }
		  x[slideIndex-1].style.display = "block";  
		}
    </script>
        <nav aria-label="...">
          <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li class="pagination pagination-sm"><a href="#">2 <span class="sr-only">(current)</span></a></li>
            <li class="pagination pagination-sm"><a href="#">3 <span class="sr-only">(current)</span></a></li>
            <li class="pagination pagination-sm"><a href="#">4 <span class="sr-only">(current)</span></a></li>
          	<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></li> 
          </ul>
    	</nav>
    </div>
</div>