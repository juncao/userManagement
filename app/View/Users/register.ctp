<?php
/**
 * Automated Trademark Registration Management System
 *
 * Copyright 2013, Team Barbarian
 *		   {Cao, Jun
 *		    Cheng, yue 
 *		    Jewis, Adam 
 *		    Saifullah, Mohammad 
 *		    Ding, SuFeng 
 *		    Guo, Desen }
 *                 Algonquin College - 1385 Woodroffe Avenue
 *		   Ottawa, Ontario, Canada. K2G 1V8.
 *
 * Redistributions of files must retain the above copyright notice.
 *
 * @Copyright 2013, Team Barbarian  
 * @Author Jun Cao
 */
?>
<?php

echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password', array('label' => 'Password', 'type' => 'password'));
echo $this->Form->input('temppassword', array('label' => 'Confirm password', 'type' => 'password'));
echo $this->Form->input('first_name');
echo $this->Form->input('last_name');
echo $this->Form->input('company_name');
echo $this->Form->input('e_mail');
echo $this->Form->input('primary_phone', array( 'type' => 'phone'));
echo $this->Form->input('secondary_phone');
echo $this->Form->end('Register');