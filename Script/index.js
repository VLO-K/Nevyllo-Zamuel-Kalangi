let parallax_Img1 = document.getElementsByClassName('parallax')[0];

window.addEventListener('scroll', function() {
  let value = window.scrollY;

  parallax_Img1.style.top = value * 0.9 + 'px';
})