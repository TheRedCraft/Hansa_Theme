/*calender = []

function addToCalender(line) {
  calender.push(line)
}
function alertCalender() {
  makeCalender(calender)
}*/

document.querySelector('.submit-button').innerHTML = 'Suchen';

var counter = 1;
max_bilder = document.querySelectorAll('#SliderImage').length;
function SetupImageSlider() {
  var last_dot = '';
  document.querySelector('.auto-btn' + counter).style.background = '#3660E3';

  setInterval(function() {
    last_dot = document.querySelector('.auto-btn' + counter);
    counter++;

    if(counter > max_bilder){
      counter = 1;
    }

    for(i = 1; i < max_bilder + 1; i++) {
      document.querySelector('.auto-btn' + i).style.background = 'transparent';
    }

    document.querySelector('.auto-btn' + counter).style.background = '#3660E3';
    document.querySelector('.first').style.marginLeft = -((counter - 1) * 20) + "%"
  }, 10000)
}

SetupImageSlider()

function make_active(i) {
  switch(i) {
    case 1:
      counter = max_bilder;
      break
    default:
      counter = i - 1;
  }

  last_dot = document.querySelector('.auto-btn' + counter);
    counter++;

    if(counter > max_bilder){
      counter = 1;
    }

    for(i = 1; i < max_bilder + 1; i++) {
      document.querySelector('.auto-btn' + i).style.background = 'transparent';
    }

    document.querySelector('.auto-btn' + counter).style.background = '#3660E3';
    document.querySelector('.first').style.marginLeft = -((counter - 1) * 20) + "%"
}

function searchgrid() {
    const twitch_boxen = document.querySelectorAll(".twitch-boxen");

    for(i = 0; i < twitch_boxen.length; i++) {
        twitch_boxen_count = twitch_boxen[i].childElementCount;
        let colls = Math.ceil(twitch_boxen_count / 4);
        let cssgrid = "";
        for(e = 0; e < colls; e++) {
        cssgrid += '30vw ';
        }
        twitch_boxen[i].style.gridTemplateRows = cssgrid;
    }

}

function dislplayscrolled() {
    if(window.scrollY > 2) {
        document.querySelector('.first_menu').style.transition = '1s';
    }
    if(window.scrollY < 200) {
        document.querySelector('.first_menu').dataset.theme = "weg";
    } else {
        document.querySelector('.first_menu').dataset.theme = "";
    }
}

setTimeout(function() { document.querySelector('.first_menu').dataset.theme = "weg"; }, 1 );
window.addEventListener("scroll", dislplayscrolled, false);
