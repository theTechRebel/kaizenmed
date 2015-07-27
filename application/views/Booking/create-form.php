<h3 align="center">Create New Booking</h3>
<?php
echo form_open('booking/create/web/','class="uk-form"');
echo "<hr/>Client Details:<br/>";
echo $client;
echo "<br/><br/>";
echo "Booking for Date & Time:<br/>";
echo $date.' '.$time;
echo "<hr/><br/>";
echo form_hidden('client',$client);
echo '<div class="uk-form-row">';
echo form_label('Select the Doctor.', 'username');
echo "<br/>";
$dropDownOptions = array();
foreach ($doctors->result() as $row){
    $dropDownOptions[$row->name.' '.$row->surname] = $row->name.' '.$row->surname;

}
echo form_dropdown('doctor', $dropDownOptions,'class="uk-form-large"');
echo form_error('doctor', '<div class="error">', '</div>');
echo '</div>';
echo '<div class="uk-form-row">';
echo  "The appointment begins at: ".$time;
echo "<br/>";
echo form_label('Enter appointment end time.', 'duration');
echo "<br/>";

$date = new DateTime((string)$time);
$dropDownOptions = array(''=>'');

for ($i=0; $i < 10; $i++){ 
	$date->add(new DateInterval('PT0H15M'));
	$dropDownOptions[$date->format('H:i')] = $date->format('H:i');
}

echo form_dropdown('end', $dropDownOptions,'class="uk-form-large"');
echo form_error('duration', '<div class="error">', '</div>');
echo '</div>';
echo '<div class="uk-form-row">';
echo form_label('Enter appointment details', 'details');
echo "<br/>";
echo form_textarea('details','','class="uk-form-large"');
echo form_error('details', '<div class="error">', '</div>');
echo '</div>';
echo '<div class="uk-form-row">';
echo form_submit('submit', 'Create Appointment','class="uk-button"');
echo '</div>';
echo form_close('');
?>
<br/>