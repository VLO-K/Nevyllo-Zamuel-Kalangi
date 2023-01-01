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
    <link rel="stylesheet" href="/CSS/faq.css" media="print" onload="this.media='all'">
    <link rel="icon" type="image/x-icon" href="./Assets/Img/Logo.png"/>
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
        <!-- FAQ Start -->
        <div class="faq-section">
            <h1>FAQs</h1>
            <ul class="faq-accordion">
                <li>
                    <input type="checkbox" checked>
                    <h2 class="faq-questions">What is your mother language?</h2>
                    <p class="faq-answer">Indonesian</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <h2 class="faq-questions">What are your hobbies?</h2>
                    <p class="faq-answer">I love playing games, listening music, coding & watching movies</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <h2 class="faq-questions">Where are you from?</h2>
                    <p class="faq-answer">I'm from Makassar, South Sulawesi, Indonesia</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <h2 class="faq-questions">Do you have experience in holding an event?</h2>
                    <p class="faq-answer">Yes, Inter-School Competitions (DHS CUP)</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <h2 class="faq-questions">Are you married?</h2>
                    <p class="faq-answer">No and not anytime soon</p>
                </li>
            </ul>
        </div>
        <!-- FAQ End -->
    </main>
    <!-- Content End -->
    <?php include '../Assets/common/footer.php';?>
</body>

</html>