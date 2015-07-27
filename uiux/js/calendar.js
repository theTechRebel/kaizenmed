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

                console.log(dateFormated);
                console.log(timeFormated);
                
                modal.find($('#selected-date').text(dateFormated+' '+timeFormated));
                modal.find($('#post-date').val(dateFormated));
                modal.find($('#post-time').val(timeFormated));
                modal.show();
            }
        },

        eventClick: function(booking, jsEvent, view) {

            var modal = UIkit.modal("#view-booking");

            if ( modal.isActive() ) {
                modal.hide();
            } else {
                modal.find($('#booking-title').text(booking.title));
                modal.find($('#booking-doctor').text(booking.doctor));
                modal.find($('#booking-treatment').text(booking.treatment));
                modal.find($('#booking-time').text(booking.time));
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