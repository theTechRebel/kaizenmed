<?php
$data = array(
	    	0 => array(
	    					'type'  => 'hidden',
					    	'name'  => 'date',
					    	'id'    => 'post-date2',
					    	'value' => ''
	    					),
		    1 => array(
	    					'type'  => 'hidden',
					    	'name'  => 'time',
					    	'id'    => 'post-time2',
					    	'value' => ''	    	
		    	),
		    2 => array(
		    		   'type' => 'hidden',
		    		   'name' => 'clinicID',
		    		   'id'   => 'clinic-id',
		    		   'value'=> '' 
		    	),
		    3 => array(
		    		   'type' => 'text',
		    		   'name' => 'name', 
		    		   'id'   => 'search-box',
		    		   'placeholder' => 'name or surname',
		    		   'value' => ''
		    	 )
);
echo form_open('calendar/pass_booking_details/','class="uk-form"');
echo '<div class="uk-form-row">';
echo form_label('Type in clients name', 'clientName');
echo "<br/>";
echo '<div aria-expanded="false" aria-haspopup="true" class="uk-button-dropdown">';
echo form_input($data[0]);
echo form_input($data[1]);
echo form_input($data[2]);
echo form_input($data[3]);
echo form_error('name', '<div class="error">', '</div>');
echo '<div id="suggestion-box" class="uk-dropdown"></div></div>';
echo '</div>';
echo "<br/>";
echo '<div class="uk-form-row">';
echo form_submit('submit', 'Book Client','class="uk-button"');
echo '</div>';
echo form_close('');
?>