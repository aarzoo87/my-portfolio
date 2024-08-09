<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style type="text/css">
        body {
            font-family: Times new roman;
            font-size: 20px;
            scroll-behavior: smooth;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        nav {
            margin: 20px 0;
        }
        nav a {
            color: #f0f0f0;
            text-decoration: none;
            padding: 10px 15px;
            margin: 0 5px;
            display: inline-block;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }
        nav a:hover {
            color: #fff;
            background: #ff7f7f;
            text-decoration: none;
        }
        .section {
            padding: 40px 20px;
            text-align: center;
            background-color: #fff;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .section h2 {
            margin-top: 0;
            font-size: 2em;
            color: #333;
        }
        .section p {
            color: #555;
        }
        .education, .projects, .testimonials {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .degree, .project, .testimonial {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            background-color: #f9f9f9;
            transition: background 0.3s, transform 0.3s, box-shadow 0.3s;
            width: 300px;
            text-align: left;
        }
        .degree:hover, .project:hover, .testimonial:hover {
            background-color: #e0e0e0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
        }
        .degree h4, .project h3, .testimonial p {
            margin: 10px 0;
        }
        @media (max-width: 600px) {
            nav a {
                padding: 5px;
                font-size: 16px;
            }
            .degree, .project, .testimonial {
                width: 100%;
            }
        }

        .skills {
		    display: flex;
		    flex-wrap: wrap;
		    justify-content: center;
		    gap: 20px;
		    width: 500px;
		    margin-left: 680px;
		}

		.skill, .experience {
		    border: 1px solid #ddd;
		    border-radius: 10px;
		    padding: 20px;
		    background-color: #fff;
		    width: calc(33.333% - 20px); 
		    box-sizing: border-box; 
		    text-align: center;
		    transition: background-color 0.3s, box-shadow 0.3s;
		    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
		}

        .experience {
            margin-left: 600px;
        }

		.skill img {
		    width: 80px; /* Adjust size as needed */
		    height: 80px; /* Adjust size as needed */
		    object-fit: contain;
		    display: block;
		    margin: 0 auto;
		}

		.skill h4 {
		    margin-top: 10px;
		    font-size: 1.2em;
		    color: #333;
		}


		@media (max-width: 600px) {
		    .skills {
                flex-direction: column; /* Stack skills vertically */
                width: 100%; /* Full width */
                margin: 0; /* Remove margin */
            }

            .skill {
                width: 100%; /* Full width on mobile */
                margin: 10px 0; /* Add margin for spacing */
            }

            .experience {
                width: 100%; /* Full width on mobile */
                margin: 10px 0; /* Add margin for spacing */
            }

		}


    </style>
</head>
<body>
    <header>
        <h1>AARZOO AGRAWAL</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <div id="home" class="section">
        <h2>Welcome</h2>
        <p>Hello! I'm Aarzoo Agrawal, a passionate web developer specializing in creating user-centric and responsive websites. With a strong foundation in back-end technologies, I strive to deliver innovative and efficient solutions.</p>
    </div>
    <div id="about" class="section">
        <h2>About Me</h2>
        <p>I specialize in creating user-friendly and responsive websites. With experience in various web technologies and a knack for problem-solving, I am dedicated to delivering high-quality solutions.</p>
        <p>My career goal is to leverage my skills to develop innovative web applications and contribute to impactful projects.</p>
        <h2>Education Details</h2>
        <div class="education">
            <div class="degree">
                <h4>Graduation</h4>
                <p>University: Gujarat University</p>
                <p>Degree: BCA</p>
                <p>Grade: 8.4 CGPA</p>
                <P>Duration: July 2021 - April 2024</P>
            </div>
            <div class="degree">
                <h4>HSC</h4>
                <p>School: Pushpanjali Vidhyalaya</p>
                <p>Field: Commerce</p>
                <p>Grade: 89.12%</p>
                <p>Duration: May 2020 - April 2021</p>
            </div>
            <div class="degree">
                <h4>SSC</h4>
                <p>School: Pushpanjali Vidhyalaya</p>
                <p>Grade: 88.33%</p>
                <p>Duration: May 2018 - April 2019</p>
            </div>
        </div>
    </div>
    <div id="skill" class="section">
        <h2>Skills</h2>
        <div class="skills">
            <div class="skill">
                <h4>HTML</h4>
                <img src="<?=base_url('upload/HTML.png'); ?>">
            </div>
            <div class="skill">
                <h4>CSS</h4>
                <img src="<?=base_url('upload/CSS.png'); ?>">
            </div>
            <div class="skill">
                <h4>Javascript</h4>
                <img src="<?=base_url('upload/JS.png'); ?>">
            </div>
            <div class="skill">
                <h4>jQuery</h4>
                <img src="<?=base_url('upload/JQUERY.png'); ?>">
            </div>
            <div class="skill">
                <h4>Bootstrap</h4>
                <img src="<?=base_url('upload/BOOT.png'); ?>">
            </div>
            <div class="skill">
                <h4>PHP</h4>
                <img src="<?=base_url('upload/BOOT.png'); ?>">
            </div>
            <div class="skill">
                <h4>CodeIgniter</h4>
                <img src="<?=base_url('upload/CODEIGNITER.png'); ?>">
            </div>
            <div class="skill">
                <h4>MySQL</h4>
                <img src="<?=base_url('upload/MYSQL.png'); ?>">
            </div>
        </div>
    </div>
    <div class="section">
        <h2>My Experience</h2>
        <div class="experience">
            <p><b>Job Title</b> : PHP Developer</p>
            <p><b>Company Name</b> : Multiline Technolabs LLP</p>
            <p><b>Duration</b> : June 2024 - Present</p>
        </div>
        <div class="experience">
            <p><b>Job Title</b> : Intern</p>
            <p><b>Company Name</b> : Infolabz IT Services Pvt. Ltd.</p>
            <p><b>Duration</b> : May 2023 - April 2024</p>
        </div>
    </div>
    <div id="projects" class="section">
        <h2>Projects</h2>
        <div class="projects">
            <div class="project">
                <h3>Rent it now!</h3>
                <p><b>Description:</b> Basically this project is based on rent the vehicles. In this Owners can upload their vehicles to rent and users can easily rent their vahicles.</p>
                <p><b>Technologies:</b> Python, Django, MySQL, HTML, CSS, JavaScript, Bootstrap</p>
                <a href="#" target="_blank">View Project</a>
            </div>
            <!-- Add more projects here -->
        </div>
    </div>

    <div id="contact" class="section">
        <h2>Contact</h2>
        <p>Feel free to reach out to me via email: <a href="mailto:agrawalaarzoo002@gmail.com">agrawalaarzoo002@gmail.com</a></p>
        <p>Or connect with me on <a href="https://www.linkedin.com/in/aarzoo-agrawal-b232b5291/" target="_blank">LinkedIn</a></p>
    </div>
</body>
</html>
