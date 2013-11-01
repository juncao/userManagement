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
<h1>User Profile</h1>
<table>
<tr>
<th>User Id</th>
<th>User Role</th>
<th>Applicant Name</th>
<th>Company Name</th>
<th>Actions</th>
</tr>
<!-- Here is where we loop through our $users array, printing out user info -->
<?php foreach ($users as $user): ?>
<tr>
<td>
    <?php echo $user['User']['id']; ?>
</td>
<td>
    <?php  echo $user['User']['role']; ?>
</td>
<td>
    <?php echo $user['User']['first_name']; ?>
</td>
</td>
<td>
    <?php echo $user['User']['company_name']; ?>
</td>
<td>
    <?php echo $this->Html->link('Details',
    array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        &nbsp;
    <?php echo $this->Html->link('Edit', array('action' => 'admin_edit', $user['User']['id']));?>
</td>
</tr>
<?php endforeach; ?>
<?php unset($user); ?>
<td>
    <?php echo $this->Html->link(
    'Add User',
    array('controller' => 'users', 'action' => 'add')
    ); ?>
</td>
<td>
    <?php
    echo $this->Paginator->numbers(array('first' => 'First page'));
    ?>
</td>


</table>