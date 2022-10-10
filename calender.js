calenderData = []

calender = ['11/12/12 13:30?11/12/12 15:30?Default Value'];

function addToCalender(line) {
    calender.push(line)
}

console.log(calender);


function makeCalenderData() {

        
    calenderData = []


    for (var i = 0; i < calender.length; i++) {
        line = calender[i]

        //line =  "11/12/12 13:30?11/12/12 15:30?Fachleiterkonferenz"
        events = []
        calEvent = line.split('?')

        theEvent = {
            desc: calEvent[2],
            start: getDate(calEvent[0]),
            end: getDate(calEvent[1]),
            }

        calenderData.push(theEvent)
        }


}

function getDate(date) {
    timeAndDate = date.split(' ')
    theDate = timeAndDate[0].split('/')
    month = parseInt(theDate[0])
    day = parseInt(theDate[1])
    year = 2000 + parseInt(theDate[2])
    time = timeAndDate[1].split(':')
    hour = parseInt(time[0])
    minute = parseInt(time[1])
    return {
        year: year,
        month: month,
        day: day,
        hour: hour,
        minute: minute,
        }
}



function makeCalender(dm = new Date().getMonth() + 1, dj = new Date().getFullYear(), calenderId = 'kalender') {

    makeCalenderData();

  const Months = ["Januar", "Februar", "März", "April", "Mai", "Juni",
                      "Juli", "August", "September", "Oktober", "November", "Dezember"],
        Days = ["Mo", "Di", "Mi", "Do", "Fr", "Sa", "So"];

        const now = new Date()
        let thisDay = -1;

        if ( (now.getFullYear() == dj) && (now.getMonth() +1 == dm) ) {
          thisDay = now.getDate();
        }

        const Time = new Date(dj, dm - 1, 1);
        const Start = (Time.getDay() + 6 ) % 7;

        let Stop = 31;

        if (dm == 4 || dm == 6 || dm == 9 || dm == 11) --Stop;

        if (dm == 2) {
          Stop = Stop-3;

          if (dj % 4 == 0) Stop++;
          if (dj % 100 == 0) Stop--;
          if (dj % 400 == 0) Stop++;
        }

        const table = document.getElementById(calenderId);
        if(!table) {
          return false;
        }
        let Monthhead = Months[dm - 1] + ' ' + dj,
        caption = table.createCaption();
        caption.innerHTML = Monthhead;

        let row = table.insertRow(0);
        for (var i = 0; i < 7; i++) {
          let cell = row.insertCell(i);
          cell.innerHTML = Days[i];
          cell.classList.add('Wochentag')
        }

        let Daycount = 1;

        for (var i = 0; Daycount <= Stop; i++) {
          let row = table.insertRow(1 +i);
          for (var j = 0; j < 7; j++) {
            let cell = row.insertCell(j);

            if ( ((i == 0) && (j < Start)) || (Daycount > Stop)) {
              cell.innerHTML = ' ';
            }
            else {
              addon = ''
              for (var k = 0; k < calenderData.length; k++) {
                if (calenderData[k].start.month <= dm && calenderData[k].end.month >= dm && calenderData[k].start.year <= dj && calenderData[k].end.year >= dj && calenderData[k].start.day <= Daycount && calenderData[k].end.day >= Daycount) {
                  addon = addon + "<span class'termin'>" + calenderData[k].desc + "</span>"
                }
              }
              cell.innerHTML = "<div class='cell'><p>" + Daycount + "</p><br>" + addon + "</div>";
              cell.className = 'kalendertag';
              
              console.log(Daycount, thisDay);
              if ( Daycount == thisDay ) {
                console.log('hi');
                cell.classList.add('today');
              }
              Daycount++;
            }
          }
        }
        return true;

}

function clearCalender() {
    calenderTable = document.getElementById('kalender');
    calenderTable.innerHTML = '';
}

let currentYearToMakeCalender = new Date().getFullYear();
let currentMonthToMakeCalender = new Date().getMonth() + 1;

function nextMonth() {
    if (currentMonthToMakeCalender == 12) {
        currentMonthToMakeCalender = 1;
        currentYearToMakeCalender ++
    } else {
        currentMonthToMakeCalender++;
    }
    clearCalender()
    makeCalender(currentMonthToMakeCalender, currentYearToMakeCalender);
}

function beforeMonth() {
    if (currentMonthToMakeCalender == 1) {
        currentMonthToMakeCalender = 12;
        currentYearToMakeCalender--;
    } else {
        currentMonthToMakeCalender--;
    }
    clearCalender()
    makeCalender(currentMonthToMakeCalender, currentYearToMakeCalender);
}