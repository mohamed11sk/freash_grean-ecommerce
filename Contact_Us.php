<?php
include "./include/index.html";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/responsive-base.css" />
    <link rel="stylesheet" href="./assests/Contact_Us.css" />
    <title>Contact Us - All Green Fresh Produce</title>

</head>

<body>

    <div class="about">
        <div class="about_1" id="slideshow"></div>
        <div class="content">
            <h2>Contact Us</h2>

            <p>We listen very carefully to all our customers' requirements and we apply it to what we know and do best, in order to deliver consistently high levels of service. We're flexible too and carry out contracts on a long, short, or seasonal basis.</p>
            <p>Also you can use the form below to find the best way to contact us based on your need. Give us a call at: +20 (122) 750-0877 or shoot us an email at: info@allgreen.me</p>

            <form action="process_contact.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone">

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>

        </div>
    </div>
    <small>Copyright © 2011 - 2015 All Green. All rights reserved. This website is designed by: elzoghby.com</small>


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