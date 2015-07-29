<div class="footer">
    <div class="uk-container uk-container-center uk-text-center">

        <!--
        <ul class="uk-subnav uk-subnav-line uk-flex-center">
            <li><a href="http://github.com/uikit/uikit">GitHub</a></li>
            <li><a href="http://github.com/uikit/uikit/issues">Issues</a></li>
            <li><a href="http://github.com/uikit/uikit/blob/master/CHANGELOG.md">Changelog</a></li>
            <li><a href="https://twitter.com/getuikit">Twitter</a></li>
        </ul>
        -->

        <div class="uk-panel">
            <p>Engineered with &heartsuit; by <a href="http://www.afrikaizen.co.zw">AfriKaizen Inc.</a></p>
        </div>

    </div>
</div>

<!-- This is the add booking modal -->
<div id="add-booking" class="uk-modal">
    <div class="uk-modal-dialog" align="center">
        <a class="uk-modal-close uk-close"></a>
        <div id="selected-date"></div>
        <div class="uk-grid">
            <div class="uk-width-medium-1-2">
                <div class="uk-panel uk-panel-hover">
                    <h3 class="uk-panel-title"><i class="uk-icon-user"></i> Existing client.</h3>
                    <?php require_once('select-client-form.php');?>
                </div>
            </div>
            <div class="uk-width-medium-1-2">
                <div class="uk-panel uk-panel-hover">
                    <h3 class="uk-panel-title"><i class="uk-icon-user"></i> New client.</h3>
                    <?php require_once('new-client-form.php');?>
                </div>
            </div>
        </div>
        
    </div>
</div>

<!-- This is the view booking modal -->
<div id="view-booking" class="uk-modal">
    <div class="uk-modal-dialog" align="center">
        <a class="uk-modal-close uk-close"></a>
        <div id="booking-title"></div>
        <div id="booking-doctor"></div>
        <div id="booking-details"></div>
        <div id="booking-date"></div>
        <div id="booking-start"></div>
        <div id="booking-end"></div>
    </div>
</div>