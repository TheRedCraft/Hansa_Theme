var counter = 1;
document.getElementById('radio1').checked = true;
setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 8){
    counter = 1;
  }
}, 5000);

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
