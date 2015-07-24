<!-- load in the fullcalendar js plugin -->
$(function(){
    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
        editable: true,

        events: 'http://localhost/kaizen/KaizenMed/booking/read/web/',

        header:{
            left:   'prevYear,nextYear',
            center: 'title,today',
            right:  'prev,next,month,agendaWeek,agendaDay'
        }
    });
});