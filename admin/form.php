<div class="text-center text-2xl" x-data>
    <?= phpb_e('Success!') ?>
</div>

<div class="">
    <?php
    foreach (\Plugi\Extensions::getSettings('form') as $setting):
        ?>
        <?php
        if ($setting['type'] === 'text'):
            ?>
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text"><?= phpb_e($setting['label'] ?: $setting['name']) ?></span>
                </label>
                <input type="text" name="<?= phpb_e($setting['key']) ?>" value="<?= phpb_e($setting['value']) ?>" class="input input-bordered w-full" />
            </div>
        <?php
        endif;
        ?>
        <?php
        if ($setting['type'] === 'toggle'):
            ?>
            <div class="form-control" x-data="{state: <?= phpb_e($setting['value']) ?>}">
                <label class="label cursor-pointer">
                    <span class="label-text"><?= phpb_e($setting['label'] ?: $setting['name']) ?></span>
                    <input type='hidden' :value="state" name="<?= phpb_e($setting['key']) ?>">
                    <input type="checkbox" class="toggle" x-model="state"   />
                </label>
            </div>
        <?php
        endif;
        ?>
    <?php
    endforeach;
    ?>
</div>

