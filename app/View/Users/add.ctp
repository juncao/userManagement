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
 */
?>
<h1>Add User</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->input('User.first_name');
echo $this->Form->input('User.last_name');
echo $this->Form->input('User.company_name');
echo $this->Form->input('User.e_mail');
echo $this->Form->input('User.primary_phone');
echo $this->Form->input('User.secondary_phone');
echo $this->Form->input('Address.city');
echo $this->Form->input('Address.province');
echo $this->Form->input('Address.country');
echo $this->Form->end('Save User');
?>