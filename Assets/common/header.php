<header id="nav">
    <style type="text/css" scoped>
        /* Navigation */
        #nav {
            display: none;
        }
        .logo {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 999;
        }
        .logo:hover {
            cursor: pointer;
        }
        .nav-menu {
            display: flex;
            flex-direction: row;
            justify-content: right;
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 999;
            transition: all 0.5s ease;
        }
        .nav-menu a {
            position: relative;
            text-decoration: none;
            font-size: 16px;
            color: #bbbbbb;
            margin: 0 20px;
            padding: 5px 5px;
        }
        .nav-menu a:hover {
            color: var(--primary);
        }
        @media (max-width: 800px){
            .nav-menu {
                align-items: flex-end;
                writing-mode: vertical-lr;
                right: 0;
            }
            .nav-menu a {
                margin: 0 0;
                padding: 15px 5px;
            }
        }
        /* Navigation */
        /* Socmed */
        .socmed {
            display: flex;
            flex-direction: column;
            position: fixed;
            user-select: none;
            top: 40%;
            gap: 10px;
            z-index: 999;
        }
        .socmed-title {
            writing-mode: vertical-lr;
            color: #999999;
            transform: rotate(180deg);
        }
        .socmed-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .socmed-link {
            transition: all 0.5s ease;
            filter: brightness(60%)
        }
        .socmed-link:hover{
            filter: brightness(100%);
        }
        /* Socmed */
    </style>
    <!-- Logo -->
    <div class="logo">
        <a href="home">
            <img src="/assets/img/Logo.png" draggable="false" alt="NZK" height="38"/>
        </a>
    </div>
    <!-- Logo -->
    <!-- Navigation Menu -->
    <div class="nav">
        <div class="nav-menu" id="menu">
            <a id="navlink1" href="/about">ABOUT</a>
            <a id="navlink2" href="/work">WORK</a>
            <a id="navlink3" href="/biography">BIOGRAPHY</a>
            <a id="navlink4" href="/faq">FAQ</a>
        </div>
    </div>
    <!-- Navigation Menu -->
    <!-- Social Media -->
    <div class="socmed">
        <h4 class="socmed-title">Follow Me</h4>
        <div class="socmed-container">
            <a class="socmed-link" href="https://www.instagram.com/nevylloproman">
                <img src="/assets/img/Instagram.png" draggable="false" alt="Instagram: @nevylloproman" height="16" loading="lazy"/>
            </a>
            <a class="socmed-link" href="https://www.youtube.com/@vlovlovlo">
                <img src="/assets/img/Youtube.png" draggable="false" alt="Youtube: VLOVLOVLO" height="16" loading="lazy"/>
            </a>
            <a class="socmed-link" href="https://discord.gg/SRWRdzZmur">
                <img src="/assets/img/discord.png" draggable="false" alt="Discord: Glee Community" height="16" loading="lazy"/>
            </a>
            <a class="socmed-link" href="https://github.com/VLO-K">
                <img src="/assets/img/github.png" draggable="false" alt="Github: VLO-K" height="16" loading="lazy"/>
            </a>
        </div>
    </div>
    <!-- Social Media -->
</header>
<script>
    function detect() {
        let scroll = this.scrollY;
        console.log(scroll);

        var x = window.matchMedia("(max-width: 800px)")
        console.log(x);

        if (scroll >= 200 || x.matches){
            navlink1.style.margin = "0px";
            navlink1.style.padding = "15px 5px";
            navlink2.style.margin = "0px";
            navlink2.style.padding = "15px 5px";
            navlink3.style.margin = "0px";
            navlink3.style.padding = "15px 5px";
            navlink4.style.margin = "0px";
            navlink4.style.padding = "15px 5px";
            menu.style.alignItems = "flex-end";
            menu.style.writingMode = "vertical-lr";
            menu.style.right = "0";
        } else {
            navlink1.style.margin = "0 20px";
            navlink1.style.padding = "5px 5px";
            navlink2.style.margin = "0 20px";
            navlink2.style.padding = "5px 5px";
            navlink3.style.margin = "0 20px";
            navlink3.style.padding = "5px 5px";
            navlink4.style.margin = "0 20px";
            navlink4.style.padding = "5px 5px";
            menu.style.alignItems = "initial";
            menu.style.writingMode = "initial";
            menu.style.right = "20px";
        }
    }
    window.addEventListener("resize", (event) => {
        detect()
    });
    window.addEventListener("scroll", (event) => {
        detect()
    });
</script>