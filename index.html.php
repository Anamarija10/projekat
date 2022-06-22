<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="IT">
        <meta name="robots" content="noindex">
        <meta name="author" content="Anamarija Tot">
        <title>AnamarijaT</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="css/sass.css" type="text/css">
    </head>
    <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/js.js"></script>

        <header>
        <div class="user">
        <nav class="nav">
            <ul>
            <li><a class="date"><?php
                        $dat=date("jS F Y") . "<br>";
                        echo"$dat";
                    ?></a></li>
            
            </ul>

        </nav>
            <img src="slike/maturska1.jpg" alt="AnamarijaTot">
            <h3 class="name">Anamarija Tot</h3>
            <p class="post">Student</p>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#favorites">Favorites</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

        </nav>
        </header>
        <div id="menu" class="fas fa-bars">
        </div>
        <section class="home" id="home">
            <a href="index_srb.php"><button class="btn">Srb <i class="fas fa-language"></i></button></a>
            <h3>HI THERE !</h3>
            <h1>I'M <span>Anamarija Tot</span></h1>
            <p>
                20 years old student from Subotica, Serbia.<br>
                Here you can find a web presentation about me for<br> an Internet technology project.<br>
            </p>
            <a href="#about"><button class="btn">About me<i class="fas fa-user"></i></button></a>
        </section>
        <section class="about" id="about">
            <h1 class="heading"><span>About</span> me</h1>
            <div class="row">
                <div class="info">
                    <h3>
                        <span>First name:</span> Anamarija
                    </h3>
                    <h3>
                        <span>Last name:</span> Tot
                    </h3>
                    <h3>
                        <span>Age:</span> 20
                    </h3>
                    <h3>
                        <span>Qualification:</span> Student
                    </h3>
                    <h3>
                        <span>Language:</span> Serbian, English
                    </h3>
                </div>
            <div class="counter">
                 <div class="box">
                    <span>HTML5</span>
                    <h3>experience</h3>
                </div>
                <div class="box">
                    <span>CSS3</span>
                    <h3>experience</h3>
                </div>
                <div class="box">
                    <span>PHP</span>
                    <h3>experience</h3>
                </div>
                <div class="box">
                    <span>C#</span>
                    <h3>experience</h3>
                </div>
                <div class="box">
                    <span>C</span>
                    <h3>experience</h3>
                </div>
            </div> 
            </div>
        </section>
        <section class="education" id="education">
            <h1 class="heading">My<span> education</span></h1>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>2008-2016</span>
                    <h3>Elementary school</h3>
                    <p>
                        I went to the elementary school "Vuk Karadzic".
                        This period was very interesting and I learned many things that I later used to master new knowledge.
                    </p>
                </div>
                <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>2016-2020</span>
                    <h3>Secondary school</h3>
                    <p>
                        After elementary school, I continued my education in gymnasium  "Svetozar Markovic", where I found out my interest in in
                        informatics.
                    </p>
                </div>
                <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>2020-today</span>
                    <h3>College</h3>
                    <p>
                        The next step in my journey was to continue my education at Subotica Tech - College of Applied Sciences,
                        and I am now in my second year of study.
                    </p>
                </div>
            </div>
        </section>

        <section class="favorites" id="favorites">
            <h1 class="heading">My <span>favorites</span></h1>
            <div class="box-container">
                <div class="box">
                    <a href="https://www.w3schools.com/default.asp">
                        Click here to visit
                        <img src="slike/W3Schools_logo.svg.png" alt="w3schools">
                   </a>
                </div>
                <div class="box">
                    <a href="https://stackoverflow.com/">Click here to visit
                    <img src="slike/768px-Stack_Overflow_icon.svg.png" alt="stackoverflow">
                    </a>
                </div>
                <div class="box">
                    <a href="https://www.geeksforgeeks.org/">Click here to visit
                    <img src="slike/GeeksforGeeks.svg.png" alt="GeeksforGeeks">
                    </a>
                </div>
                <div class="box">
                    <a href="https://www.tutorialspoint.com/index.htm">Click here to visit
                    <img src="slike/tutorijal-removebg-preview.png" alt="tutorialspoint">
                    </a>
                </div>
                <div class="box">
                    <a href="https://www.freecodecamp.org/">Click here to visit
                    <img src="slike/fcc_primary_small.png" alt="freecodecamp"> 
                    </a>               
                </div>
                <div class="box">
                    <a href="https://www.codecademy.com/">Click here to visit
                    <img src="slike/codeacademy-removebg-preview.png" alt="codecademy">
                    </a>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <h1 class="heading"><span>Contact</span> me</h1>
            <div class="row">
                <div class="content">
                    <h3 class="title">Contact info</h3>
                    <div class="info">
                        <h3><i class="fas fa-envelope"></i>tot.anamarija@gmail.com</h3>
                        <h3><i class="fas fa-phone"></i> +381/66-123-456</h3>
                        <h3><i class="fas fa-phone"></i> +381/62-83-98-017</h3>
                        <h3><i class="fas fa-map-marker-alt"></i>Subotica, serbia</h3>
                    </div>
                </div>
                <form action="">
                    <input type="text" class="box" placeholder="Name">
                    <input type="email" class="box" placeholder="Email">
                    <input type="text" class="box" placeholder="Project">
                    <textarea name="textarea" id="txtarea" cols="30" rows="10" class="box-msg" placeholder="Message" ></textarea>
                    <button type="submit" class="btn">send <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </section>
    </body>
</html>
</body>
</html>