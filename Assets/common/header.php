<style type="text/css" scoped>
    /* Navigation */
    #nav {
        display: none;
        justify-content: center;
    }
    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        width: 80%;
        max-width: 1920px;
        top: 0;
        padding: 20px 0;
        z-index: 999;
        background-color: var(--bg);
    }
    .logo:hover {
        cursor: pointer;
    }
    .nav-menu {
        display: flex;
        flex-direction: row;
        transition: all 0.5s ease;
        gap: 40px;
    }
    .nav-menu a {
        position: relative;
        text-decoration: none;
        font-size: 16px;
        color: var(--primary);
    }
    .nav-menu a:hover {
    }
    @media (max-width: 800px){
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
<header id="nav">
    <div class="nav-container">
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
    </div>
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
    function detect() {
        let scroll = this.scrollY;
        console.log(scroll);

        var x = window.matchMedia("(max-width: 800px)")
        console.log(x);

        if (scroll >= 200 || x.matches){
        } else {
        }
    }
    window.addEventListener("resize", (event) => {
        detect()
    });
    window.addEventListener("scroll", (event) => {
        detect()
    });
</script>