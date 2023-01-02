<footer id="footer">
    <style type="text/css" scoped>
        /* Footer */
        footer {
            display: none;
            user-select: none;
        }
        .footer-container {
            display: flex;
            flex-direction: column;
        }
        .footer-title {
            margin-left: -20vh;
            font-size: 130px;
            padding: 80px 0;
            color: transparent;
            -webkit-text-stroke-color: #474747;
            -webkit-text-stroke-width: 3px;
        }
        .footer-title span {
            color: var(--primary);
            -webkit-text-stroke-color: #000000;
            -webkit-text-stroke-width: 0px;
        }
        .footer-wrapper {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 0 20px;
        }
        .footer-section {
            display: flex;
            flex-direction: row;
            font-family: 'Poppins', sans-serif;
            padding: 5px 10px;
            gap: 20px;
        }
        .footer-contact {
            display: flex;
            gap: 10px;
        }
        .footer-text {
            display: block;
            overflow: hidden;
            text-decoration: none;
            align-self: start;
            font-family: "Roboto Condensed";
            color: #bbbbbb;
            font-size: 16px;
            font-weight: 300;
            transition: all 0.3s ease;
        }
        .footer-text:hover {
            color: var(--primary);
        }
        /* Footer */
    </style>
    <div class="footer-title">CONTACT<span>CONTACT</span>CONTACTCONTACT</div>
    <div class="footer-container">
        <div class="footer-wrapper">
            <div class="footer-section">
                <div class="footer-contact">
                    <img src="/assets/Img/Email.png" draggable="false" alt="Email" height="20" loading="lazy"/>
                    <a class="footer-text">nevyllokalangi@gmail.com</a>
                </div>
                <div class="footer-contact">
                    <img src="/assets/Img/Phone.png" draggable="false" alt="Email" height="20" loading="lazy"/>
                    <a class="footer-text">+62 851 7118 6112</a>
                </div>
                <div class="footer-contact">
                    <img src="/assets/Img/Pin.png" draggable="false" alt="Pin" height="20" loading="lazy"/>
                    <a class="footer-text">Indonesia</a>
                </div>
            </div>
            <div class="footer-copyright">
                <a>Copyright © 2022 Nevyllo Zamuel Kalangi</a>
            </div>
        </div>
    </div>
</footer>