<style type="text/css" scoped>
    /* Footer */
    footer {
        display: none;
        user-select: none;
    }
    .footer-container {
        display: flex;
        justify-content: space-between;
        background-color: var(--bg);
        padding: 30px 10%;
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
        .footer-section {
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