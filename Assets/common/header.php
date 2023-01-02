<header id="nav">
    <style type="text/css" scoped>
        /* Navigation */
        #nav {
            display: none;
        }
        .nav-container {
            display: flex;
            position: fixed;
            justify-content: space-between;
            align-items: center;
            text-overflow: ellipsis;
            overflow: hidden;
            user-select: none;
            top: 0;
            height: 60px;
            width: 100%;
            padding: 0 8%;
            z-index: 39;
            background-color: var(--bg);
            filter: blur(80%)
        }
        .logo {
            padding-left: 2%;
            padding-right: 2%;
        }
        .logo:hover {
            cursor: pointer;
        }
        .nav-menu {
            display: flex;
            align-items: center;
            width: 100%;
        }
        .nav-menu a {
            position: relative;
            text-decoration: none;
            font-size: 16px;
            color: #bbbbbb;
            margin: 0 20px;
            padding: 5px 5px;
        }
        .nav-menu a:after {
            position: absolute;
            background: none repeat scroll 0 0 transparent;
            content: "";
            height: 2px;
            width: 0;
            left: 50%;
            bottom: 0;
            background: var(--primary);
            transition: width 0.3s ease 0s, left 0.3s ease 0s;
        }
        .nav-menu a:hover {
            color: var(--primary);
        }
        .nav a:hover:after {
            cursor: pointer;
            width: 100%;
            left: 0;
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
    <!-- Navigation -->
    <div class="nav-container">
        <!-- Navigation Logo -->
        <div class="logo">
            <a href="home">
                <img src="/assets/img/Logo.png" draggable="false" alt="NZK" height="32"/>
            </a>
        </div>
        <!-- Navigation Logo -->
        <!-- Navigation Menu -->
        <div class="nav">
            <div class="nav-menu">
                <a href="/about">ABOUT</a>
                <a href="/work">WORK</a>
                <a href="/biography">BIOGRAPHY</a>
                <a href="/faq">FAQ</a>
            </div>
        </div>
        <!-- Navigation Menu -->
    </div>
    <!-- Navigation -->
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