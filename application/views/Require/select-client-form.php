<?php
echo form_open('auth','class="uk-form"');
echo '<div class="uk-form-row">';
echo form_label('Type in clients name', 'clientName');
echo "<br/>";
echo '<div aria-expanded="false" aria-haspopup="true" class="uk-button-dropdown">';
echo form_input('clientName','','class="uk-form-large" id="search-box" placeholder="name or surname"');
echo form_error('username', '<div class="error">', '</div>');
echo '<div id="suggestion-box" class="uk-dropdown"></div></div>';
echo '</div>';
echo "<br/>";
echo '<div class="uk-form-row">';
echo form_submit('submit', 'Book Client','class="uk-button"');
echo '</div>';
echo form_close('');
?>