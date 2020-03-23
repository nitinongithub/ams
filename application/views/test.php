<?php

print_r ($session);

?>
<table border="0">
<tr style="background:#ffff00">
	<th>Users</th>
	<th>User Status</th>
</tr>
<tr>
	<td>
		<table border="1" width="300">
			<tr>
				<th>USERNAME</th>
				<th>session</th>
			</tr>
			<?php foreach($session as $item){?>
				<tr>
					<td><?php echo $item->username; ?></td>
					<td><?php echo $item->session_created;?></td>
				</tr>
			<?php } ?>
		</table>
	</td>
	<td>
		<table border="1" width="300">
			<tr>
				<th>STATUS</th>
				<th>ACTIVE</th>
			</tr>
			<?php foreach($user_status as $item){?>
				<tr>
					<td><?php echo $item->STATUS; ?></td>
					<td><?php echo $item->ACTIVE;?></td>
				</tr>
			<?php } ?>
		</table>
	</td>
</tr>
</table>
<form name="frm" method="post" action="<?php echo site_url('web/submitUsers');?>">
	<input type="text" name="txtUsrStatus">
	<br>
	<input type="submit" value="Create User Status" >
</form>