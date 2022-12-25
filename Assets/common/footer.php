<footer>
    <style type="text/css" scoped>
        /* Config */
        :root {
            --primary: #fff;
            --secondary: #e91e63;
            --bg: #000;
            --secondary-bg: #0f0f0f;
        }
        *, *::after, *::before {
            box-sizing: border-box;
        }
        * {
            font-family: "Montserrat", sans-serif;
            color: var(--primary);
            margin: 0;
            padding: 0;
        }
        img, video, picture, svg {
            display: block;
            user-select: none;
        }
        /* Config */
        /* Footer */
        .footer-section {
            font-family: 'Poppins', sans-serif;
            background-color: var(--secondary-bg);
            padding: 70px 0 10px 0;
        }
        .footer-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .footer-col:nth-child(1) {
            min-width: 89px;
        }
        .footer-col:nth-child(2) {
            min-width: 240px;
            margin: 0 7% 0 10%;
        }
        .footer-ul {
            list-style: none;
        }
        .footer-col ul li {
            margin-bottom: 10px;
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
            padding-left: 8px;
        }
        .footer-title {
            position: relative;
            font-size: 18px;
            color: var(--primary);
            margin-bottom: 35px;
            font-weight: 500;
        }
        .footer-title::before {
            position: absolute;
            content: '';
            left:0;
            bottom: -10px;
            background-color: var(--secondary);
            height: 2px;
            width: 60px;
        }
        .footer-contact {
            display: flex;
            gap: 10px;
        }
        .footer-sosmed {
            display: inline-block;
            margin: 0 10px 10px 0;
            transition: all 0.5s ease;
            filter: brightness(60%)
        }
        .footer-sosmed:hover{
            filter: brightness(100%);
        }
        .f-copyright {
            text-align: center;
            height: 45px;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            color: var(--primary);
            background-color: var(--secondary-bg);
            padding: 15px 0 15px 0;
        }
        /* Footer */
        /* Footer Responsive */
        @media(max-width: 900px){
            .footer-section {
                padding: 70px 10% 10px 10%
            }
            .footer-col{
                width: 50%;
                margin-bottom: 30px;
            }
            .footer-row{
                justify-content: left;
            }
            .footer-col:nth-child(1) {
                min-width: 89px;
            }
            .footer-col:nth-child(2) {
                min-width: 240px;
                margin: 0 0 30px 0;
            }
        }
        @media(max-width: 600px){
            .footer-col{
                width: 100%;
            }
        }
        /* Footer Responsive */
    </style>
    <div class="footer-section">
        <div class="footer-row">
            <div class="footer-col">
                <h4 class="footer-title">Navigate</h4>
                <ul class="footer-ul">
                    <li><a class="footer-text" href="/ome">HOME</a></li>
                    <li><a class="footer-text" href="/about">ABOUT</a></li>
                    <li><a class="footer-text" href="/portfolio">PORTFOLIO</a></li>
                    <li><a class="footer-text" href="/project">PROJECT</a></li>
                    <li><a class="footer-text" href="/faq">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="footer-title">Contact</h4>
                <ul class="footer-ul">
                    <li class="footer-contact">
                        <img src="/Assets/Img/Email.png" draggable="false" alt="Email" height="24" loading="lazy"/>
                        <a class="footer-text">nevyllokalangi@gmail.com</a>
                    </li>
                    <li class="footer-contact">
                        <img src="/Assets/Img/Phone.png" draggable="false" alt="Email" height="24" loading="lazy"/>
                        <a class="footer-text">+62 851 7118 6112</a>
                    </li>
                    <li class="footer-contact">
                        <img src="/Assets/Img/Pin.png" draggable="false" alt="Pin" height="24" loading="lazy"/>
                        <a class="footer-text">Indonesia</a>
                    </li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="footer-title">Follow Me</h4>
                <div class="social-links">
                    <a class="footer-sosmed" href="https://www.instagram.com/nevylloproman">
                        <img src="/Assets/Img/Instagram.png" draggable="false" alt="Instagram: @nevylloproman" height="32" loading="lazy"/>
                    </a>
                    <a class="footer-sosmed" href="https://www.youtube.com/@vlovlovlo">
                        <img src="/Assets/Img/Youtube.png" draggable="false" alt="Youtube: VLOVLOVLO" height="32" loading="lazy"/>
                    </a>
                    <a class="footer-sosmed" href="https://discord.gg/SRWRdzZmur">
                        <img src="/Assets/Img/Discord.png" draggable="false" alt="Discord: Glee Community" height="32" loading="lazy"/>
                    </a>
                    <a class="footer-sosmed" href="https://github.com/VLO-K">
                        <img src="/Assets/Img/Github.png" draggable="false" alt="Github: VLO-K" height="32" loading="lazy"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="f-copyright">
        <a>Copyright © 2022 Nevyllo Zamuel Kalangi</a>
    </div>
</footer>