<?
	$prefix = "_fs__";
?>
<footer class="footer-site <?if(is_front_page()){?>index<?} else {?>second<?}?>">	
	<div class="container <?=$prefix;?>container">
		<div class="row <?=$prefix;?>row">
			<div class="cols <?=$prefix;?>copyright-cols" style="width:20%;" >
				ЗАО «Стройкомплект-центр»
			</div>
			
			<div class="cols <?=$prefix;?>contacts-cols">
				<div class="row <?=$prefix;?>contacts-row">
					<?
						$phone = contact('phone');
						$phone_hidden = contact('phone_hidden');
						if($phone != '') { 
					?>
					<div class="cols">
						<a href="tel:<?=$phone_hidden;?>" class="<?=$prefix;?>phone <?=$prefix;?>icon"><?=$phone;?></a>
					</div> 													
					<?
					}
					?>
					<?
					/*
						$address = contact('address');
						if($address != '') { 
					?>
					<div class="cols">
						<div class="<?=$prefix;?>address <?=$prefix;?>icon"><?=$address;?></div>
					</div>					
					<?
					}
					*/
					?>
					<div class="cols">
						<div class="<?=$prefix;?>address <?=$prefix;?>icon">г. Орел, ул. Старо-Московская, 10</div>
					</div>
					
					<?
						$email = contact('email');
						if($email != '') { 
					?>
					<div class="cols">
						<a href="mailto:<?=$email;?>" class="<?=$prefix;?>mailto <?=$prefix;?>icon"><?=$email;?></a>
					</div>						
					<?
					}
					?>
				</div>
			</div>
			<div class="cols <?=$prefix;?>soc-cols">				
				<div class="social-block">
					<div class="row social__row">
						<?
							$link = contact('vk');
							if($link != '') {
						?>
						<div class="cols">
							<a href="https://<?=$link;?>" target="_blank" class="social__item _vk">
								<svg class="icon-svg icon-vk icon-soc" role="img">
									<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#vk"></use>
								</svg> 
							</a>
						</div>
						<?} 
							$link = contact('inst');
							if($link != '') {
						?>
						<div class="cols">
							<a href="https://<?=$link;?>" target="_blank" class="social__item _inst">
								<svg class="icon-svg icon-inst icon-soc" role="img">
									<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#inst"></use>
								</svg> 
							</a>
						</div>
						<?} 
							$link = contact('fb');
							if($link != '') {
						?>
						<div class="cols">
							<a href="https://<?=$link;?>" target="_blank" class="social__item">
								<svg class="icon-svg icon-fb icon-soc" role="img">
									<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#fb"></use>
								</svg> 
							</a>
						</div>
						<?} 
							$link = contact('ok');
							if($link != '') {
						?>
						<div class="cols">
							<a href="https://<?=$link;?>" target="_blank" class="social__item">
								<svg class="icon-svg icon-ok icon-soc" role="img">
									<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#ok"></use> 
								</svg> 
							</a>
						</div>
						<?}?>
					</div>
				</div> 
			</div>
			<div class="cols <?=$prefix;?>dorohovdesign-cols">
				<div class="row <?=$prefix;?>dorohovdesign-row"> 
					<div class="cols">
						<div>Создание сайта</div>
					</div>
					<div class="cols">
						<div class="<?=$prefix;?>dorohovdesign__logo">
							<a href="http://www.dorohovdesign.ru/" target="_blank">
								<svg class="icon-svg icon-dorohovdesign <?=$prefix;?>dd" role="img">
									<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#dorohovdesign"></use>
								</svg>
							</a>
						</div>	
					</div>
				</div>				 
			</div>	
		</div>
		<div class="row _only_info__row">
			<p>Любая информация, представленная на данном ресурсе, носит исключительно информационный характер, и ни при каких условиях не является публичной офертой, определяемой положениями статьи 437 ГК РФ.</p>
		</div>
	</div>
</footer>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="<?=$this->path('js');?>/jquery.min.js" ></script>
<!-- <script src="<?=$this->path('js');?>/azbn-plan-wp.js" ></script> -->
<script src="<?=$this->path('js');?>/document-ready.js" ></script>

<script src="<?=$this->path('js');?>/bootstrap.min.js" ></script>
<script src="<?=$this->path('js');?>/device.min.js" ></script>

<script src="<?=$this->path('js');?>/svg4everybody.min.js" ></script>
<script>svg4everybody();</script>

<?
	//script block
	//building
	if($this->post['id'] == 6 || $this->post['id'] == 208) {		
		$this->tpl('_/script/lightgallery', array());
	}
	//layouts
	if($this->post['id'] == 4) {		
		$this->tpl('_/script/lightgallery', array());
	}
	//contacts
	if($this->post['id'] == 485 ){		
		$this->tpl('_/script/2gisMap', array());
	}
	if(get_post_type() == "doc"){		
		$this->tpl('_/script/scrollbar', array());
	}
	if(!is_user_logged_in()) {		
		$this->tpl('_/script/metrika', array());
		//$this->tpl('_/script/callback_killer', array());
	}
	if(is_user_logged_in()) {
		$this->tpl('_/script/editor', array());
	}	

	// modal block
	//building
	if($this->post['id'] == 6) {		
		$this->tpl('_/modals/building', array());
	}
	if(is_user_logged_in()) {
		$this->tpl('editor/modal', array());
	}
?>

<? //old	
	/*
	if($this->post['id'] == 184 ){
		$this->tpl('_/modals/message', array());
	}
	if(is_front_page()) {
		$this->tpl('_/modals/message', array());
	}
	*/
	/*if($this->post['id'] == 6 ){		
		$this->tpl('_/script/spinner', array());
		$this->tpl('_/script/scrollbar', array());
	}
	if($this->post['id'] == 184 ){		
		$this->tpl('_/script/validationEngine', array());
	}*/
	/*if(is_front_page()) {
		$this->tpl('_/script/2gisMap', array());
		$this->tpl('_/script/validationEngine', array());
		$this->tpl('_/script/scrollr', array());
		$this->tpl('_/script/plax', array()); 
		$this->tpl('_/script/spinner', array()); 
		$this->tpl('_/script/response', array()); 
	}*/
	/*
	$updated_at = get_post_meta(1, 'stroycrm_updated_at', true);
	if(($updated_at + 3600) < date('U')) {
	?>
	<script type="text/javascript" src="/editor/dataimport/" charset="UTF-8" async ></script>
	<?
	}
	*/
?>

<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=0124969a6598c03f2fe11ef77735e823" charset="UTF-8" async></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96230480-3', 'auto');
  ga('send', 'pageview');

</script>

<!--
Идентификатор отслеживания (для вордпресс)
UA-96230480-3
-->

</body>
</html>