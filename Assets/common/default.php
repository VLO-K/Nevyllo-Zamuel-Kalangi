<style type="text/css" scoped>
  /* Config */
  :root {
    --primary: #fff;
    --secondary: #00b5ff;
    --bg: #000;
  }
  @font-face {
    font-family: "Ma Shan Zheng";
    src: url(/Assets/font/MaShanZheng-Regular.ttf);
  }
  @font-face {
    font-family: "RobotoReg";
    src: url(/assets/font/Roboto-Regular.ttf);
  }
  @font-face {
    font-family: "RobotoTh";
    src: url(/assets/font/Roboto-Thin.ttf);
  }
  *, *::after, *::before {
    box-sizing: border-box;
  }
  * {
    margin: 0;
    padding: 0;
  }
  img, video, picture, svg {
    display: block;
    user-select: none;
  }
  html {
    color-scheme: dark light;
    scroll-behavior: smooth;
  }
  body {
    overflow-x: hidden;
    font-family: "RobotoReg", sans-serif;
    width: 100%;
    min-height: 100vh;
    color: var(--primary);
    background-color: var(--bg);
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
  }
  .seperator {
    height: 80px;
  }
  .content-container {
    display: none;
    justify-content: center;
  }
  .content-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 80%;
    max-width: 1920px;
  }
@media (max-width: 800px) {
  .content-wrapper {
    width: 90%;
  }
}
  /* Config */
  /* Animation Keyframes */



  /* Animation Keyframes */
  /* Scrollbar */
  ::-webkit-scrollbar {
    width: 9px;
  }
  ::-webkit-scrollbar-track {
    margin: 8px 0;
    background-color: transparent;
  }
  ::-webkit-scrollbar-thumb {
    border-radius: 20px;
    background-color: var(--secondary);
  }
  ::-webkit-scrollbar-thumb:hover {
    background-color: #0090cc;
  }
  /* Scrollbar */
</style>