<?php 
    session_start();
    if(isset($_SESSION['success']))
    {
       echo "<script>alert('Thanks $name, Your Response have been recorded, Have A Nice  Day!')</script>"; 
    }
    else if(isset($_SESSION['unsuccess']))
    {
        echo "<script>alert('Sorry $name, you have an active message! Please wait for that response, or if it is urgent, you can send me an Email! Thank You, Have Nice Day!')</script>";
    }
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=720px, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- font Awesome Social -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Portfolio</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-187314638-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-187314638-1');
    </script>

</head>
<body>
    <!-- Header -->
    <header id="header">
        <div class="header-text">
            <h1>Hi,<br> 
                I'm Shreyan<br>
            <a href="#nav-container">⇊Know Me⇊</a>
            </h1>
        </div>
    </header>
    <!-- Navbar -->
    <nav id="nav-container">
        <div class="nav-container">
            <ul>
                <li><a href="#about-Section"><p>About Me</p></a></li>
                <li><a href="#form"><p>Contact Me</p></a></li>
                <li><a href="#footer"><p>Social Media</p></a></li>
            </ul>
        </div>
    </nav>
    <!-- Main Section -->
    <main>
        <div class="about-section" id="about-Section">
            <div class="about-header">
                <h1>About Me</h1>
            </div>
            <div class="about-nav" id="about-nav">
                <ul>
                    <li><a href="#abt-bdy-main"><p class="nav-btn active">Who I'm?</p></a></li>
                    <li><a href="#abt-bdy-main"><p class="nav-btn">Achivements</p></a></li>
                    <li><a href="#abt-bdy-main"><p class="nav-btn">Projects</p></a></li>
                </ul>
            </div>
            <div class="about-body">
                <div class="abt-bdy active-body">
                    <div id="abt-bdy" class="abt-bdy-hdr">
                        <h1>About Me & My Story</h1>
                    </div>
                    <div id="abt-bdy-main" class="abt-bdy-main">
                        Hi, My Name is Shreyan, A very Inquisitive guy, and a programmer or a developer by chance.
                        Now you might think = {'why by chance?';}
                        <br>
                        Let Me tell you my story, My Journey begins in the year april 2018, when due to some 
                        unconditional reason i did not get chance to study Physics Hons(the subject i loved the most till then).
                        And then I came across BCA, where all my life changes suddenly.
                        Honestly speaking, up till 12th i never thought that i would do BCA and enter into the tech field; but as we all know, 
                        'Life is unpredictabe' and I got myself into BCA.
                        <br>
                        Now, comes the funniest part, untill 1st year i was still unaware of the fact that - "What I will do in Future?!".
                        Till then i was only studying the subject and nothing else..
                        But Luckily my elder brother(who is a web developer),  get me into Web development.
                        Now since, i had CS in my higher secondary, I already knew some basic part of it. I get a huge interest in it,
                        and started it studying carefully.I learned full stack development..because i was enjoying it..
                        <br>
                        With this i also started Python(I already had a good basic programming Knowledge in C and C++)
                        But unfortunately, soon after I started Java, I grow a Huge Interest on it.
                        There was a span of 1.5 to 2 months,where I solve Various DS and Algos's problem using Java
                        and with that I also used to solve Frontend Mentor challenges problems simultaneously in a day.
                        <br>
                        Now I am engagged in learning Java Swing and Data Science using Python... which I am in love with..
                        <br>
                        The main idealism that I follow is, Never limit your learning in One thing or Two... keep learning thing that boost you, that energize you,
                        that interest you... It can be anything..spent your time wisely...
                        #AlwaysKeepLearning!
                        <br>
                        <br>
                        <b><u>A New Section <i> "My Blog" </i> is coming soon, stay Tuned!, Your Idea or Your Story(If it is good enough) can also get a Feature there! Stay Tuned!</u></b>     
                    </div>
                </div>
                <div class="abt-bdy" > 
                    <div id="abt-bdy" class="abt-bdy-hdr">
                        <h1>Badges & Certificates!</h1>
                    </div>
                    <div id="abt-bdy-main" class="abt-bdy-main">
                        <div class="achivements">
                            <div class="row">
                                <div class="ach-cont">
                                    <img src="images/Capture.PNG">
                                    <p>Achived a <b>Gold-Badge</b> in Java</p>
                                </div>
                                <div class="ach-cont">
                                    <img src="images/Capture 1.PNG">
                                    <p>Achived <b>4 Star</b> in problem solving(DS & Algos)</p>
                                </div>
                                <div class="ach-cont">
                                    <img src="images/Capture 3.PNG">
                                    <p>Achived <b>4 Star</b> in '10 Days of JS' </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="ach-cont">
                                    <img src="images/Capture 2.PNG" class="certificate">
                                    <p>Earned a Certificate in <b>java</b></p>
                                </div>
                                <div class="ach-cont">
                                    <img src="images/Capture 4.PNG" class="certificate">
                                    <p>Earned a Certificate in <b>Software Engineering</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="abt-bdy" class="abt-bdy">
                    <div id="abt-bdy" class="abt-bdy-hdr">
                        <h1>My Basic Level Projects!</h1>
                    </div>
                    <div id="abt-bdy-main" class="abt-bdy-main">
                        <div class="project-container">
                            <div class="project-content">
                                <div class="content-header">
                                    <p><a href="https://onlcalc.netlify.app/">Online Calculator(Partly Scientific)</a>- Using Html,Css, Js</p>
                                </div>
                                <div class="content-body">
                                    <p>Does All The task that a normal calculator usually do,
                                        <br> beside that, it also calculate some scientific calculations.
                                        <br>This is created to reduce space, as it is not an app or any software.
                                    </p>
                                </div>
                            </div>
                            <div class="project-content">
                                <div class="content-header">
                                    <p><a href="http://shreyan.epizy.com/login.php">Exercise Tracker</a>- Using Html,Css, Js, Php, MariaDb(For db)</p>
                                </div>
                                <div class="content-body">
                                    <p>It helps to track daily task, and help to do it in a 
                                        <br> specific routine.
                                        <br>This is created to reduce space, as it is not an app or any software.
                                        <br>It is also a very user friendly website.
                                    </p>
                                </div>
                            </div>
                            <div class="project-content">
                                <div class="content-header">
                                    <p><a href="https://github.com/ShreyanDey0/Java_Project">Working principle of an Atm</a>- Using Java</p>
                                </div>
                                <div class="content-body">
                                    <p>A program to demonstrate the working principle of 
                                        <br> an ATM
                                    </p>
                                </div>
                            </div>
                            <div class="project-content">
                                <div class="content-header">
                                    <p><a href="https://github.com/ShreyanDey0/Brick-Breaker-Game">Brick Breaker Game</a>- Using Java Swing</p>
                                </div>
                                <div class="content-body">
                                    <p>We all played the Brick breaker game in our childhood,
                                        <br> which i just want to recreate.
                                        <br>The game is created using help of YouTube tutorial, as i need
                                        <br>to know about Java Swing. 
                                    </p>
                                </div>
                            </div>
                            <div class="project-content">
                                <div class="content-header">
                                    <p><a href="https://github.com/ShreyanDey0">Some Other Projects</a></p>
                                </div>
                                <div class="content-body">
                                    <p>You can find my other projects in my given GitHub Link. 
                                        <br> Go, Find and check.
                                    </p>
                                </div>
                            </div>
                            <div class="project-content">
                                <div class="content-header">
                                    <p><a href="#">Stay tuned for my upcoing projects!</a></p>
                                </div>
                                <div class="content-body">
                                    <p>If you have any projects in your mind, you can <span><b><a href="#form" style="color: black;">ping me</a></b></span>,
                                        <br> We can collaborate.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Form -->
    <section id="form" class="form-section">
        <form action="message.php" method="POST">   
            <div class="form">
                <h2>Connect Me Directly:</h2>
                <div class="tags name">
                    <label for="name">Name:</label>
                    <div class="input"><input type="text" id="name" name="name" placeholder="Your name..." required></div>
                </div>
                <div class="tags email">
                    <label for="email">E-mail:</label>
                    <div class="input"><input type="text" id="email" name="email" placeholder="Your Email id..." required></div>
                </div>
                <div class="tags number">
                    <label for="number">Contact No.</label>
                    <div class="input"><input type="number" id="number" name="number" placeholder="Your ph number..." required></div>
                </div>
                <div class="tags suggestion">
                    <label for="suggestion">Suggestion:</label>
                    <div class="su-text"><textarea id="suggestion" name="suggestion" placeholder="Write your message here..." required></textarea></div>
                </div>
                <div class="button">
                    <button>Send</button>
                </div>
                <p>You can also connect me on <span><a href="#footer">Social Network </a></span><br> or can send me an <span><a href="mailto: shreyandey5@gmail.com">E-mail</a></span></p>
            </div>
        </form>
    </section>
    <!-- Footer -->
    <footer id="footer">
        <div class="footer-part">
            <div class="my-image">
                <img src="images/image1.jpg" alt="my-image" style="width: auto; height: 9rem; border-radius: 50%;">
            </div>
            <div class="Social-Media-Links">
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=100004186725612" class="fa fa-facebook"></a></li>
                    <li><a href="https://www.instagram.com/k_jane_ke/?hl=en" class="fa fa-instagram"></a></li>
                    <li><a href="https://www.linkedin.com/in/shreyan-dey-4b0026159/" class="fa fa-linkedin"></a></li>
                    <li><a href="mailto: shreyandey5@gmail.com" class="fa fa-google"></a></li>
                    <li><a href="#form" class="fa direct">DM</a></li>
                </ul>
            </div>
            <div class="connected">
                <h1>Keep Connected</h1>
            </div>
            <div class="top">
                <p><a href="#header" style="text-decoration: none; color: black;">(To^Top)</a><span><br><span style="color: white;">&copy;copyright2020</span> Shreyan Dey</span></p>
            </div>
        </div>
    </footer>
<script src="index.js"></script>
</body>
</html>