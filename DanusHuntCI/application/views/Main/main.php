<div class="container">
	<div class="kiri"></div>
		<div class = "slider">
		<figure>
			<div class="slide">
				<img src="images/slide1.jpg">
			</div>
			<div class="slide">
				<img src="images/slide2.jpg">
			</div>
			<div class="slide">
				<img src="images/slide3.jpg">
			</div>
			<div class="slide">
				<img src="images/slide4.jpg">
			</div>
			<div class="slide">
				<img src="images/slide5.jpg">
			</div>
		</figure>
		</div>
		<div class="kanan"></div>
	</div>
	<div class="container">
		<div class="kiri"></div>
		<div class="bag1main">
			<a href="asd"><img src="images/manis.jpg" class="manis"></a>
			<img src="images/asin.jpg" class="asin">
			<img src="images/list.jpg" class="list">
		</div>
		<div class="kanan"></div>
	</div>


	 <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?> 