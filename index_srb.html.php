<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Web presentation">
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

                <li><a href="#home">Počenta</a></li>
                <li><a href="#about">O meni</a></li>
                <li><a href="#education">Edukacija</a></li>
                <li><a href="#favorites">Favoriti</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>

        </nav>
        </header>
        <div id="menu" class="fas fa-bars">
        </div>
        <section class="home" id="home">
            <a href="index.php"><button class="btn">Eng <i class="fas fa-language"></i></button></a>
            <h3>POZDRAV !</h3>
            <h1>Ja sam <span>Anamarija Tot</span></h1>
            <p>
                Dvadesetogodišnja studentkinja iz Subotice, Srbije.<br>
                Ovde možete pronaći veb prezentaciju o meni za<br> projekat iz Internet tehnologije.<br>
            </p>
            <a href="#about"><button class="btn">O meni<i class="fas fa-user"></i></button></a>
        </section>
        <section class="about" id="about">
            <h1 class="heading">O<span> meni</span></h1>
            <div class="row">
                <div class="info">
                    <h3>
                        <span>Ime:</span> Anamarija
                    </h3>
                    <h3>
                        <span>Prezime:</span> Tot
                    </h3>
                    <h3>
                        <span>Godine:</span> 20
                    </h3>
                    <h3>
                        <span>Kvalifikacije:</span> Student
                    </h3>
                    <h3>
                        <span>Jezik:</span> Srpski, Engleski
                    </h3>
                </div>
            <div class="counter">
                <div class="box">
                    <span>HTML5</span>
                    <h3>iskustvo</h3>
                </div>
                <div class="box">
                    <span>CSS3</span>
                    <h3>iskustvo</h3>
                </div>
                <div class="box">
                    <span>PHP</span>
                    <h3>iskustvo</h3>
                </div>
                <div class="box">
                    <span>C#</span>
                    <h3>iskustvo</h3>
                </div>
                <div class="box">
                    <span>C</span>
                    <h3>iskustvo</h3>
                </div>
            </div> 
            </div>
        </section>
        <section class="education" id="education">
            <h1 class="heading">Moja<span> edukacija</span></h1>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>2008-2016</span>
                    <h3>Osnovna škola</h3>
                    <p>
                        Išla sam u OŠ „Vuk Karadžić“.
                        Ovaj period je bio veoma zanimljiv i naučila sam mnoge stvari koje
                        sam kasnije koristila za savladavanje novih znanja.
                    </p>
                </div>
                <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>2016-2020</span>
                    <h3>Srednja škola</h3>
                    <p>
                        Posle osnovne škole nastavila sam školovanje u gimnaziji "Svetozar Markovic" gde sam otkrila moje interesovanje za
                        informatiku.
                    </p>
                </div>
                <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span>2020-danas</span>
                    <h3>Viša škola</h3>
                    <p>
                        Sledeći korak na mom putu bio je nastavak školovanja na visokoj tehničkoj školi strukovnih studija u Subotici,
                        i sada sam na drugoj godini studija.
                    </p>
                </div>
            </div>
        </section>
        <section class="favorites" id="favorites">
            <h1 class="heading">Moji <span>favoriti</span></h1>
            <div class="box-container">
                <div class="box">
                    <a href="https://www.w3schools.com/default.asp">
                        Klinki ovde da posetiš
                        <img src="slike/W3Schools_logo.svg.png" alt="w3schools">
                   </a>
                </div>
                <div class="box">
                    <a href="https://stackoverflow.com/">Klinki ovde da posetiš
                    <img src="slike/768px-Stack_Overflow_icon.svg.png" alt="stackoverflow">
                    </a>
                </div>
                <div class="box">
                    <a href="https://www.geeksforgeeks.org/">Klinki ovde da posetiš
                    <img src="slike/GeeksforGeeks.svg.png" alt="GeeksforGeeks">
                    </a>
                </div>
                <div class="box">
                    <a href="https://www.tutorialspoint.com/index.htm">Klinki ovde da posetiš
                    <img src="slike/tutorijal-removebg-preview.png" alt="tutorialspoint">
                    </a>
                </div>
                <div class="box">
                    <a href="https://www.freecodecamp.org/">Klinki ovde da posetiš
                    <img src="slike/fcc_primary_small.png" alt="freecodecamp">
                    </a>               
                </div>
                <div class="box">
                    <a href="https://www.codecademy.com/">Klinki ovde da posetiš
                    <img src="slike/codeacademy-removebg-preview.png" alt="codecademy">
                    </a>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <h1 class="heading"><span>Kontaktiraj</span> me</h1>
            <div class="row">
                <div class="content">
                    <h3 class="title">Kontakt informacije</h3>
                    <div class="info">
                        <h3><i class="fas fa-envelope"></i> tot.anamarija0@gmail.com</h3>
                        <h3><i class="fas fa-phone"></i> +381/66-123-456</h3>
                        <h3><i class="fas fa-phone"></i> +381/62-83-98-017</h3>
                        <h3><i class="fas fa-map-marker-alt"></i>Subotica, Srbija</h3>
                    </div>
                </div>
                <form action="">
                    <input type="text" class="box" placeholder="Ime">
                    <input type="email" class="box" placeholder="Email">
                    <input type="text" class="box" placeholder="Naslov">
                    <textarea name="textarea" id="txtarea" cols="30" rows="10" class="box-msg" placeholder="Poruka" ></textarea>
                    <button type="submit" class="btn">Pošalji <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </section>
    </body>
</html>
</body>
</html>