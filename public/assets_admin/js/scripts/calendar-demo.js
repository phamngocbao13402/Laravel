

$(document).ready(function() {


    /* initialize the external events
    -----------------------------------------------------------------*/

    $('#external-events .ex-event').each(function() {

        // store data so the calendar knows to render an event upon drop
        $(this).data('event', {
            title: $.trim($(this).text()), // use the element's text as the event title
            stick: true, // maintain when user navigates (see docs on the renderEvent method)
            className: $(this).attr('data-class')
        });

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });

    });

    
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        defaultDate: '2022-08-17',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar
        eventLimit: true, // allow "more" link when too many events
        events: [
            {
                title: 'Sự kiện cả ngày',
                start: '2022-08-12',
                backgroundColor: '#e74c3c'
            },
            {
                title: 'Sự kiện dài',
                start: '2022-08-17',
                end: '2022-08-17',
                backgroundColor: '#2ecc71'
            },
            {
                title: 'Hội nghị',
                start: '2022-08-18',
                end: '2022-08-19',
                backgroundColor: '#23B7E5'
            },
            {
                title: 'Họp',
                start: '2022-08-11T08:30:00',
                end: '2022-08-11T12:30:00'
            },
            {
                title: 'Ăn tối',
                start: '2022-08-1T20:00:00'
            },
            {
                title: 'Tiệc sinh nhật',
                start: '2022-08-13T07:00:00',
                backgroundColor: '#F39C12'
            },
            {
                title: 'Google',
                url: 'http://google.com/',
                start: '2022-08-28'
            }
        ],
        drop: function() {
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }
        }
    });
    
});
