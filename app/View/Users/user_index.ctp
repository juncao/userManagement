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
<h1><?php echo h($user['User']['username']); ?></h1>
<p><small>Applicant Name: <?php echo $user['User']['first_name']; echo ' ' ;echo $user['User']['last_name']; ?></small></p>
<p><small>Company Name: <?php echo $user['User']['company_name']; ?></small></p>
<p><small>E-mail: <?php echo $user['User']['e_mail']; ?></small></p>
<p><small>Primary Phone: <?php echo $user['User']['primary_phone']; ?></small></p>
<p><small>Secondary Phone: <?php echo $user['User']['secondary_phone']; ?></small></p>
<p><small>Company Name: <?php echo $user['Address']['id']; ?></small></p>
<p><small>City: <?php echo $user['Address']['city']; ?></small></p>
<p><small>Province: <?php echo $user['Address']['province']; ?></small></p>
<p><small>Country: <?php echo $user['Address']['country']; ?></small></p>
