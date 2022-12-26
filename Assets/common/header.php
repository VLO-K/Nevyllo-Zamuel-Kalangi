<header class="nav-container" id="nav">
    <style type="text/css" scoped>
        /* Navigation */
        .nav-container {
            display: none;
            position: sticky;
            justify-content: space-between;
            align-items: center;
            text-overflow: ellipsis;
            overflow: hidden;
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
            background: var(--secondary);
            transition: width 0.3s ease 0s, left 0.3s ease 0s;
        }
        .nav-menu a:hover {
            color: var(--primary);
        }
        .nav-link a:hover:after {
            cursor: pointer;
            width: 100%;
            left: 0;
        }
        /* Navigation */
    </style>
    <!-- Navigation Logo -->
    <div class="logo">
        <a href="home">
            <img src="/Assets/Img/Logo.png" draggable="false" alt="NZK" height="32"/>
        </a>
    </div>
    <!-- Navigation Logo -->
    <!-- Navigation Link -->
    <div class="nav-link">
        <!-- Navigation Menu -->
        <div class="nav-menu">
            <a href="/about">ABOUT</a>
            <a href="/portfolio">PORTFOLIO</a>
            <a href="/project">PROJECT</a>
            <a href="/faq">FAQ</a>
        </div>
        <!-- Navigation Menu -->
    </div>
</header>