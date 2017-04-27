<?
	$block_class="layouts-page-content";
	$prefix="_lpc__";
	$heading_page="Планировки квартир";

	$project_images = get_field("photo_section1", 4);
	$project_images2 = get_field("photo_section2", 4);
	$project_images3 = get_field("photo_section3", 4);
?> 
<div class="<?=$block_class;?> content-block">
	<div class="container <?=$prefix;?>container">		
		<h1 class="heading-site <?=$prefix;?>heading"><?=$heading_page;?></h1>
		<?
		//var_dump($project_images);
		if(is_array($project_images3) && count($project_images3)) {
		?>
		<div class="<?=$prefix;?>gallery-block">
			<!--<h2 class="<?=$prefix;?>gallery-heading">Секция 1</h2>-->
			<div class="imageGallery <?=$prefix;?>gallery">
				<?
					if(count($project_images3)) {
						foreach($project_images3 as $img3) {				
							$img_full3 = postGallery($img3->ID, '1920x1960');
							$img_preview3 = postGallery($img3->ID, '490x500crop');
						?>
						
						<div 
							class="<?=$prefix;?>item"
							data-src="<?=$img_full3;?>"
							data-sub-html="<?=$img3->post_title;?>"
						>
							<h2 class="heading-block <?=$prefix;?>heading-block">
								<?=$img3->post_title;?>
							</h2>
							<div class="<?=$prefix;?>preview">
								<img src="<?=$img_preview3?>" alt="">
							</div>
						</div> 
						<?
						}
					}		
				?>
			</div>
		</div>
		<?
		}
		?>
		<?
		//var_dump($project_images);
		if(is_array($project_images) && count($project_images)) {
		?>
		<div class="<?=$prefix;?>gallery-block">
			<h2 class="<?=$prefix;?>gallery-heading">Секция 1</h2>
			<div class="imageGallery <?=$prefix;?>gallery">
				<?
					if(count($project_images)) {
						foreach($project_images as $img) {				
							$img_full = postGallery($img->ID, '1920x1960');
							$img_preview = postGallery($img->ID, '490x500crop');
						?>
						
						<div 
							class="<?=$prefix;?>item"
							data-src="<?=$img_full;?>"
							data-sub-html="<?=$img->post_title;?>"
						>
							<h2 class="heading-block <?=$prefix;?>heading-block">
								<?=$img->post_title;?>
							</h2>
							<div class="<?=$prefix;?>preview">
								<img src="<?=$img_preview?>" alt="">
							</div>
						</div> 
						<?
						}
					}		
				?>
			</div>
		</div>
		<?
		}
		?>
		<?
		//var_dump($project_images);
		if(is_array($project_images2) && count($project_images2)) {
		?>
		<div class="<?=$prefix;?>gallery-block">
			<h2 class="<?=$prefix;?>gallery-heading">Секция 2</h2>
			<div class="imageGallery <?=$prefix;?>gallery">
				<?
					if(count($project_images2)) {
						foreach($project_images2 as $img2) {				
							$img_full2 = postGallery($img2->ID, '1920x1960');
							$img_preview2 = postGallery($img2->ID, '490x500crop');
						?>
						
						<div 
							class="<?=$prefix;?>item"
							data-src="<?=$img_full2;?>"
							data-sub-html="<?=$img2->post_title;?>"
						>
							<h2 class="heading-block <?=$prefix;?>heading-block">
								<?=$img2->post_title;?>
							</h2>
							<div class="<?=$prefix;?>preview">
								<img src="<?=$img_preview2?>" alt="">
							</div>
						</div> 
						<?
						}
					}		
				?>
			</div>
		</div>
		<?
		}
		?>
	</div>
</div>