document.querySelector('.menu-header-menu-container').classList.add('notActive')

if ("ontouchstart" in document.documentElement)
{
  console.log('mobile');
  hamburger = document.querySelector('.hamburger')
  navMenu = document.querySelector('.menu-header-menu-container')
  nav = document.querySelector('nav');
  hamburger.addEventListener('click', () => {
    console.log('click hamburger')
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
    navMenu.classList.toggle('notActive');
    if (nav.style.display == 'block') {
      setTimeout(changeVisible, 200);
    } else {
      nav.style.display = 'block';
    }
  });
<<<<<<< HEAD

=======
  hamburger.addEventListener('touchend', () => {
    console.log('hamburger touch-start')
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
  }, false);
>>>>>>> 41ffce16618d3ab91ff124b52d0574850906637b
  document.querySelectorAll('.menu-item').forEach(n => {
    console.log('document.querySelectorAll did work')
    n.addEventListener('click', () =>  {
      console.log('click menu-item');
      hamburger.classList.remove('active');
      navMenu.classList.remove('active');
      navMenu.classList.add('notActive');
    })
<<<<<<< HEAD
=======
    n.addEventListener('touchend', () =>  {
        console.log('touchstart menu-item')
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
      },false)
>>>>>>> 41ffce16618d3ab91ff124b52d0574850906637b
  })
}

function changeVisible() {
  nav = document.querySelector('nav');
  if (nav.style.display == 'block') {
    nav.style.display = 'none';
  } else {
    nav.style.display = 'block';
  }
}

/*menuItemHasChildren = document.querySelectorAll('.menu-item-has-children');

//menuItemHasChildren.addEventListener('click', fucntion () {
//  child davon soll visable werden und dieses element soll darunter auch angezeigt werden
//})

for (i = 0; i < menuItemHasChildren.length; i++) {
  console.log('hi');
  menuItemHasChildren[i].childNodes.childNodes.classList.add('dontShow');
  menuItemHasChildren[i].childNodes.childNodes.style.display = 'none';
    menuItemHasChildren[i].addEventListener('click', function (event) {
      event.preventDefault();
      menuItemHasChildren[i].childNodes.childNodes.classList.toggle('show');
      menuItemHasChildren[i].childNodes.childNodes.classList.toggle('dontShow');
    })
}
*/