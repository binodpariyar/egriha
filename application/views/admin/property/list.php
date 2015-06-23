<<<<<<< HEAD


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
			<th>Verify</th>
			<th>Sold Out</th>
			<th>Status</th>
			<th>Options</th>
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
				<input <?php echo ($row->verify == 1) ? 'checked' : '' ?> onchange="change_offer(this)"  type="checkbox" name="options" value='<?php echo $row->id ?>'>
			</td>
			<td>
				<?php if($row->status == 0) { ?>
				<a title="Click To sale" href="<?php echo admin_url('list_your/approve/'.$row->id) ?>" class="btn btn-xs btn-info">
					Click to sale
				</a>
				<?php }else { ?>
				<div class="btn btn-danger btn-xs">Sold Out</div>
				<?php } ?>
			</td>
			<td>
				<?php if($row->status == 0) { ?>
				<a title="Click To Approve" href="<?php echo admin_url('list_your/approve/'.$row->id) ?>" class="btn btn-xs btn-warning">
					Click To Approve
				</a>
				<?php }else { ?>
				<div class="btn btn-success btn-xs">Approved</div>
				<?php } ?>
			</td>
			<td>
<!-- 				 <a href="<?php echo admin_url('list_your/edit/'.$row->id) ?>" class="btn btn-xs btn-primary">
					Edit <span class="glyphicon glyphicon-edit"></span>
				</a> -->
				<a onclick="return confirm('Are you sure')" href="<?php echo admin_url('list_your/delete/'.$row->id) ?>" class="btn btn-xs btn-danger">
					Delete <span class="glyphicon glyphicon-remove"></span>
				</a> 
			</td>
			
		</tr>
		<?php } ?>

	</tbody>
</table>

<script>
	
	function change_offer(obj){
	$.ajax({
		url: admin_url+'list_your/change_verify',
		data:{'id':obj.value,'value':$(obj).prop('checked')},
		type:'post',
		success:function(){
			// window.location.reload();
		}
	});
}

=======


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
			<th>Verify</th>
			<th>Sold Out</th>
			<th>Status</th>
			<th>Options</th>
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
				<input <?php echo ($row->verify == 1) ? 'checked' : '' ?> onchange="change_offer(this)"  type="checkbox" name="options" value='<?php echo $row->id ?>'>
			</td>
			<td>
				<?php if($row->status == 0) { ?>
				<a title="Click To sale" href="<?php echo admin_url('list_your/approve/'.$row->id) ?>" class="btn btn-xs btn-info">
					Click to sale
				</a>
				<?php }else { ?>
				<div class="btn btn-danger btn-xs">Sold Out</div>
				<?php } ?>
			</td>
			<td>
				<?php if($row->status == 0) { ?>
				<a title="Click To Approve" href="<?php echo admin_url('list_your/approve/'.$row->id) ?>" class="btn btn-xs btn-warning">
					Click To Approve
				</a>
				<?php }else { ?>
				<div class="btn btn-success btn-xs">Approved</div>
				<?php } ?>
			</td>
			<td>
<!-- 				 <a href="<?php echo admin_url('list_your/edit/'.$row->id) ?>" class="btn btn-xs btn-primary">
					Edit <span class="glyphicon glyphicon-edit"></span>
				</a> -->
				<a onclick="return confirm('Are you sure')" href="<?php echo admin_url('list_your/delete/'.$row->id) ?>" class="btn btn-xs btn-danger">
					Delete <span class="glyphicon glyphicon-remove"></span>
				</a> 
			</td>
			
		</tr>
		<?php } ?>

	</tbody>
</table>

<script>
	
	function change_offer(obj){
	$.ajax({
		url: admin_url+'list_your/change_verify',
		data:{'id':obj.value,'value':$(obj).prop('checked')},
		type:'post',
		success:function(){
			// window.location.reload();
		}
	});
}

>>>>>>> cba332da7c5b3e069bcb1525a7974f4bf1fed1c5
</script>