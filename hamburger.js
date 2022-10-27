document.querySelector('.menu-header-menu-container').classList.add('notActive')

if ("ontouchstart" in document.documentElement)
{
  hamburger = document.querySelector('.hamburger')
  navMenu = document.querySelector('.menu-header-menu-container')
  nav = document.querySelector('nav');
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
    navMenu.classList.toggle('notActive');
    if (nav.style.display == 'block') {
      setTimeout(changeVisible, 200);
    } else {
      nav.style.display = 'block';
    }
  });

  document.querySelectorAll('.menu-item').forEach(n => {
    n.addEventListener('click', () =>  {
      hamburger.classList.remove('active');
      navMenu.classList.remove('active');
      navMenu.classList.add('notActive');
    })
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