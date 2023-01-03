<footer id="footer">
    <style type="text/css" scoped>
        /* Footer */
        footer {
            display: none;
            user-select: none;
            font-family: "RubikReg";
        }
        .footer-title {
            margin-left: -20vh;
            font-size: 130px;
            padding: 40px 0;
            color: transparent;
            -webkit-text-stroke-color: #474747;
            -webkit-text-stroke-width: 3px;
        }
        .footer-title span {
            color: var(--primary);
            -webkit-text-stroke-color: #000000;
            -webkit-text-stroke-width: 0px;
        }
        .footer-container {
            display: flex;
            flex-direction: column;
        }
        .footer-section {
            display: flex;
            flex-direction: row;
            padding: 5px 30px;
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
            color: #bbbbbb;
            font-size: 16px;
            font-weight: 300;
            transition: all 0.3s ease;
        }
        .footer-text:hover {
            color: var(--primary);
        }
        @media (max-width: 800px){
            .footer-section {
                flex-direction: column;
                padding: 30px 30px;
            }
        }
        /* Footer */
    </style>
    <div class="footer-title">CONTACT<span>CONTACT</span>CONTACTCONTACT</div>
    <div class="footer-container">
        <div class="footer-section">
            <div class="footer-contact">
                <img src="/assets/Img/Email.png" draggable="false" alt="Email" height="20" loading="lazy"/>
                <a class="footer-text">nevyllokalangi@gmail.com</a>
            </div>
            <div class="footer-contact">
                <img src="/assets/Img/Phone.png" draggable="false" alt="Email" height="20" loading="lazy"/>
                <a class="footer-text">+62 851 7118 6112</a>
            </div>
        </div>
    </div>
</footer>