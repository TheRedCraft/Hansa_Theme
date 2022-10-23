if ("ontouchstart" in document.documentElement)
{
  hamburger = document.querySelector('.hamburger')
  navMenu = document.querySelector('.menu-header-menu-container')

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
  });
  hamburger.addEventListener('touchstart', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
  });
  document.querySelectorAll('.menu-item').forEach(n => {
    n.addEventListener('click', () =>  {
      hamburger.classList.remove('active');
      navMenu.classList.remove('active');
    })
    n.addEventListener('touchstart', () =>  {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
      })
  })
}

