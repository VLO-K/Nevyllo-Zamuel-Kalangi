<!DOCTYPE html>
<html>

<head lang="en">
    <!-- HTML Config -->
    <meta charset="utf-8"/>
    <meta name="author" content="Nevyllo Zamuel Kalangi"/>
    <meta name="description" content="Portfolio"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About | Nevyllo Kalangi</title>
    <!-- HTML Config -->
    <!-- HTML Links -->
    <link rel="stylesheet" href="/CSS/about.css" media="print" onload="this.media='all'">
    <link rel="icon" type="image/x-icon" href="/Assets/Img/Logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto Condensed" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet"/>
    <!-- HTML Links -->
</head>

<body>
    <?php include '../Assets/common/loader.php';?>
    <?php include '../Assets/common/cursor.php';?>
    <?php include '../Assets/common/header.php';?>
    <!-- Content Start -->
    <main class="content-container" id="content">
        <!-- Hello Message -->
        <div class="content-wrapper">
            <div class="content-hello">
                <h1 class="content-hello1">H</h1>
                <h1 class="content-hello2">e</h1>
                <h1 class="content-hello3">l</h1>
                <h1 class="content-hello4">l</h1>
                <h1 class="content-hello5">o</h1>
            </div>
        </div>
        <div class="content-main">
            <div class="content-1">ABOUT ME</div>
            <div class="content-1">ABOUT ME</div>
            <div class="content-1">ABOUT ME</div>
        </div>
        <!-- Hello Message -->
        <!--Seperator Start-->
        <div class="seperator"></div>
    <!--Seperator End-->
        <!--About Start-->
        <div class="about-section">
            <!-- background stroke nanti di belanakng about me -->
            <div class="about-image">
                <img src="/Assets/Img/MyPic.jpeg" alt="About Me Picture" draggable="false" loading="lazy"
                    oncontextmenu="return false;"/>
            </div>
            <a class="about-title">Nevyllo Zamuel Kalangi</a><br>
            <a class="about-job">Student of <span>Dunia Harapan School</span></a><br>
            <p1 class="about-desc">
                Hello everyone! My name is Nevyllo Zamuel Kalangi, a 16 years
                Indonesia Student living in Indonesia. Coding is one of my hobby,
                and this website is one of my projects. I have been coding since I
                was 11 years old. Have some organizational experience and holding events. I love to listen to the music, especially pop music.
            </p1>
        </div>
        <!--About End-->
        <iframe width="800" height="450" src="https://www.youtube.com/embed?listType=playlist&list=UUgVgGSlM4LUNc3HfEJpij6Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <!--Seperator Start-->
        <div class="seperator"></div>
        <!--Seperator End-->
        <!-- Achievements Wrapper Start -->
        <div class="timeline-section">
            <div class="timeline-title">
                <div>
                    <h2>ACHIEVEMENTS</h2>
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
            </div>
        </div>
        <!-- Achievements Wrapper End -->
    </main>
    <!-- Content End -->
    <?php include '../Assets/common/footer.php';?>
</body>

</html>