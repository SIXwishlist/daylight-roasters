<?php $this->load->view('_blocks/header')?>

	<div class="main-container">
		<section class="page-header">
			<div class="wrapper">
				<?php $this->load->view('_blocks/breadcrumb')?>
				<h1><?=fuel_var('h1', ''); ?></h1>
				<?=fuel_var('body', ''); ?>
			</div>
		</section>

		<div class="main-repeater-container">
			<?php 
			if (!empty($sections)) :
			foreach($sections as $key => $section):
				if(!empty($section['block'])):
					$blockname = $section['block']['block_name'];
					echo fuel_block('sections/'.$blockname, $section['block']);
				endif;
			endforeach;
			endif; ?>
		</div>

	</div>

<?php $this->load->view('_blocks/footer')?>
