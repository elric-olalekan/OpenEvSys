<div id="MGA" class="auth-method-form control-group" style="display:none;">
    
    <?php if ($currentMethod == "MGA") { ?>
        <p class="text-info"> Google Authenticator is currently enabled for your account. </p>
    <?php } else { ?>
        <div class="control-group">
            <p class="fwB"> Install the Google Authenticator app for your phone </p>
            <ol class="ol p10">
                <li> On your phone, open a web browser. </li>
                <li> Go to <span class="fwB">m.google.com/authenticator</span>. </li>
                <li> Download and install the Google Authenticator application. </li>
            </ol>
            <p class="fwB"> Now open and configure Google Authenticator. </p>
            <p> Scan following Barcode to register the application automaticaly: <p>
            <div class="taC p10 control-group">
                <img src="<?php echo $url ?>" width="100" height="100" />
            </div>
            <p> Or use the following secret key to register the application manually:</p>
            <div class="alert alert-info">
                <div><b><?php echo $secret ?></b></div>
            </div>
            <p> Once you manually entered and saved your key, enter the 6-digit verification code generated by the Authenticator app. </p>
        </div>
        
        <div class='control-group <?php if ($wrongcode) { echo ' error'; } ?>'> 
            <label  class="control-label" for="code"><?php echo _t('Code') ?></label>

            <div class="controls">
                <input  type="text" name="code"  value=""   class='input-large <?php if ($wrongcode) { echo ' error'; } ?>'  />
                <div class="help-inline">
                    <span class="label label-important"><?php echo _t('IS_REQUIRED') ?></span>  
                    <?php if ($wrongcode) { ?> 
                        <span class="help-inline">The code is incorrect. Try again</span>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>