<section class="cover-profil" style="background-image: url('<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,566, '/images/static/'. $this->setting['contact_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>');">
	<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,566, '/images/static/'. $this->setting['contact_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img img-fluid d-block d-sm-none">
    <div class="prelative container">
			<div class="box">
			<h1><?php echo $this->setting['contact_hero_title'] ?></h1>
			<?php echo $this->setting['contact_hero_content'] ?>
			</div>
    </div>
</section>

<section class="sec-breadcrumb">
	<div class="prelative container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
			</ol>
			<div class="clear clearfix"></div>
		</nav>
	</div>
</section>

<section class="hubungi-sec-1">
	<div class="prelatife container">
		<div class="container2 d-block mx-auto">
			<span class="hubungi">
				hubungi BMC Logistics
			</span>
			<h1>Kantor Pusat BMC Logistics</h1>
			<p class="silahkan">Silahkan menghubungi kami pada jam kerja: Senin - Jumat pukul 08.00 - 17.00.</p>
			<div class="address">
				<div class="sby">SURABAYA</div>
				<div class="loc">
					<p>
						Jl. Prapat Kurung Utara 58 <br>Surabaya 60165, Jawa Timur - Indonesia <br><a href="#">View on Google map.</a> 
					</p>
				</div>
				<div class="tel">
					<p><span><img src="<?php echo $this->assetBaseurl; ?>telp.png" alt=""></span>Tel. +62 31 3282271</p>
				</div>
				<div class="mail">
					<p><span><img src="<?php echo $this->assetBaseurl; ?>mail.png" alt=""></span>Email. 	<a href="mailto:info@bmclogistic.co.id"> info@bmclogistic.co.id</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php echo $this->renderPartial('//layouts/_bottom_ft_form', array()); ?>

<section class="default_sc hubungi-sec-2 d-none hide hidden">
	<div class="prelatife container py-5">
		
		<div class="container2 d-block mx-auto my-5 py-4 pb-5 content-text2">
			<span>
				hubungi BMC Logistics
			</span>
			<h4><?php echo $this->setting['contact1_title'] ?></h4>
			<?php echo $this->setting['contact1_content'] ?>
			<div class="pt-5"></div>
			<div class="clear"></div>
			<div class="blockns-form">
				<form method="post" action="#">
				  <div class="form-group">
				    <!-- <label for="exampleInputEmail1">Email address</label> -->
				    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
				    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
				  </div>
				  <div class="form-group">
				    <!-- <label for="exampleInputEmail1">Email address</label> -->
				    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
				    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
				  </div>
				  <div class="form-group">
				    <!-- <label for="exampleInputEmail1">Email address</label> -->
				    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Perusahaan">
				    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
				  </div>
				  <div class="form-group">
				    <!-- <label for="exampleInputEmail1">Email address</label> -->
				    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telepon">
				    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
				  </div>
				  <div class="form-group">
				    <label for="txPesan">Pesan</label>
				    <textarea name="" id="" rows="1" class="form-control"></textarea>
				    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
				  </div>


				  <button type="submit" class="btn btn-default mt-3 p-2 pl-5 pr-5">KIRIM PESAN</button>
				</form>
				<div class="clear"></div>
			</div>

			<div class="clear"></div>
		</div>

	</div>
</section>

<section class="cover-footer">
	<div class="prelative container">
		<div class="row">
			
		</div>
	</div>
</section>

<style type="text/css">
	section.hubungi-sec-2{
		background-color: #fff;
	}
</style>