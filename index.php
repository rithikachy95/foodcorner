<?php
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Food Gallery</title>
		
		<link rel="stylesheet" href="style.css" />
    </head>
    <body>
	
		<div class="header">
			<div class="title">Food Gallery</div>
			<nav>

			  <a href="#image">Home</a>
			  <a href="#description">About</a>
			  <a href="#menu">Menu</a>
			  <a href="customer_order.php">Customer Order</a>
			  <a href="user.php">Admin</a>
			  
			</nav>
		</div>
		<div class="image" id="image">
			<img src="image/1.jpg" alt="no image" width="100%"/>
			
		</div>
		<div id="description">
		<div class="about">
			<div class="about_title">About Us</div>
			<div class="img"><img src="image/About-C-bg.jpg" alt="no image"/></div>
		</div>
		<div class="des">
			Astronomy compels the soul to look upward, and leads us from this world to another. Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
			<br />
			<br />
			<br />
			<br />
			beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man. Where ignorance lurks, so too do the frontiers of discovery and imagination.
			Astronomy compels the soul to look upward, and leads us from this world to another. Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
			<br />
			<br />
			<br />
			<br />
			beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man. Where ignorance lurks, so too do the frontiers of discovery and imagination.
			
		</div>
		</div>
		<div id="menu">
			<div class="about_title">Menu Item</div>
			<div class="menu-image">
				<div class="menu_item">
					<h2>Tomato Curry</h2>
					<img src="image/food1.jpg" alt="no image" />
					<div class="price">TK.200</div>
					<div class="des1">This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.</div>
				</div>
				<div class="menu_item">
					<h2>Prawn Dish</h2>
					<img src="image/food2.jpg" alt="no image" />
					<div class="price">TK.500</div>
					<div class="des1">This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.</div>
				</div>
				<div class="menu_item">
					<h2>Salad Dish</h2>
					<img src="image/food3.jpg" alt="no image" />
					<div class="price">TK.100</div>
					<div class="des1">This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.</div>
				</div>
				<div class="menu_item">
					<h2>Vegetable Dish</h2>
					<img src="image/food4.jpg" alt="no image" />
					<div class="price">TK.150</div>
					<div class="des1">This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.</div>
				</div>
				<div class="menu_item">
					<h2>Chicken Dish</h2>
					<img src="image/food6.jpg" alt="no image" />
					<div class="price">TK.900</div>
					<div class="des1">This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.</div>
				</div>
				<div class="menu_item">
					<h2>Salad Curry</h2>
					<img src="image/food5.jpg" alt="no image" />
					<div class="price">TK.200</div>
					<div class="des1">This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.This is tomto curry.</div>
				</div>
			</div>
		</div>

		
    </body>
</html>