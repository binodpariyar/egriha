

<table class="table table-striped" id='project'>
	<thead>
		<tr>
			<th>#</th>
			<!-- <th>Type</th> -->
			<th>User</th>
			<th>Location</th>
			<th>For</th>
			<th>Type</th>
			<th>Image 1</th>
			<th>Image 2</th>
			<th>Image 3</th>
			<th>Status</th>
			<!-- <th>Option</th> -->
		</tr>
	</thead>

	<tbody>

		<?php foreach ($list as $row ) { ?>
		<tr>
			<td><?php echo $row->id;?></td>
			<!-- <td><?php echo $row->title; ?></td> -->
			<td><?php echo $this->db->where('id',$row->user_id)->get('users')->row()->first_name; ?></td>
			<td><?php echo $row->location; ?></td>		
			<td><?php echo get_for_type($row->for); ?></td>		
			<td><?php echo get_property_type($row->type); ?></td>		
			<td><img width="100px" class="img-thumbnail" src="<?php echo base_url('uploads/list/'.$row->image_1); ?>" alt=""></td>	
			<td><img width="100px" class="img-thumbnail" src="<?php echo base_url('uploads/list/'.$row->image_2); ?>" alt=""></td>	
			<td><img width="100px" class="img-thumbnail" src="<?php echo base_url('uploads/list/'.$row->image_3); ?>" alt=""></td>	
			<td>
				<?php if($row->status == 0) { ?>
				<a title="Click To Approve" href="<?php echo admin_url('list_your/approve/'.$row->id) ?>" class="btn btn-xs btn-warning">
					Click To Approve
				</a>
				<?php }else { ?>
				<div class="btn btn-success btn-xs">Approved</div>
				<?php } ?>
			</td>
			<!--
			<td>
				 <a href="<?php echo admin_url('project/edit/'.$row->id) ?>" class="btn btn-xs btn-primary">
					View <span class="glyphicon glyphicon-edit"></span>
				</a> -->
				<!-- <a href="<?php echo admin_url('list_your/edit/'.$row->id) ?>" class="btn btn-xs btn-primary">
					Edit <span class="glyphicon glyphicon-edit"></span>
				</a>
				<a onclick="return confirm_delete()" href="<?php echo admin_url('list_your/delete/'.$row->id) ?>" class="btn btn-xs btn-danger">
					Delete <span class="glyphicon glyphicon-remove"></span>
				</a> 
			</td>
			-->
		</tr>
		<?php } ?>

	</tbody>
</table>
