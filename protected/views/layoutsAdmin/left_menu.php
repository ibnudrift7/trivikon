<?php
$session = new CHttpSession;
$session->open();
$login_admin = $session['login'];
?>
<div class="leftmenu">        
    <ul class="nav nav-tabs nav-stacked">
        <li class="nav-header">Navigation</li>
        
        <li class="dropdown"><a href="#"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Member List') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/customer/index')); ?>">Member List Overview</a></li>
            </ul>
        </li> 
        <li class="dropdown"><a href="#"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Cari Member') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/market/index', 'tipe'=>'market')); ?>">List Cari Member</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/penawaranList/index', 'tipe'=>'market')); ?>">List Penawaran Cari</a></li>

                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/market/arsip_view', 'tipe'=>'market')); ?>">List Arsip Cari</a></li>
            </ul>
        </li>

         <li class="dropdown"><a href="#"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Jual Member') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/market/index', 'tipe'=>'promo')); ?>">List Jual Member</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/penawaranList/index', 'tipe'=>'promo')); ?>">List Penawaran Jual</a></li>

                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/market/arsip_view', 'tipe'=>'promo')); ?>">List Arsip Jual</a></li>
            </ul>
        </li>

        <li>&nbsp;</li>

        <?php if ($login_admin['type'] == 'root'): ?>
        <!-- <li><a href="<?php // echo CHtml::normalizeUrl(array('/admin/promoMember/index')); ?>"><span class="fa fa-folder"></span> <?php // echo Tt::t('admin', 'Promo Member') ?></a></li>  -->
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/eventMember/index')); ?>"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Event Member') ?></a></li> 

        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/pengumuman/index')); ?>"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Data Pengumuman') ?></a></li> 

        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/kategoriUsaha/index')); ?>"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Kategori Usaha') ?></a></li> 

        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/mitra/index')); ?>"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Master Komunitas') ?></a></li> 
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/satuanUnit/index')); ?>"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Master Satuan') ?></a></li> 

        <?php endif ?>

        <?php if ($login_admin['type'] == 'root'): ?>
        <?php /*
         <li class="dropdown"><a href="#"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Contact Us') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/static/contact')); ?>">Contact Overview</a></li>
            </ul>
        </li>
        
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/static/index')); ?>"><span class="fa fa-info"></span> <?php echo Tt::t('admin', 'Homepage') ?></a></li>
        <li class="dropdown"><a href="#"><span class="fa fa-book"></span> <?php echo Tt::t('admin', 'Musik') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/musik/index')); ?>">List Musik</a></li>
                <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/static/musik')); ?>">Overview Musik</a></li> -->
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span class="fa fa-tag"></span> <?php echo Tt::t('admin', 'Literasi') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/literasi/index')); ?>">List Literasi</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/literasiprofile/index')); ?>">List Literasi Profile</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/filterliterasi/index')); ?>">Category Literasi</a></li>
            </ul>
        </li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/static/jadwal')); ?>"><span class="fa fa-info"></span> <?php echo Tt::t('admin', 'Jadwal') ?></a></li>
        <li class="dropdown"><a href="#"><span class="fa fa-tag"></span> <?php echo Tt::t('admin', 'Program') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/program/index')); ?>">List Program</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/filterprogram/index')); ?>">Category Program</a></li>
            </ul>
        </li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/networking/index')); ?>"><span class="fa fa-book"></span> <?php echo Tt::t('admin', 'Networking') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/blog/index')); ?>"><span class="fa fa-book"></span> <?php echo Tt::t('admin', 'Blog') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/static/tiket')); ?>"><span class="fa fa-info"></span> <?php echo Tt::t('admin', 'Tiket') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/slide/index')); ?>"><span class="fa fa-image"></span> <?php echo Tt::t('admin', 'Slides') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/dashboard/index')); ?>"><span class="fa fa-info"></span> <?php echo Tt::t('admin', 'Homepage') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/index')); ?>"><span class="fa fa-info"></span> <?php echo Tt::t('admin', 'About Us') ?></a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/product')); ?>">Static Product Landing</a></li>
        */ ?>
        <?php /*
        <li class="dropdown"><a href="<?php echo CHtml::normalizeUrl(array('/admin/product/index')); ?>"><span class="fa fa-tag"></span> <?php echo Tt::t('admin', 'Products') ?></a>
            <ul>
                <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/product')); ?>">Product Wording</a></li> -->
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/product/index')); ?>">View Products</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/product/create')); ?>">Add Products</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/category/index')); ?>">View Category/Product Type</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/brand/index')); ?>">View Industry Application</a></li>

            </ul>
        </li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/static/solution')); ?>"><span class="fa fa-info"></span> <?php echo Tt::t('admin', 'Solutions') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/static/warranty')); ?>"><span class="fa fa-info"></span> <?php echo Tt::t('admin', 'Warranty & Quality') ?></a></li>
        <li class="dropdown"><a href="#"><span class="fa fa-tag"></span> <?php echo Tt::t('admin', 'Career') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/static/career')); ?>">Career Overview</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/careerList/index')); ?>">List Career</a></li>
            </ul>
        </li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/static/contact')); ?>"><span class="fa fa-phone"></span> <?php echo Tt::t('admin', 'Contact Us') ?></a></li>
        <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/order/index')); ?>"><span class="fa fa-fax"></span> <?php echo Tt::t('admin', 'Orders') ?> (<?php echo OrOrder::model()->count('is_read = 0') ?>)</a></li> -->
         <li class="dropdown"><a href="#"><span class="fa fa-tag"></span> <?php echo Tt::t('admin', 'Brand') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/brand/index')); ?>">Brand</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/brands')); ?>">Static Brand</a></li>
            </ul>
        </li>

        <li class="dropdown"><a href="#"><span class="fa fa-tag"></span> <?php echo Tt::t('admin', 'Where to Buy') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/address/index')); ?>">Where to Buy</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/wherebuy')); ?>">Static Where to Buy</a></li>
            </ul>
        </li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/career')); ?>"><span class="fa fa-phone"></span> <?php echo Tt::t('admin', 'Career') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/contact/index')); ?>"><span class="fa fa-phone"></span> <?php echo Tt::t('admin', 'Contact Us') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/gallery/index')); ?>"><span class="fa fa-image"></span> <?php echo Tt::t('admin', 'Event') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/faq')); ?>"><span class="fa fa-quote-left"></span> <?php echo Tt::t('admin', 'FAQ') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/tos')); ?>"><span class="fa fa-wrench"></span> <?php echo Tt::t('admin', 'Syarat & Ketentuan') ?></a></li>
        <li class="dropdown"><a href="<?php echo CHtml::normalizeUrl(array('/admin/career/index')); ?>"><span class="fa fa-heart"></span> <?php echo Tt::t('admin', 'Career') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/productedit/index')); ?>">Page Product</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/career/index')); ?>">Page Career</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/banner/index')); ?>">View Banner</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/banner/create')); ?>">Add Banner</a></li>
            </ul>
        </li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/factory/index')); ?>"><span class="fa fa-bank"></span> <?php echo Tt::t('admin', 'Factory') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/gema/index')); ?>"><span class="fa fa-group"></span> <?php echo Tt::t('admin', 'ge-ma') ?></a></li>
        <li class="dropdown"><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/index')); ?>"><span class="fa fa-info"></span> <?php echo Tt::t('admin', 'About Us') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/index')); ?>">About Header</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/whoweare')); ?>">What is Realfood?</a></li>
                <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/ourteam')); ?>">Our Team</a></li> -->
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/visimisi')); ?>">Vision & Mision</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/about/workwithus')); ?>">Why bird's nest?</a></li>
            </ul>
        </li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/career/index')); ?>"><span class="fa fa-heart"></span> <?php echo Tt::t('admin', 'Career') ?></a></li>
        <li class="dropdown"><a href="<?php echo CHtml::normalizeUrl(array('/admin/pages/index')); ?>"><span class="fa fa-folder-open"></span> <?php echo Tt::t('admin', 'Pages') ?></a>
            <ul>
                <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/pages/update', 'id'=>3)); ?>">About US</a></li> -->
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/blog/index')); ?>">Blog/Artikel</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/pages/update', 'id'=>4)); ?>">Contact US</a></li>
            </ul>
        </li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/customer/index')); ?>"><span class="fa fa-group"></span> <?php echo Tt::t('admin', 'Customers') ?></a></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/pdf/index')); ?>"><span class="fa fa-fax"></span> <?php echo Tt::t('admin', 'PDF') ?></a></li>
        <li class="dropdown"><a href="<?php echo CHtml::normalizeUrl(array('/admin/blog/index')); ?>"><span class="fa fa-tag"></span> <?php echo Tt::t('admin', 'News & Article') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/blog/index')); ?>">View News & Article</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/blog/create')); ?>">Add News & Article</a></li>
                <!-- <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/category/index')); ?>">View Category</a></li> -->
            </ul>
        </li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/address/index')); ?>"><span class="fa fa-group"></span> <?php echo Tt::t('admin', 'Lokasi Penjualan') ?></a></li>
        */ ?>
        <!-- <li><a href="#"><span class="fa fa-bullhorn"></span> <?php echo Tt::t('admin', 'Promotions') ?></a></li> -->
        <!-- <li><a href="#"><span class="fa fa-file-text-o"></span> <?php echo Tt::t('admin', 'Reports') ?></a></li> -->
        <!-- class="dropdown" -->
        <li><a href="<?php echo CHtml::normalizeUrl(array('setting/index')); ?>"><span class="fa fa-cogs"></span> <?php echo Tt::t('admin', 'General Setting') ?></a>
             <!--  <ul>
                <li class="active"><a href="<?php echo CHtml::normalizeUrl(array('/admin/administrator/index')); ?>">Administrator Manager</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/language/index')); ?>">Language (Bahasa)</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/access_block/index')); ?>">Access Blok</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/contact/index')); ?>">Contact & Form Setting</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/meta_page/index')); ?>">Default Meta Page</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/google_tools/index')); ?>">Google Tools</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/#/index')); ?>">Import/Export Product</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/purechat/index')); ?>">Integrasi PureChat</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/invoice_setting/index')); ?>">Invoice Setting</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/logo_setting/index')); ?>">Logo Setting</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/mail_setting/index')); ?>">Mail Setting</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/mailchimp/index')); ?>">MailChimp</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/marketplace/index')); ?>">Market Place</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/mobile_text/index')); ?>">Mobile Text Setting</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/payment/index')); ?>">Payment Setting</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/shipping/index')); ?>">Pengaturan Shipping</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/popOut/index')); ?>">Setting PopOut</a></li>
            </ul> -->
        </li>
        <?php endif ?>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/home/logout')); ?>"><span class="fa fa fa-sign-out"></span> Logout</a></li>
    </ul>
</div><!--leftmenu-->
