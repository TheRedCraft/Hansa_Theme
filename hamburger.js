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
    if (document.querySelector('body').style.overflow == 'visible') {
      document.querySelector('body').style.overflow = 'hidden';
    } else {
      document.querySelector('body').style.overflow = 'visible';
    }
  });

  /*document.querySelectorAll('.menu-item').forEach(n => {
    if(n.classList.contains('menu-item-has-childes') == false) {
    n.addEventListener('click', () =>  {
      hamburger.classList.remove('active');
      navMenu.classList.remove('active');
      navMenu.classList.add('notActive');
    })
  }
  })*/

  let submenu_list = document.querySelectorAll('.sub-menu');
  for(q = 0; q < submenu_list.length; q++) {
    submenu_list[q].style.display = 'none';
  }

  let has_childes = document.querySelectorAll('.menu-item-has-children');
  for(i = 0; i < has_childes.length; i++) {
    a_as_childes = has_childes[i].querySelector('a')
    a_as_childes2 = has_childes[i].querySelector('a').href
    a_as_childes3 = has_childes[i].querySelector('a').textContent;
    a_as_childes.href = '#';
    a_as_childes2 = "<a href='" + a_as_childes2 + "' aria-current='page'>" + a_as_childes3 + "</a>"

    has_childes[i].querySelector('.sub-menu').innerHTML += a_as_childes2;
    
    has_childes[i].addEventListener('click', function() {
      let has_childes_child_nodes = this.querySelectorAll('.sub-menu')
      for(e = 0; e < has_childes_child_nodes.length; e++) {

        if(has_childes_child_nodes[e].style.display == 'none') {
          has_childes_child_nodes[e].style.display = 'block';
        } else {
          has_childes_child_nodes[e].style.display = 'none';
        }
      }
    })
  }

  all_sub_menus = document.querySelectorAll('.sub-menu')

  for(z = 0; z < all_sub_menus.length; z++) {
    all_sub_menus[z].style.left = '0%'
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

