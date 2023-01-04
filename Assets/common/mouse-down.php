<span class="mouse"></span>
<style type="text/css" scoped>
  .mouse {
    position: absolute;
    justify-content: center;
    width: 24px;
    height: 38px;
    box-sizing: border-box;
    border: 2px solid #fff;
    border-radius: 50% 50% 50% 50% / 25% 25% 25% 25%;
  }
  .mouse::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    transform: translate(-50% , 50%);
    width: 5px;
    height: 5px;
    background: #FFF;
    border-radius: 50%;
    animation: fadeDown 1s ease-out infinite;
  }
  @keyframes fadeDown {
    0% {
      top: 0%;
      opacity: 1;
    }
    100% {
      top: 60%;
      opacity: 0;
    }
  }
</style>