var counter = 1;
setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 4){
    counter = 1;
  }
}, 5000);

function searchgrid() {
  console.log('hi');
  const twitch_boxen = document.querySelectorAll(".twitch-boxen");
  console.log(twitch_boxen);
  
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
  document.querySelector('.first_menu').style.oppacity = window.scrollY;
}

window.addEventListener('scroll', dislplayscrolled);
