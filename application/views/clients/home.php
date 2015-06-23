<div id="main_secondary">

	<div class="progress">

		<?php foreach($list as $row) { ?>
		
		<div class="entry-selling-client">
			<div class="entry_body_client_two">
				<img src="<?php echo base_url().'uploads/milestone_images/'.$row->image_1 ?>" alt="" />
				<h3><?php echo $row->title ?></h3>
				<p><?php echo $row->description ?></p>
				<div class="entry_body_spec_client_two">
					<h3>Tasks</h3>
					<ul>
						<?php $milestones = $this->db->where('project_id',$row->id)->get('tbl_milestone_client')->result(); ?>
						<?php if(count($milestones) > 0) { ?>
						<?php foreach ($milestones as $milestone) { ?>	
						<li><a href="<?php echo site_url('clients/home/milestone/'.$milestone->id) ?>"><?php echo $milestone->name; ?></a> (<?php echo ($milestone->status == 0) ? 'Pending' : 'Completed'; ?>) </li>					
						<?php } ?>
						<?php } else { ?>
						<li>No Task Found</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>

		<?php } ?>

	</div>

	<div class="client_detail">
		<div class="entry_body_client">
			<h3>Client Detail</h3>

			<img src="<?php echo base_url().'uploads/milestone_images/'.$detail->image ?>" alt="" />
			<div class="entry_body_spec_client">

				<ul>
					<li><?php echo $detail->name ?></li>
					<li><?php echo $detail->address ?></li>
					<li><?php echo $detail->phone ?></li>
				</ul>

			</div>

			<div class="entry_body_spec_client">

				<ul>
					<li><a href="<?php echo site_url('clients/home/logout') ?>">Logout</a></li>
				</ul>

			</div>

		</div>
	</div>

</div>