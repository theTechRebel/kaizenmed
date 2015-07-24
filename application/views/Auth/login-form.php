<h3 align="center">Login to e-Clinic</h3>
<?php
echo form_open('auth','class="uk-form"');
echo '<div class="uk-form-row">';
echo form_label('Enter Your Username', 'username');
echo "<br/>";
echo form_input('username','','class="uk-form-large"');
echo form_error('username', '<div class="error">', '</div>');
echo '</div>';
echo "<br/>";
echo '<div class="uk-form-row">';
echo form_label('Enter your Password', 'password');
echo "<br/>";
echo form_password('password','','class="uk-form-large"');
echo form_error('password', '<div class="error">', '</div>');
echo '</div>';
echo "<br/>";
echo '<div class="uk-form-row">';
echo form_submit('submit', 'Login','class="uk-button"');
echo '</div>';
echo form_close('');
?>

<br/>
<div class=""><a href="<?php echo base_url('auth/recover');?>">Forgot your password? Click here to recover it.</a></div>

<div class="errors"><?php if(isset($error)){echo $error;}?></div>
