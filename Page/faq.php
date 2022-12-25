<!DOCTYPE html>
<html>

<head lang="en">
    <!-- HTML Config -->
    <meta charset="utf-8"/>
    <meta name="author" content="Nevyllo Zamuel Kalangi"/>
    <meta name="description" content="Portfolio"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQs | Nevyllo Kalangi</title>
    <!-- HTML Config -->
    <!-- HTML Links -->
    <script type="text/javascript" src="./Scripts/app.js" defer></script>
    <link rel="stylesheet" href="./CSS/faq.css" media="print" onload="this.media='all'">
    <link rel="icon" type="image/x-icon" href="./Assets/Img/Logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto Condensed" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet"/>
    <!-- HTML Links -->
</head>

<body>
    <?php include '../Assets/common/cursor.php';?>
    <?php include '../Assets/common/header.php';?>
    <!-- Content Start -->
    <main class="content-container">
        <!-- FAQ Start -->
        <div class="faq-section">
            <h1>FAQs</h1>
            <ul class="faq-accordion">
                <li>
                    <label for="first">What is your mother language?</label>
                    <input type="radio" name="faq-input" id="first">
                    <div class="faq-answer">
                        <p>Indonesian</p>
                    </div>
                </li>
                <li>
                    <label for="second">What are your hobbies?</label>
                    <input type="radio" name="faq-input" id="second">
                    <div class="faq-answer">
                        <p>I love to play</p>
                    </div>
                </li>
                <li>
                    <label for="third">What are your hobbies?</label>
                    <input type="radio" name="faq-input" id="third">
                    <div class="faq-answer">
                        <p>I love to play</p>
                    </div>
                </li>
                <li>
                    <label for="forth">What are your hobbies?</label>
                    <input type="radio" name="faq-input" id="forth">
                    <div class="faq-answer">
                        <p>I love to play</p>
                    </div>
                </li>
                <li>
                    <label for="fifth">What are your hobbies?</label>
                    <input type="radio" name="faq-input" id="fifth">
                    <div class="faq-answer">
                        <p>I love to play</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- FAQ End -->
    </main>
    <!-- Content End -->
    <?php include '../Assets/common/footer.php';?>
</body>

</html>