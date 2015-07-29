<!-- load in the fullcalendar js plugin -->
$(function(){
    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({

        eventLimit: true, // for all non-agenda views

        views: {
            month: {
                eventLimit: 4 // adjust to 6 only for agendaWeek/agendaDay
            }
        },

        eventLimitClick: "week",

        editable: true,

        theme: true,

        events: 'http://localhost/kaizen/KaizenMed/booking/read/web/',

        header:{
            left:   'prevYear,nextYear',
            center: 'title,today',
            right:  'prev,next,month,agendaWeek,agendaDay'
        },

        dayClick: function(date, jsEvent, view){
            //if a user clicks on a day change view to agendaWeek View
            if(view.name == 'month'){
                $('#calendar').fullCalendar('changeView','agendaWeek');
                return;
            }

            var modal = UIkit.modal("#add-booking");

            if ( modal.isActive() ) {
                modal.hide();
            } else {
                //desired format
                //2015-06-28 & 13:00:00
                //var d = date.format("HH:mm:ss"); - 24 hour notation
                //var d = date.format("YYYY-MM-DD"); - date dashed format
                
                var dateFormated = date.format("YYYY-MM-DD");
                var timeFormated = date.format("HH:mm");
                
                modal.find($('#selected-date').text(dateFormated+' '+timeFormated));
                modal.find($('#post-date').val(dateFormated));
                modal.find($('#post-time').val(timeFormated));
                modal.show();
            }
        },

        eventClick: function(booking, jsEvent, view) {

            console.log(booking);

            var modal = UIkit.modal("#view-booking");

            if ( modal.isActive() ) {
                modal.hide();
            } else {
                modal.find($('#booking-title').text(booking.title));
                modal.find($('#booking-doctor').text("to see Doctor."+booking.doctor));
                modal.find($('#booking-details').text('Purpose of appointment: '+booking.details));
                modal.find($('#booking-date').text("Date "+booking.date));
                modal.find($('#booking-start').text(booking.start));
                modal.find($('#booking-end').text(booking.end));
                modal.show();
            }

        },

        /*

        dayClick: function(date, jsEvent, view) {

        alert('Clicked on: ' + date.format());

        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

        alert('Current view: ' + view.name);

        // change the day's background color just for fun
        $(this).css('background-color', 'red');

        },

        eventClick: function(calEvent, jsEvent, view) {

        alert('Event: ' + calEvent.title);
        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
        alert('View: ' + view.name);

        // change the border color just for fun
        $(this).css('border-color', 'red');

        },

        eventMouseover: function(calEvent,jsEvent,view){
            alert('Event ' + calEvent.title);
            alert('Event ' + calEvent.treatment);
            alert('Event ' + calEvent.doctor);
        }

        */
    });
});