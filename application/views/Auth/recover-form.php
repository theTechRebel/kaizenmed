<h3>Recover Password.</h3>

<?php
echo form_open('auth/recover','class="uk-form"');
echo '<div class="uk-form-row">';
echo form_label('Enter Your Username', 'username');
echo "<br/>";
echo form_input('username','','class="uk-form-large"');
echo form_error('username','<div class="error">', '</div>');
echo '</div>';
echo "<br/>";
echo form_submit('recover','Recover my Password','class="uk-button"');
echo form_close('');
?>

<br/>
<div class="errors"><?php if(isset($error)){echo $error;}?></font></div>

<div><a href="<?php echo base_url('auth')?>">Go back to Login</a></div>