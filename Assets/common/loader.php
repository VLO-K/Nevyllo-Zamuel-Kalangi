<div id="loader">
  <h2 class="loader-text1">等一下、</h2>
  <div class="loader-container">
    <h2 class="loader-text2">正在載入。</h2>
    <h2 class="loader-text3">請稍等片刻。</h2>
    <h2 class="loader-text4">等待</h2>
  </div>
</div>
<script>
  document.body.style.overflow = "hidden";
  window.addEventListener("load", () => {
    loader.style.display = "none";
    nav.style.display = "flex";
    document.body.style.overflowY = "visible";
    content.style.display = "initial";
    footer.style.display = "initial";
  });
</script>
<style type="text/css" scoped>
  @font-face {
    font-family: "Ma Shan Zheng";
    src: url(/Assets/font/MaShanZheng-Regular.ttf);
  }
  #loader {
    display: flex;
    user-select: none;
    flex-direction: column;
    text-align: center;
    justify-content: center;
    writing-mode: vertical-lr;
    font-family: 'Ma Shan Zheng', cursive;
    font-size: 12px;
    letter-spacing: 6px;
    height: 100vh;
    width: 100%;
    color: var(--secondary);
    animation: load 1.5s infinite 0s ease-in-out;
    animation-direction: alternate;
  }
  .loader-container {
    display: flex;
    flex-direction: column;
    text-align: center;
    justify-content: center;
  }
  .loader-text1 {
    margin-top: 180px;
    padding-right: 2vw;
  }
  .loader-text3{
    margin-top: -120px;
    padding: 0 5px;
  }
  .loader-text4{
    margin-top: -240px;
  }
  @keyframes load {
    0%{
      opacity: 0;
      filter: blur(5px);
    }
  }
</style>