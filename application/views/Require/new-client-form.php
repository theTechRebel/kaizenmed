<?php
$data = array(
	    	0 => array(
	    					'type'  => 'hidden',
					    	'name'  => 'date',
					    	'id'    => 'post-date',
					    	'value' => ''
	    					),
		    1 => array(
	    					'type'  => 'hidden',
					    	'name'  => 'time',
					    	'id'    => 'post-time',
					    	'value' => ''	    	
		    	)
);

echo form_open('calendar/pass_booking_details/','class="uk-form"');
echo form_input($data[0]);
echo form_input($data[1]);
echo form_submit('submit', 'Add Client','class="uk-button"');
echo form_close('');

?>


