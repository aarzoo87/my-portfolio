<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            scroll-behavior: smooth;
            margin: 0;
            padding: 0;
        }
        header {
            background: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header img {
            width: 100px;
            height: auto;
            border-radius: 50%;
        }
        nav {
            margin: 20px 0;
        }
        nav a {
            color: #f0f0f0; /* Light Gray */
            text-decoration: none;
            padding: 10px;
            display: inline-block;
        }
        nav a:hover {
            color: #ffb6c1; /* Light Pink */
            background: #444;
            border-radius: 5px;
        }
        .section {
            padding: 20px;
            text-align: center;
        }
        .section h2 {
            margin-top: 0;
        }
        .skills, .projects, .testimonials {
            padding: 20px;
        }
        .skills .skill, .projects .project, .testimonials .testimonial {
            margin: 10px 0;
        }
        .skills .skill {
            display: inline-block;
            width: 100px;
        }
        .degree, .project, .testimonial {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            background-color: #f9f9f9;
        }
        .degree:hover, .project:hover, .testimonial:hover {
            background-color: #e0e0e0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
        }
        @media (max-width: 600px) {
            header img {
                width: 80px;
            }
            nav a {
                padding: 5px;
            }
            .degree, .project, .testimonial {
                width: 100%;
                box-sizing: border-box;
            }
        }
    </style>
</head>
<body>
    <header>
        <img src="your-photo.jpg" alt="Aarzee Agrawal">
        <h1>AARZOO AGRAWAL</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#testimonials">Testimonials</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <div id="home" class="section">
        <h2>Welcome</h2>
        <p>Brief introduction about yourself.</p>
    </div>
    <div id="about" class="section">
        <h2>About Me</h2>
        <p>Detailed description about your background, experience, and what you’re passionate about.</p>
    </div>
    <div id="projects" class="section">
        <h2>Projects</h2>
        <div class="projects">
            <div class="project">
                <h3>Project Title</h3>
                <p>Description of the project. <a href="#">View Project</a></p>
            </div>
            <!-- Add more projects here -->
        </div>
    </div>
    <div id="testimonials" class="section">
        <h2>Testimonials</h2>
        <div class="testimonials">
            <div class="testimonial">
                <p>"Aarzee did an excellent job on our project. Highly recommended!" - Client Name</p>
            </div>
            <!-- Add more testimonials here -->
        </div>
    </div>
    <div id="contact" class="section">
        <h2>Contact</h2>
        <p>Feel free to reach out to me via email: <a href="mailto:your-email@example.com">your-email@example.com</a></p>
        <p>Or connect with me on <a href="https://www.linkedin.com/in/your-profile" target="_blank">LinkedIn</a></p>
    </div>
</body>
</html>
