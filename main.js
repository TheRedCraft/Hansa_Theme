/*calender = []

function addToCalender(line) {
  calender.push(line)
}
function alertCalender() {
  makeCalender(calender)
}*/

var counter = 1; //Aktuelles Bild für Image Slider auf 1
max_bilder = document.querySelectorAll('#SliderImage').length; //Verfügbare Image Slider bilder zählen
function SetupImageSlider() {
  var last_dot = ''; //letzter Dot/bild
  document.querySelector('.auto-btn' + counter).style.background = '#3660E3'; //Alle Image slider Buttons auf blau

  setInterval(function() { //Wiederhole alle 10Sekunden
    last_dot = document.querySelector('.auto-btn' + counter); //Aktuellen Fortschrit laden
    counter++; //Fortschritt um 1 erhöhen

    if(counter > max_bilder){ //wenn letztes Bild ereicht von vorne anfangen
      counter = 1; 
    }

    for(i = 1; i < max_bilder + 1; i++) { //AlleSlider Buttons dursichtig
      document.querySelector('.auto-btn' + i).style.background = 'transparent';
    }

    document.querySelector('.auto-btn' + counter).style.background = '#3660E3'; //Fortschritt anwenden
    document.querySelector('.first').style.marginLeft = -((counter - 1) * 20) + "%" //Bilder verschieben
  }, 10000)
}

SetupImageSlider() //Image Slider Setup laden

function make_active(i) {
  switch(i) { 
    case 1: //wenn eingabe ist eins fortschritt auf letzte Biild setzen
      counter = max_bilder;
      break
    default: //Sonst auf aktuelles Bild
      counter = i - 1;
  }

  last_dot = document.querySelector('.auto-btn' + counter); //Aktuellen Fortschritt laden
    counter++; //fortschritt um 1 erhöhen

    if(counter > max_bilder){ //wenn am ende -> von vorne
      counter = 1;
    }

    for(i = 1; i < max_bilder + 1; i++) { //Alle Slider Buttons Dursichtig machen
      document.querySelector('.auto-btn' + i).style.background = 'transparent';
    }

    document.querySelector('.auto-btn' + counter).style.background = '#3660E3'; //nächsten dot Blau
    document.querySelector('.first').style.marginLeft = -((counter - 1) * 20) + "%" //Slider verschiebung ausrechnen und anwenden
}

function searchgrid() { //Grid für Twitch boxen erstellen
    const twitch_boxen = document.querySelectorAll(".twitch-boxen"); //alle twitch boxen laden

    for(i = 0; i < twitch_boxen.length; i++) { //gebrauchtes grid für Twitch boxen ausrechnen  und anweden
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
    if(window.scrollY > 2) { //wenn scroll Position größer als 2 transition für Menü Bar setzen
        document.querySelector('.first_menu').style.transition = '1s';
    }
    if(window.scrollY < 200) { //wenn scroll positioon kleiner als 200 -> speichern das Menü Bar weg sein soll
        document.querySelector('.first_menu').dataset.theme = "weg";
    } else { //Sonst speichern das sie da sein soll
        document.querySelector('.first_menu').dataset.theme = "";
    }
}

setTimeout(function() { document.querySelector('.first_menu').dataset.theme = "weg"; }, 1 ); //1 Sekunde nachdem die seite geladen wurde speichern das die Menü Bar weg sein soll
window.addEventListener("scroll", dislplayscrolled, false); //Wenn gescrollt wird scroll funktion ausführen


function make_Oberstufe() {
  Neue_seite = ""; //Seite zum aufbauen am anfang leeren
  const Kachlen_einfüge_zeichen = "Æ"; //Trenn Zeichen wo die Kacheln rein sollen
  let Seiten_inhalt = document.querySelector('.single-post-content').innerHTML; //Aktuellen Seiteninhalt laden

  let Trennung_1 = Seiten_inhalt.split(Kachlen_einfüge_zeichen); //Seite bei Trennzeichen in array trenen

 
  document.querySelector('.twitch-boxen').id = "todelete"; //aktuelle Twitch boxen id löschen geben
  Neue_seite = Trennung_1[0] + '<div class="twitch-boxen t_boxen_oberstufe" style="grid-template-rows: 30vw 30vw;">' + document.querySelector('.twitch-boxen').innerHTML + '</div>' + Trennung_1[1] //Neue Seite zusammensetzen



  document.querySelector('.single-post-content').innerHTML = Neue_seite; //Zusammengestze Seite einfügen
  document.getElementById('todelete').remove(); //allte Twitch boxen löschen
}