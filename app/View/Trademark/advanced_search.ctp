<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Advanced Search'); ?></legend>
        <?php echo $this->Form->input('Type in keyword here');
        echo $this->Form->input('Type in wares/services here');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Search')); ?>
