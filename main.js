/*calender = []

function addToCalender(line) {
  calender.push(line)
}
function alertCalender() {
  makeCalender(calender)
}*/

var counter = 1;
max_bilder = document.querySelectorAll('#SliderImage').length;
document.querySelector(".auto-btn" + counter).style.background = '#3660E3';
setInterval(function(){
  document.getElementById('radio' + counter).checked = "true";
  counter++;
  if(counter > max_bilder){
    counter = 1;
  }

  document.querySelector('.first').style.marginLeft = -((counter - 1) * 20) + "%"
  name_dot = '.auto-btn' + counter;
  name_previos_dot = '';
  if(counter == max_bilder) {
    name_previos_dot = '.auto-btn' + (counter - 1);
  } else if(counter == 1) {
    name_previos_dot = ".auto-btn" + max_bilder;
  } else {
    name_previos_dot = '.auto-btn' + (counter - 1);
  }

  document.querySelector(name_dot).style.background = '#3660E3';
  document.querySelector(name_previos_dot).style.background = 'transparent';
}, 5000);

function make_active(i) {
    counter = i;
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

setTimeout(function() { document.querySelector('.first_menu').dataset.theme = "weg"; }, 1 )
window.addEventListener('scroll', dislplayscrolled);
