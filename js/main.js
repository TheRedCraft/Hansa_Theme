var counter = 1;
setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 4){
    counter = 1;
  }
}, 5000);

function searchgrid() {
  const twitch_boxen = document.querySelectorAll(".twitch-box");
  colls = Math.ceil(twitch_boxen.length / 4);
  console.log('COlls: '+ colls);
  let cssgrid = "";
  for(i = 0; i < colls; i++) {
    cssgrid += '30vw ';
  }
  document.querySelector('.twitch-boxen').style.gridTemplateRows = cssgrid;
  console.log(cssgrid)
}