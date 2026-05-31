<?php
include "./include/index.html";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/responsive-base.css" />
    <link rel="stylesheet" href="./assests/Supply.css" />
    <title>Supply - All Green Fresh Produce</title>
</head>


<body>

    <div class="about">
        <div class="about_1" id="slideshow"></div>
        <div class="content">
            <h2>Supply</h2>

            <!-- <h4> Exportation:</h4> -->
            <p>Our supply is mainly directed towards exportation. We export to countries in all continents.</p>


            <p>Our produce is also exported indirectly via exporting companies to the United Kingdom, Europe, Far East and the Middle East.</p>
            <p>Our products will also be found in the supermarkets all over Cairo.</p>
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