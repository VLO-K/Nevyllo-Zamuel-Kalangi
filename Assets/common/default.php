<style type="text/css" scoped>
  /* Config */
  :root {
    --primary: #fff;
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
  @font-face {
    font-family: "RubikReg";
    src: url(/Assets/font/Rubik-Regular.ttf);
  }
  @font-face {
    font-family: "RubikLi";
    src: url(/assets/font/Rubik-Light.ttf);
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
    color: var(--primary);
    width: 100%;
    min-height: 100vh;
    background-color: var(--bg);
  }
  .seperator {
    height: 80px;
  }
  .content-container {
    display: none;
    flex-direction: column;
    align-items: center;
    max-width: 120em;
  }
</style>