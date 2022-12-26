<div id="loader">
  <h2 class="animate">Loading</h2>
</div>
<script>
  window.addEventListener("load", function() {
    loader.style.display = "none";
    content.style.display = "initial";
    nav.style.display = "flex";
    footer.style.display = "initial";
  })
</script>
<style type="text/css" scoped>
  #loader {
    position: fixed;
    height: 100vh;
    width: 100%;
    z-index: 100;
  }
  @keyframes load {
    0%{
      opacity: 0;
      filter: blur(5px);
      letter-spacing: 5px;
    }
  }
  .animate {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: var(--primary);
    text-shadow: 0 0 1px white;
    animation: load 1.5s infinite 0s ease-in-out;
    animation-direction: alternate;
  }
</style>