<h3>Enter your Username to recover your password.</h3>

<?php
echo form_open('auth/recover');
echo form_label('Enter Your Username', 'username');
echo form_input('username');
echo form_error('username');
echo "<br/>";
echo form_submit('recover','Recover my Password');
echo form_close('');
?>

<div class="errors"><?php if(isset($error)){echo $error;}?></font></div>

<div><a href="<?php echo base_url('auth')?>">Go back to Login</a></div>