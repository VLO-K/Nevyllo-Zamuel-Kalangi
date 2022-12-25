<!DOCTYPE html>
<html>

<head lang="en">
    <!-- HTML Config -->
    <meta charset="utf-8"/>
    <meta name="author" content="Nevyllo Zamuel Kalangi"/>
    <meta name="description" content="Portfolio"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - Nevyllo Kalangi</title>
    <!-- HTML Config -->
    <!-- HTML Links -->
    <script type="text/javascript" src="/Scripts/app.js" defer></script>
    <link rel="stylesheet" href="/CSS/about.css" media="print" onload="this.media='all'">
    <link rel="icon" type="image/x-icon" href="/Assets/Img/Logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto Condensed" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet"/>
    <!-- HTML Links -->
</head>

<body>
    <?php include '../Assets/common/cursor.php';?>
    <?php include '../Assets/common/header.php';?>
    <!-- Content Start -->
    <main class="content-container">
        <!--About Start-->
        <div class="about-section">
            <div class="about-image">
                <img src="/Assets/Img/MyPic.jpeg" alt="About Me Picture" draggable="false" loading="lazy"
                    oncontextmenu="return false;"/>
            </div>
            <div class="about-text">
                <a class="about-title">About Me</a><br>
                <a class="about-job">Student of <span>Dunia Harapan School</span></a><br>
                <p1 class="about-desc">
                    Hello everyone! My name is Nevyllo Zamuel Kalangi, a 16 years
                    Indonesia Student living in Indonesia. Coding is one of my hobby,
                    and this website is one of my projects. I have been coding since I
                    was 11 years old. Have some organizational experience and holding events. I love to listen to the music, especially pop music.
                </p1>
            </div>
        </div>
        <!--About End-->
        <!--Seperator Start-->
        <div class="seperator"></div>
        <!--Seperator End-->
        <!-- Highlight Start -->
        <div class="slider-section">
            <div class="slider">
                <img class="slider-img" src="/Assets/Img/SL1.jpeg" alt="D-SPORA 2022" draggable="false" loading="lazy" oncontextmenu="return false;" />
                <img class="slider-img" src="/Assets/Img/SL2.jpeg" alt="D-SPORA 2022" draggable="false" loading="lazy" oncontextmenu="return false;" />
                <img class="slider-img" src="/Assets/Img/SL3.jpeg" alt="Leadership Camp 2022" draggable="false" loading="lazy" oncontextmenu="return false;" />
                <img class="slider-img" src="/Assets/Img/SL4.jpg" alt="Kidsstar 18th Birthday" draggable="false" loading="lazy" oncontextmenu="return false;" />
            </div>
            <div class="slider-title">
                <span></span>
            </div>
        </div>
        <!-- Highlight  End -->
        <!--Seperator Start-->
        <div class="seperator"></div>
        <!--Seperator End-->
        <!-- Timeline Start -->
        <div class="timeline-section">
            <div class="timeline-title">
                <div>
                    <h2>ORGANIZATION</h2>
                </div>
            </div>
            <div class="timeline">
                <!-- Timeline Background Start -->
                <div class="timeline-background">
                    <div class="timeline-bg1"></div>
                    <div class="timeline-bg2"></div>
                    <div class="timeline-bg3"></div>
                    <div class="timeline-bg4"></div>
                </div>
                <!-- Timeline Background End -->
                <ul>
                    <li>
                        <div class="timeline-right">
                            <h2>Head of Dunia Harapan School Student Council Sport & Art Division</h2>
                        </div>
                        <div class="timeline-left">
                            <h3>JAN 2020 - JAN 2021</h3>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-right">
                            <h2>Member of Dunia Harapan School Student Council Sport & Art Division</h2>
                        </div>
                        <div class="timeline-left">
                            <h3>SEP 2021 - AUG 2022</h3>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-right">
                            <h2>President of Dunia Harapan School Student Council</h2>
                        </div>
                        <div class="timeline-left">
                            <h3>SEP 2022 - AUG 2023</h3>
                        </div>
                    </li>
                <div style="clear:both;"></div>
                </ul>
            </div>
        </div>
        <!--Timeline End-->
        <!-- Achievements Wrapper Start -->
        <div class="achievements-section">
            <h2 class="achievements-title">ACHIEVEMENTS</h2>
            <div class="achievements-wrapper" >
                <div class="achievements-col">
                    <h1>Academics</h1>
                    <h4 class="achievements-row">Loading...</h4>
                    <h4 class="achievements-row">Loading...</h4>
                </div>
                <div class="achievements-col">
                    <h1>Sports</h1>
                    <h4 class="achievements-row">The 1st Winner of Men's 100m Run D-SPORA 2021</h4>
                    <h4 class="achievements-row">The 2nd Winner of D-SPORA Badminton Men's Single 2021</h4>
                    <h4 class="achievements-row">The 1st Winner of Badminton Mixed Double D-SPORA 2022</h4>
                    <h4 class="achievements-row">The 1st Winner of Badminton Men's Single D-SPORA 2022</h4>
                    <h4 class="achievements-row">The 1st Winner of Futsal D-SPORA 2022</h4>
                    <h4 class="achievements-row">The 2nd Winner of Hotshot D-SPORA 2022</h4>
                </div>
                <div class="achievements-col">
                    <h1>Others</h1>
                    <h4 class="achievements-row">Loading...</h4>
                </div>
            </div>
        </div>
        <!-- Achievements Wrapper End -->
    </main>
    <!-- Content End -->
    <?php include '../Assets/common/footer.php';?>
</body>

</html>