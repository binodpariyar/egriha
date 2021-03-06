<a href="<?php echo admin_url('user_management/add') ?>" class="btn btn-primary">Add new User</a>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Option</th>

		</tr>
	</thead>

	<tbody>

		<?php foreach ($list as $row ) { ?>
		<tr>
			<td><?php echo $row->id;?></td>
			<td><?php echo $row->name; ?></td>
			<td><?php echo $row->username ?></td>
			<td><?php echo $row->email ?></td>
			<td>
				<a href="<?php echo admin_url('user_management/edit/'.$row->id) ?>" class="btn btn-xs btn-primary">
					Edit <span class="glyphicon glyphicon-edit"></span>
				</a>
				<a onclick="return confirm_delete()" href="<?php echo admin_url('user_management/delete/'.$row->id) ?>" class="btn btn-xs btn-danger">
					Delete <span class="glyphicon glyphicon-remove"></span>
				</a>
			</td>
		</tr>
		<?php } ?>

	</tbody>
</table>