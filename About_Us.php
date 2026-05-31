<?php
include "./include/index.html";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/responsive-base.css" />
    <link rel="stylesheet" href="./assests/About_Us.css" />
    <title>About Us - All Green Fresh Produce</title>
</head>

<body>

    <div class="about">
        <div class="about_1" id="slideshow"></div>
        <div class="content">
            <h2>Company profile</h2>
            <p>Headquartered in Cairo, Egypt, All Green is a grower of high quality fresh fruits and vegetables for export markets. All Green stands out between the competitions for its ability to deliver high quality produce at the highest standards.</p>
            <p>All Green uses the latest technology in irrigation and green houses and few years ago, the company has introduced the electronic green houses to the Egyptian market. Utilizing state-of-the-art green houses in our farms helps extending the shelf life of our produce from one day to four.</p>
            <p>All Green product line include: Strawberries, Grapes, Guava, Capsicum, Cucumber, Lime, Chili Pepper, Spring Onion, Dry Onion, Sugar Snap, Green Beans, Coriander, Garlic and other seasonally harvested items, and fresh specialty produce.</p>
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