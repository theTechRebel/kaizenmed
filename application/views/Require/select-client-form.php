<?php
echo form_open('auth','class="uk-form"');
echo '<div class="uk-form-row">';
echo form_label('Type in clients name', 'clientName');
echo "<br/>";
echo form_input('clientName','','class="uk-form-large"');
echo form_error('username', '<div class="error">', '</div>');
echo '</div>';
echo "<br/>";
echo '<div class="uk-form-row">';
echo form_submit('submit', 'Book Client','class="uk-button"');
echo '</div>';
echo form_close('');
?>