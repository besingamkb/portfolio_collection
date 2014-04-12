<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<?php 
				if ($this->session->userdata('is_logged_id') == 1) {
					echo form_open_multipart('admin/gallery');
					echo "Add new image: " . form_upload('userfile');
					echo form_submit('upload', 'Upload');
					echo form_close();
				} else {
		
		?>
			<header>
				<p style="padding: 0; margin: 0; text-align: center">Only user's can upload.</p>
			</header>
			<?php } ?>
		</div>

<ul class="grid effect-5" id="grid" style="margin-top: 15px">
	<!-- <li><a href="http://drbl.in/fQdt"><img src="images/12.png"></a></li> -->

	<?php if ( isset($images) && count($images)) :  

		foreach ($images as $image) : ?>



	
			<li><a href="#"><img src="<?php echo $image['url']; ?>"></a></li>
		<?php endforeach; ?>
	<?php else: ?>
		<li></li>
		<li style="text-align: center">No image uploaded. please upload image!</li>
		<li></li>
	<?php endif; ?>
</ul>