<?php
/**
 * Hour dropdown Html
 * @var $hourId = $ia[1];
 * @var $currenthour
 */
?>
<label for="hour<?php echo $hourId; ?>" class="hide">
    <?php eT('Hour'); ?>
</label>

<select id="hour<?php echo $hourId; ?>" name="hour<?php echo $hourId; ?>" class="hour form-control">
    <option value=""><?php eT('Hour'); ?></option>
    <?php for ($i=0; $i<24; $i++): ?>
        <option value="<?php echo $i; ?>" <?php if ($i === (int)$currenthour && is_numeric($currenthour)):?>SELECTED<?php endif;?>>
            <?php if ($datepart=='H'):?>
                <?php echo sprintf('%02d', $i); ?>
            <?php else:?>
                <?php echo $i;?>
            <?php endif;?>
        </option>
    <?php endfor;?>
</select>
