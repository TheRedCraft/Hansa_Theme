if ("ontouchstart" in document.documentElement)
{
  console.log('mobile');
  hamburger = document.querySelector('.hamburger')
  navMenu = document.querySelector('.menu-header-menu-container')

  hamburger.addEventListener('click', () => {
    console.log('click hamburger')
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
  });
  hamburger.addEventListener('touchend', () => {
    console.log('hamburger touch-start')
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
  }, false);
  document.querySelectorAll('.menu-item').forEach(n => {
    console.log('document.querySelectorAll did work')
    n.addEventListener('click', () =>  {
      console.log('click menu-item');
      hamburger.classList.remove('active');
      navMenu.classList.remove('active');
    })
    n.addEventListener('touchend', () =>  {
        console.log('touchstart menu-item')
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
      },false)
  })
}

