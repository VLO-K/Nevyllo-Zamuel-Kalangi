<style type="text/css" scoped>
    /* Footer */
    footer {
        display: none;
        user-select: none;
        justify-content: center;
    }
    .footer-container {
        display: flex;
        justify-content: space-between;
        background-color: var(--bg);
        width: 80%;
        max-width: 1920px;
        padding: 30px 0;
    }
    .footer-section {
        display: flex;
    }
    .footer-text {
        overflow: hidden;
        text-decoration: none;
        font-size: 15px;
        font-weight: 400;
        padding: 0 10px;
        transition: all 0.3s ease;
    }
    .footer-text:first-child {
        border-right: 2px solid var(--primary);
    }
    .footer-text:hover {
    }
    @media (max-width: 800px){
        .footer-container {
            justify-content: left;
            width: 85%;
        }
        .footer-cr {
            display: none;
        }
        .footer-section {
            flex-direction: column;
        }
        .footer-text {
            padding-top: 5px;
        }
        .footer-text:first-child {
            border: 0 0 0 0 solid var(--primary);
        }
    }
    /* Footer */
</style>
<footer id="footer">
    <div class="footer-container">
        <div class="footer-section">
            <a class="footer-cr">Copyright 2022 Nevyllo Zamuel Kalangi All Rights Reserved</a>
        </div>
        <div class="footer-section">
            <a class="footer-text">nevyllokalangi@gmail.com</a>
            <a class="footer-text">+62 851 7118 6112</a>
        </div>
    </div>
</footer>