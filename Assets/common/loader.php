<div id="loader"></div>
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
</style>