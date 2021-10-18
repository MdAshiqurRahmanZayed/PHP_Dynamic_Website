<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <section class="main">
        <nav class="navbar">
            <a href="#" class="logo">
                <img src="images/logo1.png" alt="">
            </a>
            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#about">Blog</a></li>
                <li><a href="#contact" >Contact</a></li>
                <li><a href="sign_in/index.php">Sign in</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Create prespectives with virtual Reality</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu augue ut lectus arcu bibendum at varius. </p>
            <a class="main-btn" href="#contact" >contuct</a>
        </div>

    </section>

    <section class="features" id="features">
        <div class="features-container">

            <div class="features-box">
                <div class="f-img">
                    <img src="images/info-icon1.png" alt="">
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum test test</p>
                    <a href="#" class="main-btn">check</a>
                </div>
            </div>

            <div class="features-box">
                <div class="f-img">
                    <img src="images/info-icon2.png" alt="">
                </div>
                <div class="f-text">
                    <h4>software Development</h4>
                    <p>Lorem ipsum test test</p>
                    <a href="#" class="main-btn">check</a>
                </div>
            </div>

            <div class="features-box">
                <div class="f-img">
                    <img src="images/info-icon3.png" alt="">
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>Lorem ipsum test test</p>
                    <a href="#" class="main-btn">check</a>
                </div>
            </div>

        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="images/about.png" alt="">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your statistic</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu augue ut lectus arcu bibendum at varius. </p>
            <button class="main-btn">Read more</button>
        </div>
    </section>

    <section class="contact" >
        <div id="contact" class="contact-heading">
            <h1>Contuct Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your fullname" required />
            <input type="email" name="email" placeholder="Your E-mail" required />
            <textarea name="message" placeholder="Type your message"></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </section>
</body>

</html>