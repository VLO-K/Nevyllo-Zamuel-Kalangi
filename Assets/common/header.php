<header class="nav-container">
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
        /* Navigation */
        .nav-container {
            display: flex;
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
            background-color: #000000e0;
            filter: blur(80%)
        }
        .logo {
            padding-left: 2%;
            padding-right: 2%;
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
            <a href="about">ABOUT</a>
            <a href="project">PROJECTS</a>
            <a href="faq">FAQ</a>
        </div>
        <!-- Navigation Menu -->
    </div>
</header>