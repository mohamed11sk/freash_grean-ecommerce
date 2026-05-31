<?php
include "./include/index.html";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/responsive-base.css" />
    <link rel="stylesheet" href="./assests/Outlets.css" />
    <title>Outlets - All Green Fresh Produce</title>

</head>

<body>
    <div class="about">
        <div class="about_1" id="slideshow"></div>
        <div class="content">
            <h2>Outlets</h2>
            <p>
                All Green plans on operating five sales outlets throughout Cairo to provide convenience and availability to its customers. Our outlets will provide home delivery through a Hotline.
            </p>
            <span>Outlets Locations:</span>
            <div class="map">
                <ul>
                    <li>Maadi</li>
                    <li>Mohandesein</li>
                    <li>Misr El-Gedida</li>
                    <li>Zamalek</li>
                    <li>Tagamou El-Khamis</li>
                </ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.61753444587!2d31.423336900000002!3d29.990419799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583df8cb9d92ff%3A0x58bc3509f9cc8c70!2sSmpl%20ID!5e0!3m2!1sar!2seg!4v1729506815922!5m2!1sar!2seg" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>
    <small>Copyright © 2011 - 2015 All Green. All rights reserved. This website is designed by: elzoghby.com</small>

    <!-- Change photo -->
    <script>
        const images = [
            "./photo/p4-removebg-preview.png",
            "./photo/png-clipart-green-grapes-juice-grape-leaves-water-fruit-spray-grapes-food-photography-thumbnail-removebg-preview.png"
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