var counter = 1;
setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 4){
    counter = 1;
  }
}, 5000);

function searchgrid() {
  console.log('hi')
  const twitch_boxen = document.querySelectorAll(".twitch-boxen");
  console.log(twitch_boxen);
  for(i = 0; i < twitch_boxen.length; i++) {
    colls = Math.ceil(twitch_boxen[i].length / 4);
    let cssgrid = "";
    for(i = 0; i < colls; i++) {
      cssgrid += '30vw ';
    }
    document.querySelector('.twitch-boxen').style.gridTemplateRows = cssgrid;
  }
}

function dislplayscrolled() {
  document.querySelector('.first_menu').style.oppacity = window.scrollY;
  console.log(window.scrollY)
}

window.addEventListener('scroll', dislplayscrolled);