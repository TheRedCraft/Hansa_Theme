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
    if(n.classList.contains('menu-item-has-childes') == false) {
    n.addEventListener('click', () =>  {
      hamburger.classList.remove('active');
      navMenu.classList.remove('active');
      navMenu.classList.add('notActive');
    })
  }
  })

  
  let submenu_list = document.querySelectorAll('.sub-menu');
  for(q = 0; q < submenu_list.length; q++) {
    submenu_list[q].classList.add('notshow')
  }

  let has_childes = document.querySelectorAll('.menu-item-has-children');
  for(i = 0; i < has_childes.length; i++) {
    has_childes[i].addEventListener('click', function() {
      let has_childes_child_nodes = this.querySelectorAll('.sub-menu')
      for(e = 0; e < has_childes_child_nodes.length; e++) {
        has_childes_child_nodes[e].classList.toggle('show');
        has_childes_child_nodes[e].classList.toggle('notshow');
        console.log('hi');
      }
    })
  }
}

function changeVisible() {
  nav = document.querySelector('nav');
  if (nav.style.display == 'block') {
    nav.style.display = 'none';
  } else {
    nav.style.display = 'block';
  }
}

