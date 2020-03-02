<section class="cover-profil" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,566, '/images/static/'. $this->setting['about_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>');">
	<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,566, '/images/static/'. $this->setting['about_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img img-fluid d-block d-sm-none">
    <div class="prelative container">
			<div class="box">
                <h1><?php echo $this->setting['about_hero_title'] ?></h1>
                <?php echo $this->setting['about_hero_content'] ?>
    </div>
</section>

<section class="default_sc about-outer-content py-5">
	<div class="prelatife container prelatife">
		<!-- <div class="py-4 my-4"></div> -->
		<!-- <span class="leftsn_tmprofil"><?php echo $this->setting['about2_intro_lefttitle'] ?></span> -->
		<span class="leftsn_ftn defaults insides_p"><?php echo $this->setting['about2_intro_lefttitle'] ?></span>

		<div class="container2 insides_content d-block mx-auto my-5 pt-5 prelatife">
			<div class="content-text pt-5">
				<h5><?php echo $this->setting['about2_subtitle'] ?></h5>
				<div class="py-3"></div>
				<div class="row">
					<div class="col-xl-20 col-lg-20">
						<div class="lefts_cont">
							<div class="banners_pict"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(403,417, '/images/static/'. $this->setting['about2_leftpictures'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-fluid img"></div>
						</div>
					</div>
					<div class="col-xl-1 col-lg-1">
						
					</div>
					<div class="col-xl-38 col-lg-38">
						<?php echo $this->setting['about2_content'] ?>
					</div>
				</div>

				<div class="clear clearfix"></div>
			</div>
			<div class="py-4 d-none d-sm-block"></div>
			<div class="py-2 d-block d-sm-none"></div>

			<div class="clear"></div>
		</div>
		<div class="clear clearfix"></div>
	</div>
</section>

<section class="default_sc about-outer-content about-sect2 pt-5">
	<div class="prelatife container my-1">
		<span class="leftsn_ftn defaults white insides_p"><?php echo $this->setting['about3_intro_lefttitle'] ?></span>
		<!-- <span class="leftsn_tmprofil"><?php echo $this->setting['about3_intro_lefttitle'] ?></span> -->
		
		<div class="container2 insides_content d-block mx-auto my-5">
			<div class="row">
				<div class="col-lg-22 col-xl-22">
					<div class="content-text cwhite">
						<div class="blocks_visions_mission">
							<div class="lists pb-4">
								<h4><?php echo Tt::t('front', 'Visi'); ?></h4>
								<?php echo $this->setting['about3_visi'] ?>
							</div>
							<div class="lists pt-2 pb-5">
								<h4><?php echo Tt::t('front', 'Misi'); ?></h4>
								<?php echo $this->setting['about3_misi'] ?>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="col-lg-38 col-xl-38">
					
				</div>
			</div>
			
		</div>

		<div class="clear"></div>
	</div>

	

	<!-- End container top -->
	<?php 
	// $lists_ref = [
	// 			'ref_logo_33.jpg',
	// 			'ref_logo_34.jpg',
	// 			'ref_logo_35.jpg',
	// 			'ref_logo_36.jpg',
	// 			'ref_logo_37.jpg',
	// 			'ref_logo_38.jpg',
	// 			'ref_logo_53.jpg',
	// 			'ref_logo_54.jpg',
	// 			'ref_logo_55.jpg',
	// 			'ref_logo_56.jpg',
	// 			'ref_logo_57.jpg',
	// 			'ref_logo_58.jpg',
	// 			'ref_logo_73.jpg',
	// 			'ref_logo_74.jpg',
	// 			'ref_logo_75.jpg',
	// 			'ref_logo_76.jpg',
	// 			'ref_logo_77.jpg',
	// 			'ref_logo_78.jpg',
	// 			];
	?>
	
	<div class="clear height-10"></div>

	<div class="row blocks_innermiddle_yellow">
		<div class="col-lg-40 col-xl-40 my-auto back-yellow py-5">
			<div class="inner_section_yellow pt-4 mt-5 ml-5 pl-5">
				<div class="prelatife container2 mx-5 px-4">
					<div class="inner-block content-text cwhite pl-2">
						<h4><?php echo $this->setting['about3_yellow_subtitle'] ?></h4>
						<div class="clear height-10"></div>
						<?php echo $this->setting['about3_yellow_content'] ?>
						<div class="clear h980"></div>
						<div class="clear clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-20 col-xl-20"></div>
	</div>
	<div class="inner_sectionwhite_bottom_refAbout p-3">
		<div class="inner-block p-5">
			<p><strong><?php echo $this->setting['about3_white_title'] ?></strong></p>
			<div class="clear height-10"></div>
			<?php 
			$criteria=new CDbCriteria();
			$criteria->condition = 't.active = 1';
			$lists_ref = ListClient::model()->findAll($criteria);
			?>
			<div class="blocks_lists_logo">
				<ul class="list-inline">
					<?php foreach ($lists_ref as $key => $value): ?>
					<li class="list-inline-item"><img src="<?php echo $this->assetBaseurl ?>../../images/brand/<?php echo $value->image ?>" alt="" class="img img-fluid"></li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="clear height-10"></div>
			<div class="nchilds">
				<?php echo $this->setting['about3_white_content'] ?>
			</div>
			<div class="clear clearfix"></div>
		</div>
	</div>
	

</section>

<section class="default_sc about-outer-content about-sect3">
	<div class="prelatife fulls_banner_picture"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,829, '/images/static/'. $this->setting['about3_bottom_picture'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img img-fluid"></div>
</section>

<?php echo $this->renderPartial('//layouts/_bottom_ft_form', array()); ?>
