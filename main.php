<html>

<head>
    <title>Recaptcha</title>
    <link rel="Stylesheet" href="style.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <!--navbar-->
    <div class="banner">
        <div class="navbar">
            <img src="I/logo.jpeg" class="logo">
            <ul>
                <li><a href="main.html">Home</a></li>
                <li><a href="login/login.html">Login</a></li>
                <li><a href="#">About us </a></li>
                <li><a href="#">contact us</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Be Safe Be Protective</h1>
        </div>
    </div>
    <!--our design-->
    <div class="page-blocks">
        <div class="title"> TYPES OF RECAPTCHA</div>
        <div class="section">

            <div class="box" id="blur">
                <div class="content">
                    <p>Text-based CAPTCHAs are the original way in which humans were verified. These
                        CAPTCHAs can use known
                        words or
                        phrases, or random combinations of digits and letters.</p>
                    <img src="I/download6.jpeg" alt="" style="align-items: center; width: 90%;">
                    <a href="#" onclick="openPopup('popup1')">Text Based Captcha</a>
                </div>
            </div>
            <div id="popup1" class="popup">
                <h2 style="text-align: center;">PROS And CONS</h2>
                <p style="margin: 10px;"> Text Based Captcha includes protection that stops bots from accessing sites,
                    limiting
                    spam comments, fraudulent registrations, and unwanted traffic.It also helps to improve the security by
                    keeping automated scripts from accessing a site, CAPTCHA helps improve security as it blocks potential
                    hackers.Textbased Captcha can be cracked by using OCR softwares. It is suffered by relay, random guess
                    and
                    dictionary attacks.</p>
                <a href="#" onclick="closePopup('popup1')">Close</a>
            </div>
            <div class="box" id="blur">
                <div class="content">
                    <p>
                        NoCAPTCHA is a type of reCAPTCHA that hides the CAPTCHA test from the user. Instead of traditional
                        CAPTCHA tests in which users have to type out text or click on pictures of specific things, in a
                        noCAPTCHA test, all the user has to do is check an I'm not a robot checkbox</p>
                    <img src="I/download4.jpeg" alt="" style="align-items: center; width: 90%;">
                    <a href="#" onclick="openPopup('popup2')">No Captcha</a>
                </div>
            </div>
            <div id="popup2" class="popup">
                <h2 style="text-align: center;">PROS And CONS</h2>
                <p style="margin: 10px;"> Everyone can use this service free of charge.
                    The test protects websites from spam, fraud, and abuse. It provide integrity that helps to protect the
                    integrity of your site by avoiding attacks that might spread malware or redirect your visitors to malicious
                    sites.The test interrupts the flow of what a user is trying to do, possibly resulting in a negative user
                    experience.
                    Some bots can fool some of the older reCAPTCHA tests.
                </p>
                <a href="#" onclick="closePopup('popup2')">Close</a>
            </div>
            <div class="box" id="blur">
                <div class="content">
                    <p >Audio CAPTCHAs were developed as an alternative that grants accessibility to visually
                        impaired users. These CAPTCHAs are often used in combination with text or image-based CAPTCHAs. Audio
                        CAPTCHAs present an audio recording of a series of letters or numbers which a user then enters.</p>
                    <img src="I/download1.jpeg" alt="" style="align-items: center; width: 90%;">
                    <a href="#" onclick="openPopup('popup3')">Audio CAPTCHAs</a>
                </div>
            </div>
            <div id="popup3" class="popup">
                <h2 style="text-align: center;">PROS And CONS</h2>
                <p style="margin: 10px;">Audio CAPTCHAs are more difficult than visual CAPTCHAs, especially for blind users who
                    use screen-reader programs.
                    These programs tend to talk over the audio CAPTCHA as the user navigates between the audio playback controls
                    and answer box, frustrating the user's ability to hear the CAPTCHA.</p>
                <a href="#" onclick="closePopup('popup3')">Close</a>
            </div>
        </div>

    </div>
<script src="javascript.js"></script>
    <!--Appointment block-->
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="connect.php" method="post">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="g-recaptcha" data-sitekey="6LfUu6snAAAAADSyPTenhR_UPvIVQNWp1MaMf5r5"></div>
                <button type="Submit" name="submit" class="btn">Make Appointment</button>
            </form>
        </div>
    </section>

</body>

</html>