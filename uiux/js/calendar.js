/*
 * Implementation of FULLCALENDER.js plugin 
 * Based on FullCalendar v2.3.2
 * http://fullcalendar.io/
 * 
 */

$(function(){
    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({

            //callback when user resizes a booking to change time
            eventResize: function(event, delta, revertFunc) {
                alert("Appointment "+event.title + " end is now " + event.end.format("YYYY-MM-DD @ HH:mm")+" Hrs");

                var data = {
                            'date': event.start.format("YYYY-MM-DD"),
                            'doctor': event.doctor,
                            'title': event.title,
                            'id': event.id,
                            'clinicID': event.clinicID,
                            'start': event.start.format(),
                            'end': event.end.format(),
                            'details': event.details
                        }

            if (!confirm("is this okay?")) {
                revertFunc();
            }else{
                $.ajax({
                    type: "POST",
                    url: "http://localhost/kaizen/KaizenMed/booking/update/web/",
                    data:data,
                success: function(data){
                    console.log(data);
                },
                crossDomain: true,
                error: function(error){
                    console.log(error);
                }
            });
            }

        },

        //callback when user drops a booking on a certain date
        eventDrop: function( event, delta, revertFunc, jsEvent, ui, view ){ 
            alert("Appointment "+event.title + " was dropped on " + event.start.format("YYYY-MM-DD @ HH:mm")+" Hrs");

                var data = {
                    'date': event.start.format("YYYY-MM-DD"),
                    'doctor': event.doctor,
                    'title': event.title,
                    'id': event.id,
                    'clinicID': event.clinicID,
                    'start': event.start.format(),
                    'end': event.end.format(),
                    'details': event.details
                }

            if (!confirm("Are you sure about this change?")) {
                revertFunc();
            }else{
                $.ajax({
                    type: "POST",
                    url: "http://localhost/kaizen/KaizenMed/booking/update/web/",
                    data:data,
                success: function(data){
                    console.log(data);
                },
                crossDomain: true,
                error: function(error){
                    console.log(error);
                }
            });
            }
        },

        //enable i limit to the bookings viewable in all non-agenda views
        eventLimit: true,

        //limit to only show 4 bookings per day for month view 
        views: {
            month: {
                eventLimit: 4 
            }
        },

        eventLimitClick: "week",

        editable: true,

        theme: false,

        //URL end point / KaizenMed API to read bookings in JSON format
        //for display on the calendar
        events: 'http://localhost/kaizen/KaizenMed/booking/read/web/',

        //what to show in the header above the calendar
        header:{
            left:   'prevYear,nextYear',
            center: 'title,today',
            right:  'prev,next,month,agendaWeek,agendaDay'
        },

        //event trigger when a day is clicked on the calendar
        //moves from month view into agenda view for that particular day
        dayClick: function(date, jsEvent, view){
            //if a user clicks on a day change view to agendaWeek View
            if(view.name == 'month'){
                $('#calendar').fullCalendar('changeView', 'agendaDay');
                $('#calendar').fullCalendar('gotoDate',date.format());
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

                modal.find($("#post-date2").val(dateFormated));
                modal.find($("#post-time2").val(timeFormated));
                            
                modal.show();
            }
        },

        //event trigger when a booking is clicked on the calendar
        //shows a pop-up modal dialog with booking detais
        eventClick: function(booking, jsEvent, view) {

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
    });
});