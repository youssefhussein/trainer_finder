<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
        }
        nav {
            background-color: #28a745;
        }
        .hero-section {
            background: url('images/about-banner.jpg') no-repeat center center;
            background-size: cover;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .content-section {
            margin: 40px auto;
            max-width: 800px;
            text-align: left;
        }
        .content-section h2 {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .content-section p {
            line-height: 1.6;
        }
        .values {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
        }
        .value-item {
            background-color: #343a40;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            color: #28a745;
            width: 100%;
            margin: 10px;
        }
        .value-item h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        .footer {
            background-color: #28a745;
            padding: 20px;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
<x-topnav />


<!-- Hero Section -->
<div class="hero-section">
    <h1>About Trainer Finder</h1>
</div>

<!-- Content Section -->
<div class="content-section">
    <h2>Our Mission</h2>
    <p>Trainer Finder is dedicated to bridging the gap between individuals seeking professional fitness guidance and certified trainers who are passionate about helping clients achieve their goals. Our platform simplifies the process of finding the right trainer by allowing users to browse, connect, and communicate with trainers in their area.</p>

    <h2>What We Offer</h2>
    <p>Our mission is to empower people on their fitness journeys by making quality training accessible. Whether you’re just starting out or looking to reach new fitness heights, Trainer Finder helps you find certified trainers who can customize workouts, provide expert advice, and motivate you every step of the way.</p>

    <!-- Core Values -->
    <div class="values">
        <div class="value-item">
            <h3>Quality</h3>
            <p>We prioritize quality by partnering with certified trainers who are passionate and knowledgeable, ensuring you receive the best guidance possible.</p>
        </div>
        <div class="value-item">
            <h3>Trust</h3>
            <p>All trainers on our platform go through a rigorous verification process, giving you peace of mind in choosing professionals dedicated to your success.</p>
        </div>
        <div class="value-item">
            <h3>Community</h3>
            <p>We believe in the power of community, connecting like-minded individuals with a shared goal: achieving a healthier, fitter lifestyle.</p>
        </div>
    </div>
</div>

</body>
</html>
