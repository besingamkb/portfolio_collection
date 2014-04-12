<!DOCTYPE html>
<html>
<head>
	<title>Add new project</title>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
	  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	  <script type="text/javascript">
	  $(function(){

	  	$('#datepicker').datepicker();
	  	$('#datepicker2').datepicker();
	  });
	  </script>
</head>
<body>
<div>
	<div>
	<?php //print_r($populateselect) ?>
		<?php echo form_open('admin/savingproject'); ?>
			<p>Project Name:<?php echo form_input('project_name') ?></p>
			<p>Client Name:<?php echo form_input('project_client_name') ?></p>
			<p>Category: <select name="project_catid">
				<?php 

				foreach ($populateselect as $row) {
					echo '<option value="'. $row->project_catid .'">'. $row->project_category .'</option>';
				}

				?>
			</select></p>
			<p>Project Url: <?php echo form_input('project_url') ?></p>
			<p>Project: image<?php echo form_input('project_image'); ?><a href="gallery" target="_blank">click here to open media gallery</a></p>

			<?php $config = array('name' => 'project_description', 'id'=>'editor1'); ?>
			<p>Project Description: <br><?php 	echo form_textarea($config) ?></p>

			<?php $config = array('name' => 'project_start', 'id'=>'datepicker') ?>
			<p>Project Start: <?php 	echo form_input($config) ?></p>
			<?php $config = array('name' => 'project_end', 'id'=>'datepicker2') ?>
			<p>Project End: <?php 	echo form_input($config) ?></p>
			<p><?php echo form_submit('submit', 'save') ?></p>
		<?php echo form_close();  ?>
	</div>
</div>
</body>
</html>