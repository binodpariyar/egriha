<div id="main_secondary">

	<ul class="house_pic" id="selling">

		<li>
			<a href="<?php echo base_url('description'); ?>">
				<img src="<?php echo base_url('front_assets/images/engineeringthree.jpg'); ?>">
				<span>Commerial house</span>				
				<span>Lazimpat Kathmandu</span>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url('description'); ?>">
				<img src="<?php echo base_url('front_assets/images/sellthree.jpg'); ?>">
				<span>Commerial house</span>
				<span>Lazimpat Kathmandu</span>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url('description'); ?>">
				<img src="<?php echo base_url('front_assets/images/civilhome.jpg'); ?>">
				<span>Civil Home</span>
				<span>Lazimpat Kathmandu</span>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url('description'); ?>">
				<img src="<?php echo base_url('front_assets/images/engineeringthree.jpg'); ?>">
				<span>Commerial house</span>
				<span>Lazimpat Kathmandu</span>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url('description'); ?>">
				<img src="<?php echo base_url('front_assets/images/sellthree.jpg'); ?>">
				<span>Commerial house</span>
				<span>Lazimpat Kathmandu</span>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url('description'); ?>">
				<img src="<?php echo base_url('front_assets/images/civilhome.jpg'); ?>">
				<span>Civil Home</span>
				<span>Lazimpat Kathmandu</span>
			</a>
		</li>

	</ul>

	<div id="housesell">
		<div id="contenttwo">
			<?php foreach ($list as $key => $row): ?>
			
			<div class="entry-selling">
				<a href="<?php echo base_url($this->router->fetch_class().'/description/'.$row->id); ?>">
					<div class="entry_body">
						<img src="<?php echo base_url('uploads/list/'.$row->image_1);?>" alt="<?php echo $row->location; ?>" />
						<div class="entry_body_spec">
							<h5><?php echo get_property_type($row->type); ?> <?php echo get_for_type($row->for); ?> for <?php echo $row->price; ?> at <?php echo $row->location; ?></h5>
							<ul>
								<li>
									<?php echo $row->description ?>
								</li>
							</ul>
						</div>
					</div>
				</a>
			</div>
			
		<?php endforeach; ?>

	</div>
</div>

<div class="ad">

	<ul class="ads_slidertwo">
		<?php $ads = $this->db->order_by('order')->get('tbl_advertisement')->result(); ?>
		<?php foreach($ads as $ad){ ?>
		<li>
			<a href="<?php echo prep_url($ad->link); ?>" target="_blank">
				<img src="<?php echo base_url() ?>timthumb.php?h=300&w=300&q=100&src=<?php echo base_url('uploads/patners_image/'.$ad->image);?>">
			</a>
		</li>
		<?php } ?>
	</ul>

</div>

<script type="text/javascript">

$(document).ready(function(){

	$('.house_pic').bxSlider({
		minSlides: 5,
		maxSlides: 5,
		slideWidth: 200,
		slideMargin: 5,
		controls:true,
		auto : true
	});
});

</script>
</div>