<div class="cursor"></div>
<script>
  const cursor = document.querySelector('.cursor');

  document.addEventListener('mousemove', e => {
      cursor.setAttribute("style", "top: "+(e.clientY - 10)+"px; left: "+(e.clientX - 10)+"px;")
  })

  document.addEventListener('click', () => {
    cursor.classList.add("expand");

    setTimeout(() => {
      cursor.classList.remove("expand");
    }, 500)
  })
</script>
<style type="text/css" scoped>
  .cursor {
    position: fixed;
    pointer-events: none;
    width: 15px;
    height: 15px;
    border: 1px solid var(--primary);
    border-radius: 50%;
    z-index: 999;
    transition-duration: 200ms;
    transition-timing-function: ease-out;
  }
  @keyframes cursorAnim {
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
    animation: cursorAnim .5s forwards;
  }
  @media(max-width: 600px){
    .cursor {
      display: none;
    }
  }
</style>