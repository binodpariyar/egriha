<a href="<?php echo admin_url('client_management/add_project/'.$id) ?>" class="btn btn-primary">Add A Project</a>

<table class="table table-striped" id='client_management'>
	<thead>
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Location</th>
			<th>Owner</th>
			<th>Option</th>
		</tr>
	</thead>

	<tbody>

		<?php foreach ($list as $row ) { ?>
		<tr>
			<td><?php echo $row->id;?></td>
			<td><?php echo $row->title; ?></td>
			<td><?php echo $row->location; ?></td>
			<td><?php echo $row->owner; ?></td>			
			<td>
				<a href="<?php echo admin_url('client_management/show/'.$row->id) ?>" class="btn btn-xs btn-success">
					Milestone <span class="glyphicon glyphicon-plus"></span>
				</a>
				<a href="<?php echo admin_url('client_management/edit_project/'.$row->id) ?>" class="btn btn-xs btn-primary">
					Edit <span class="glyphicon glyphicon-edit"></span>
				</a>
				<a onclick="return confirm_delete()" href="<?php echo admin_url('client_management/delete_project/'.$row->id) ?>" class="btn btn-xs btn-danger">
					Delete <span class="glyphicon glyphicon-remove"></span>
				</a>
			</td>
		</tr>
		<?php } ?>

	</tbody>
</table>
