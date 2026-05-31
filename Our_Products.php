<?php
include "./include/index.html";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/responsive-base.css" />
    <link rel="stylesheet" href="./assests/Our_Products.css" />
    <title>Our Products - All Green Fresh Produce</title>

</head>

<body>

    <div class="about">
        <div class="about_1" id="slideshow" style="height: 200px; background-size: cover;"></div>
        <div class="content">
            <h2>Our Products</h2>
            <div class="container">
                <div class="item">
                    <img src="./photo/p4-removebg-preview.png" alt="Guava">
                    <div class="label">Guava</div>
                </div>
                <div class="item">
                    <img src="./photo/p4-removebg-preview.png" alt="Guava">
                    <div class="label">Grapes</div>
                </div>
                <div class="item">
                    <img src="./photo/p4-removebg-preview.png" alt="Guava">
                    <div class="label">Strawberries</div>
                </div>
                <div class="item">
                    <img src="./photo/p4-removebg-preview.png" alt="Guava">
                    <div class="label">Capsicum</div>
                </div>
                <div class="item">
                    <img src="./photo/p4-removebg-preview.png" alt="Guava">
                    <div class="label">Dry Onion</div>
                </div>
                <div class="item">
                    <img src="./photo/p4-removebg-preview.png" alt="Guava">
                    <div class="label">Dry Onion</div>
                </div>
                <!-- Add more items here -->
            </div>
        </div>
    </div>
    <small>Copyright © 2011 - 2015 All Green. All rights reserved. This website is designed by: elzoghby.com</small>

    <!-- Change photo -->
    <script>
        const images = [
            "./photo/p4-removebg-preview.png",
            "./photo/png-clipart-green-grapes-juice-grape-leaves-water-fruit-spray-grapes-food-photography-thumbnail-removebg-preview.png",
        ];

        let currentIndex = 0;

        function changeBackground() {
            const slideshowDiv = document.getElementById('slideshow');
            slideshowDiv.style.backgroundImage = `url(${images[currentIndex]})`;
            currentIndex = (currentIndex + 1) % images.length;
        }

        setInterval(changeBackground, 3000);
        changeBackground();
    </script>

</body>

</html>