<a href="<?php echo admin_url('client_management/add_milestone/'.$id) ?>" class="btn btn-primary">Add new Milstone</a>

<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Status</th>
			<th>Option</th>
		</tr>
	</thead>

	<tbody>

		<?php foreach ($list as $row ) { ?>
		<tr>
			<td><?php echo $row->id;?></td>
			<td><?php echo $row->name; ?></td>
			<td><?php echo ($row->status == 1) ? 'Completed' : 'Pending'; ?></td>
			<td>
				<img width="150px" class="img-thumbnail" src="<?php echo base_url().'uploads/milestone_images/'.$row->image ?>">
				<img width="150px" class="img-thumbnail" src="<?php echo base_url().'uploads/milestone_images/'.$row->image_1 ?>">
				<img width="150px" class="img-thumbnail" src="<?php echo base_url().'uploads/milestone_images/'.$row->image_2 ?>">
			</td>
			<td>
				<a href="<?php echo admin_url('client_management/edit_milestone/'.$row->id) ?>" class="btn btn-xs btn-primary">
					Edit <span class="glyphicon glyphicon-edit"></span>
				</a>
				<a onclick="return confirm_delete()" href="<?php echo admin_url('client_management/delete_milestone/'.$row->id) ?>" class="btn btn-xs btn-danger">
					Delete <span class="glyphicon glyphicon-remove"></span>
				</a>
			</td>
		</tr>
		<?php } ?>

	</tbody>
</table>