<div class="">
    <?php

    foreach (\Plugi\Extensions::getSettings('form') as $setting) {
        phpb_render_setting($setting);
    }
    ?>
</div>
