<div id="main_secondary">

	<div class="progress" >
		

		<ul class="house-collections" id="house-slider">

			<li>
				<img src="<?php echo base_url('uploads/milestone_images/'.$list->image); ?>" alt="">
			</li>

			<li>
				<img src="<?php echo base_url('uploads/milestone_images/'.$list->image_1); ?>" alt="">
			</li>

			<li>
				<img src="<?php echo base_url('uploads/milestone_images/'.$list->image_2); ?>" alt="">
			</li>

		</ul>	


		<p>
			<?php echo $list->description; ?>
		</p>

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