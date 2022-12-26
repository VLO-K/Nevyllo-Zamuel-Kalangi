<div class="cursor"></div>
<script>
  const cursor = document.querySelector('.cursor');

  document.addEventListener('mousemove', e => {
      cursor.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX - 10)+"px;")
  })

  document.addEventListener('click', () => {
    cursor.classList.add("expand");

    setTimeout(() => {
      cursor.classList.remove("expand");
    }, 500)
  })
</script>
<style type="text/css" scoped>
    :root {
    --primary: #fff;
    --secondary: #e91e63;
    --bg: #000;
    --secondary-bg: #0f0f0f;
  }
  .cursor {
    position: absolute;
    pointer-events: none;
    width: 15px;
    height: 15px;
    top: -50px;
    left: -50px;
    border: 1px solid var(--primary);
    border-radius: 50%;
    z-index: 999;
    transition-duration: 200ms;
    transition-timing-function: ease-out;
  }
  @keyframes cursorAnim2 {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(3);
    }
    100% {
      transform: scale(1);
      opacity: 0.2;
    }
  }
  .expand {
    border: 1px solid var(--secondary);
    animation: cursorAnim2 .5s forwards;
  }
  @media(max-width: 600px){
    .cursor {
      display: none;
    }
  }
</style>