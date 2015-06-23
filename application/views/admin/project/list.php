<a href="<?php echo admin_url('project/add') ?>" class="btn btn-primary">Add A project</a>

<table class="table table-striped" id='project'>
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
				<a href="<?php echo admin_url('project/edit/'.$row->id) ?>" class="btn btn-xs btn-primary">
					Edit <span class="glyphicon glyphicon-edit"></span>
				</a>
				<a onclick="return confirm_delete()" href="<?php echo admin_url('project/delete/'.$row->id) ?>" class="btn btn-xs btn-danger">
					Delete <span class="glyphicon glyphicon-remove"></span>
				</a>
			</td>
		</tr>
		<?php } ?>

	</tbody>
</table>
