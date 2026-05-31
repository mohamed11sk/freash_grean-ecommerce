<?php
include "./include/index.html";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/responsive-base.css" />
    <link rel="stylesheet" href="./assests/home.css" />
    <title>Home - All Green Fresh Produce</title>
    <style>
        body {
            background-image: url("./photo/Screenshot 2024-10-21 070545.png"), url("./photo/photo_2024-10-21_07-37-53.jpg");
            background-repeat: no-repeat, no-repeat;
            background-position: clamp(-22px, -2vw, 0) clamp(300px, 50vw, 400px), clamp(600px, 80vw, 100vw) clamp(100px, 15vw, 150px);
            background-size: clamp(300px, 40vw, 500px), clamp(300px, 40vw, 500px);
            background-attachment: scroll;
        }

        @media (max-width: 768px) {
            body {
                background-position: clamp(-22px, -3vw, 0) clamp(350px, 60vw, 500px), clamp(600px, 90vw, 100vw) clamp(100px, 20vw, 150px);
                background-size: clamp(250px, 35vw, 450px), clamp(250px, 35vw, 450px);
            }
        }

    </style>
</head>


<body>
    <div class="content" id="slideshow"></div>
    <small>Copyright © 2011 - 2015 All Green. All rights reserved. This website is designed by: elzoghby.com</small>
    <!-- change poto -->
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