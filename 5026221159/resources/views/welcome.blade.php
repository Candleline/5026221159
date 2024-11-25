<!DOCTYPE html>
<html lang="en">
<!--Candleline Audrina Firsta
5026221159
https://www.homsweethom.com/-->
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hom Sweet Hom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Header Styles */
        .header {
            background-color: #2f7a62;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .header h1 {
            color: white;
            font-family: 'Georgia', serif;
            font-size: 36px;
            margin: 0;
        }

        .navbar-nav {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .navbar-nav a, .dropbtn {
            color: white;
            font-size: 18px;
            text-decoration: none;
            font-weight: bold;
            background: none;
            border: none;
            cursor: pointer;
        }

        .navbar-nav a:hover, .dropbtn:hover {
            text-decoration: underline;
        }

        /* Dropdown Styles */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Section Styles */
        .main-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
            background-color: #f1faf5;
            flex-wrap: wrap;
        }

        .main-section .image-side img {
            max-width: 100%;
            border-radius: 10px;
            margin-right: 30px;
        }

        .main-section .text-side {
            max-width: 500px;
            padding: 0 30px;
        }

        .main-section .text-side h2 {
            color: #f08362;
            font-size: 48px;
            margin-bottom: 20px;
        }

        .main-section .text-side p {
            font-size: 20px;
            line-height: 1.8;
            color: #336666;
        }

        .main-section .text-side p span {
            font-weight: bold;
        }

        /* Work Section */
        .work-gallery {
            padding: 50px 0;
        }

        .work-gallery img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .gallery-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* Section Container Styles */
        .section-container {
            padding: 50px 0;
            text-align: center;
        }

        .section-container h2 {
            color: #f08362;
            margin-bottom: 20px;
        }

        .section-container p {
            font-size: 18px;
            color: #336666;
        }

        /* Contact Form Styles */
        .contact-form-container {
            padding: 50px 0;
            background-color: #f1faf5;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            color: #f08362;
            margin-bottom: 20px;
        }

        .contact-form label {
            font-size: 16px;
            color: #336666;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            padding: 10px 20px;
            background-color: #f08362;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .contact-form button:hover {
            background-color: #2f7a62;
        }

        .notification {
            display: none;
            color: green;
            margin-bottom: 20px;
            font-size: 16px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .main-section {
                flex-direction: column;
                text-align: center;
            }

            .main-section .image-side img {
                margin-bottom: 20px;
            }

            .main-section .text-side {
                padding: 0;
            }

            .main-section .text-side h2 {
                font-size: 36px;
            }

            .main-section .text-side p {
                font-size: 18px;
            }

            .header h1 {
                font-size: 28px;
            }

            .navbar-nav {
                flex-direction: column;
                gap: 10px;
            }

            .gallery-row {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .main-section .text-side h2 {
                font-size: 28px;
            }

            .main-section .text-side p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <h1>Hom Sweet Hom</h1>
        <nav>
            <ul class="navbar-nav d-flex flex-row">
                <li>
                    <div class="dropdown">
                        <button class="dropbtn" onclick="toggleDropdown()">Tugas</button>
                        <div class="dropdown-content" id="dropdownMenu">
                            <a href="{{ url('/style2') }}">Style2</a>
                            <a href="{{ url('/style') }}">Style</a>
                            <a href="{{ url('/responsive1') }}">Responsive1</a>
                            <a href="{{ url('/linktree') }}">Linktree</a>
                            <a href="{{ url('/hello') }}">Hello</a>
                            <a href="{{ url('/form') }}">Form</a>
                            <a href="{{ url('/5026221159') }}">5026221159</a>
                        </div>
                    </div>
                </li>
                <li><a href="#homeSection">Home</a></li>
                <li><a href="#workSection">Work</a></li>
                <li><a href="#aboutSection">About</a></li>
                <li><a href="#classesSection">Classes</a></li>
                <li><a href="#contactSection">Contact</a></li>
            </ul>
        </nav>
    </header>
    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    dropdowns[i].style.display = "none";
                }
            }
        }
    </script>

  

    <!-- Main Section -->
    <section class="main-section" id="homeSection">
        <h2 style="color: #2f4f4f; text-align: center;">Home</h2>
        <div class="image-side">
            <img src="https://images.squarespace-cdn.com/content/v1/62a10e769b6cd36573dcdc25/1666369135366-J8LE845EAZ05IDQVPEUC/image-asset.jpeg?format=2500w" alt="Lauren Hom">
        </div>
        <div class="text-side">
        <h2 style="color: #f08362;">Hi! I’m Lauren Hom.</h2>
            <p>I’m a <span>designer</span> & <span>lettering artist</span> with a knack for marketing who loves helping creatives and brands get more eyes on their work.</p>
        </div>
    </section>


    <!-- Work Section -->
    <section class="work-gallery container" id="workSection">
        <h2 style="color: #2f4f4f; text-align: center;">Work</h2>
        <div class="gallery-row">
            <img src="https://images.squarespace-cdn.com/content/v1/62a10e769b6cd36573dcdc25/bfae3c08-4401-48b0-ba23-f28633a29f3f/Take-Everything-on-Social-Media-with-a-Grain-of-Salt-Tactile-Lettering-Lauren-Hom.jpg?format=500w" alt="Work Image 1">
            <img src="https://images.squarespace-cdn.com/content/v1/62a10e769b6cd36573dcdc25/56576185-6893-4ff0-99f6-a88d37c23880/hom-sweet-hom-splc-lettering-card-envelope.jpg?format=500w" alt="Work Image 2">
            <img src="https://images.squarespace-cdn.com/content/v1/62a10e769b6cd36573dcdc25/3f7c64ff-4f70-4f30-a876-f37f12622193/Seasonings-for-Creative-Success-Illustration-by-Lauren-Hom.jpg?format=500w" alt="Work Image 3">
       
            <img src="https://images.squarespace-cdn.com/content/v1/62a10e769b6cd36573dcdc25/43ab2524-16ef-44b0-99c7-b3c66c57b65d/Lauren-Hom-Clare-Collective-Paint-Projects-2022-2023-thumb.gif?format=500w" alt="Work Image 4">
            <img src="https://images.squarespace-cdn.com/content/v1/62a10e769b6cd36573dcdc25/d01800cb-ddf7-42b1-9126-18d2747b3327/Tactile-Spice-pattern-Gift-Card-Design-by-Lauren-Hom-for-Target-Winter-2023-1.jpg?format=500w" alt="Work Image 5">
            <img src="https://images.squarespace-cdn.com/content/v1/62a10e769b6cd36573dcdc25/e00fa9fe-b2f1-4023-81ba-26a4f430e4ee/Squeeze-the-Day-Lauren-Hom-Erin-Condren-AAPI-Heritage-Month-Collection-Planner-Interchangeable-Covers.gif?format=500w" alt="Work Image 6">
        </div>
    </section>


<!-- About Section -->
<section class="section-container" id="aboutSection" style="background-color: #f1faf5; padding: 20px;">
    <h2 style="color: #2f4f4f; text-align: center;">About</h2>
    <div class="image-side">
        <img src="https://images.squarespace-cdn.com/content/v1/62a10e769b6cd36573dcdc25/1666368988889-ZERIXLG25OSO9GIZFPAI/image-asset.jpeg?format=2500w" 
            alt="Lauren Hom" style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
    </div>
    <p style="text-align: justify;">I’m a designer and hand lettering artist based in Detroit, but I’ll always be a California gal at heart. I picked up hand lettering as a hobby while studying advertising at the School of Visual Arts, and over the next few years (+ thanks to the power of the internet) I leveraged a few clever passion projects into a thriving freelance business!</p>
    <p style="text-align: justify;">I know from experience that building a creative career can be a challenging and overwhelming endeavor, which is why I love sharing what I’ve learned with others through my online courses and free resources on my blog.</p>
    <p style="text-align: justify;">When I’m not working on client projects or teaching, you can find me learning how to make my favorite foods from scratch or finally making my way through the niche craft supplies I bought last year.</p>
    <p style="text-align: justify;">My motto is, and will always be, “Work hard, snack often.” After almost a decade in the design industry, I realize that working hard all the time isn't sustainable, but I got it tattooed on my forearms when I was 23 so it will always be my motto and I’m fine with it. I just remind myself and others to take more breaks now.</p>
    <p style="text-align: justify;">Speaking of snacking often: I recently graduated from the Plant-Based Culinary Arts program at the Institute of Culinary Education in New York. Now I’m back in the studio and available for new creative projects and partnerships (especially food-related ones!).</p>
</section>


    <!-- Classes Section -->
    <section class="section-container" id="classesSection">
        <h2 style="color: #2f4f4f; text-align: center;">Classes</h2>
        <div class="image-side">
        <img src="https://www.filepicker.io/api/file/MeXwNNkTQSa2H4lEGjr9" 
        alt="Lauren Hom" style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
</div>
             <!-- Menambahkan latar belakang dan jarak di sekitar paragraf -->
    <div style="background-color: #ffffff; padding: 20px 40px; border-radius: 10px;">
        <p style="text-align: justify;">Ready to scale up the size of your work? I packed 6 years of mural painting experience into one powerful online course to teach creatives how to go BIG with their work (pun intended). Gain the confidence to pick up a paintbrush, start adding murals to your portfolio NOW instead of “someday” and start getting paid to paint the large-scale artwork you’ve always dreamed of doing.</p>
    </div>
</section>
    <!-- Contact Section -->
    <section class="contact-form-container" id="contactSection">
        <div class="contact-form">
            <h2 style="color: #2f4f4f; text-align: center;">Contact</h2>
            <!-- Notification message -->
            <div class="notification" id="notification">Sudah terkirim!</div>
            <form id="contactForm">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <script>
        // Handle form submission
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent page refresh
            document.getElementById('notification').style.display = 'block'; // Show the notification
        });
    </script>

</body>

</html>