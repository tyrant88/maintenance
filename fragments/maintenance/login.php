<?php
if(rex_config::get('maintenance', 'authentification_mode', '') === 'password') { ?>
<div class="maintenance-login">
    <form action="<?= rex_url::base(); ?>" method="post">
    <label for="maintenance_secret">Access-Code</label>
    <input name="maintenance_secret" class="maintenance-pw-input" type="password" placeholder=""/>
    <button type="submit" class="maintenance-pw-btn">Login</button>
    </form>
</div>
<?php } ?>
