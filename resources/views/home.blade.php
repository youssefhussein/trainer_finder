<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <style>

        .hero {
            background-image: url('assets/images/ttt.jpg');
            background-size: cover;
            color: #ffffff;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 50px;
        }

        .hero p {
            font-size: 20px;
        }

        .content {
            padding: 20px;
            text-align: center;
        }

        .card {
            display: inline-block;
            margin: 15px;
            padding: 20px;
            background: white;
            border: 1px solid #28a745;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card img {
            max-width: 100%;
            /* This allows the image to resize to fit its parent */
            border-radius: 8px;
            /* Maintain existing styling */
        }

        .trainer-image {
            max-width: 200px;
            /* Set to a smaller max-width */
            height: auto;
            /* Maintain aspect ratio */
            margin-bottom: 15px;
            /* Add space below the image */
        }

        .details-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        .details-button:hover {
            background-color: #218838;
        }

        .video-slider {
            position: relative;
            margin: 20px 0;
        }

        .video-slider video {
            width: 100%;
            display: none;
        }

        .video-slider video.active {
            display: block;
        }

        .slider-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .slider-button {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
        }

        .section-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .contact-info {
            list-style-type: none;
            padding: 0;
        }

        #ss {
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        #sport {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: black;
            font-style: bold;
        }

        .contact-info li {
            margin: 5px 0;
        }

        .social-icons {
            margin: 15px 0;
        }

        .social-icons a {
            margin: 0 10px;
            color: white;
        }

        .contact-form {
            margin-top: 20px;
        }

        .contact-form .form-group {
            margin-bottom: 15px;
        }



    </style>


</head>
<body class="bg-black text-white ">


<x-topnav />




<div class="hero">
    <h1>Welcome to Trainer Finder</h1>
    <p>Your ultimate destination for all things sports!</p>
</div>

<div class="content">
    <h2>Featured Sports</h2>
    <div class="card">
        <h3 id="sport">Basketball</h3>
        <p id="ss">Join us for the latest news, scores, and events.</p>
    </div>
    <div class="card">
        <h3 id="sport">Soccer</h3>
        <p id="ss">Get updates on your favorite teams and matches.</p>
    </div>
    <div class="card">
        <h3 id="sport">Fitness</h3>
        <p id="ss">Find workout tips, routines, and personal trainers.</p>
    </div>

    <h2 id="trainers">Find Our Trainers</h2>
    <div class="card">
        <img src="{{asset('assets/images/coach1.jpg')}}" alt="John Doe" class="trainer-image">
        <h3 class=" text-dark">John Doe</h3>
        <p class=" text-dark">Expert in Strength Training</p>
        <button class="details-button">Details</button>
    </div>
    <div class="card">
        <img src="{{asset('assets/images/coach22.jpg')}}" alt="Jane Smith" class="trainer-image">
        <h3 class=" text-dark">Jane Smith</h3>
        <p class=" text-dark">Certified Yoga Instructor</p>
        <button class="details-button">Details</button>
    </div>
    <div class="card">
        <img src="{{asset('assets/images/coach33.jpg')}}" alt="Mark Johnson" class="trainer-image">
        <h3 class=" text-dark">Mark Johnson</h3>
        <p class=" text-dark">Specialist in Cardio and Endurance</p>
        <button class="details-button">Details</button>
    </div>

    <h2 id="videos">Some Of Our Sessions </h2>
    <div class="video-slider">
        <video class="active" controls>
            <source src="{{asset('assets/videos/fitness2.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls>
            <source src="{{asset('assets/videos/fitness1.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <video controls>
            <source src="{{asset('assets/videos/fitness3.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="slider-controls">
            <button class="slider-button" id="prevButton">&lt;</button>
            <button class="slider-button" id="nextButton">&gt;</button>
        </div>
    </div>
</div>
<x-footer />

</body>





<script>

    const videos = document.querySelectorAll('.video-slider video');
    let currentIndex = 0;

    function showVideo(index) {
        videos.forEach((video, i) => {
            video.classList.toggle('active', i === index);
            if (i === index) {
                video.play();
            } else {
                video.pause();
            }
        });
    }

    document.getElementById('nextButton').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % videos.length;
        showVideo(currentIndex);
    });

    document.getElementById('prevButton').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + videos.length) % videos.length;
        showVideo(currentIndex);
    });

</script>
</html>
