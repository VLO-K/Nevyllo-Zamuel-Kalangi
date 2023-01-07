<style type="text/css" scoped>
    /* Navigation Desktop */
    #nav {
        display: none;
        justify-content: center;
        background-color: var(--bg);
    }
    .nav-desktop {
        display: initial;
    }
    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        width: 80%;
        max-width: 1920px;
        padding: 20px 0;
        z-index: 900;
        background-color: var(--bg);
    }
    .logo:hover {
        cursor: pointer;
    }
    .nav {
        display: flex;
        flex-direction: row;
        transition: all 0.5s ease;
        gap: 40px;
    }
    .nav a {
        position: relative;
        text-decoration: none;
        font-size: 16px;
        color: var(--primary);
    }
    .nav a:hover {

    }
    /* Navigation Desktop */

    /* Navigation Phone */
    .nav-phone {
        display: none;
    }
    #nav-btn[type="checkbox"] {
        display: none;
    }
    #nav-btn:checked + .nav-btn span:nth-child(1) {
        transform: rotate(-45deg);
    }
    #nav-btn:checked + .nav-btn span:nth-child(2) {
        transform: scaleX(0);
    }
    #nav-btn:checked + .nav-btn span:nth-child(3) {
        transform: rotate(45deg);
    }
    #nav-btn:checked ~ .nav-wrapper {
        right: 0;
    }
    #nav-btn:checked ~ .nav-wrapper .nav-menu a {
        opacity: 1;
        transform: none;
        transition-timing-function: ease, cubic-bezier(.1,1.3,.3,1);
        transition-delay: .4s;
        transform: translateX(0);
    }
    .nav-btn {
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        cursor: pointer;
        height: 40px;
        width: 30px;
        top: 20px;
        right: 5%;
        z-index: 901;
        transition: all 0.3s ease-in-out;
    }
    .nav-btn span {
        position: absolute;
        width: 100%;
        border-bottom: 3px solid #fff;
        transition: transform .6s cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    .nav-btn span:nth-child(1) {
        transform: translateY(8px);
    }
    .nav-btn span:nth-child(3) {
        transform: translateY(-8px);
    }
    .nav-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        right: -100%;
        height: 100%;
        width: 100%;
        z-index: 900;
        background: #000;
        transition: all 0.6s ease-in-out;
    }
    .nav-menu a {
        display: flex;
        flex-direction: row;
        text-decoration: none;
        font-size: 30px;
        font-weight: 500;
        line-height: 50px;
        padding: 20px;
        opacity: 0;
        color: #fff;
        transform: translateX(100px);
        transition: opacity 0.3s ease;
        transition: transform .6s cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    .nav-menu a:hover {
        color: var(--secondary);
    }
    @media (max-width: 800px){
        .nav-container {
            width: 90%;
            max-width: 1920px;
        }
        .nav-desktop {
            display: none;
        }
        .nav-phone {
            display: initial;
        }
    }
    /* Navigation Phone */
    /* Socmed */
    .socmed {
        display: flex;
        flex-direction: column;
        position: fixed;
        user-select: none;
        bottom: 10px;
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
<header id="nav">
    <div class="nav-container">
        <!-- Logo -->
        <div class="logo">
            <a href="home">
                <img src="/assets/img/Logo.png" draggable="false" alt="NZK" height="38" loading="lazy"/>
            </a>
        </div>
        <!-- Logo -->
        <!-- Navigation Menu Desktop -->
        <div class="nav-desktop">
            <div class="nav">
                <a href="/about">ABOUT</a>
                <a href="/work">WORK</a>
                <a href="/biography">BIOGRAPHY</a>
                <a href="/faq">FAQ</a>
            </div>
        </div>
        <!-- Navigation Menu Desktop -->
    </div>
        <!-- Navigation Menu Phone -->
        <div class="nav-phone">
            <input type="checkbox" id="nav-btn" onclick="navchecked()">
            <label for="nav-btn" class="nav-btn">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div class="nav-wrapper">
                <div class="nav-menu">
                    <a href="/about">ABOUT</a>
                    <a href="/work">WORK</a>
                    <a href="/biography">BIOGRAPHY</a>
                    <a href="/faq">FAQ</a>
                </div>
            </div>
        </div>
        <!-- Navigation Menu Phone -->
</header>
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
<script>
    function navchecked() {
        var checkbox = document.getElementById("nav-btn");

        checkbox.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = 'visible';
            }
        })
    }
</script>