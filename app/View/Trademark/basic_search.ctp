<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Basic Search'); ?></legend>
        <?php echo $this->Form->input('Type in keyword here');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Search')); ?>
