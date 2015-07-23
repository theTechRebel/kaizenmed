<h3>Login to e-Clinic</h3>

<?php
    echo form_open('auth');
    echo form_label('Enter Your Username', 'username');
    echo form_input('username');
    echo form_error('username', '<div class="error">', '</div>');
    echo "<br/>";
    echo form_label('Enter your Password', 'password');
    echo form_password('password');
    echo form_error('password', '<div class="error">', '</div>');
    echo "<br/>";
    echo form_submit('submit', 'Login');
    echo form_close('');
?>

<div class=""><a href="<?php echo base_url('auth/recover');?>">Forgot your password? Click here to recover it.</a></div>

<div class="errors"><?php if(isset($error)){echo $error;}?></div>
