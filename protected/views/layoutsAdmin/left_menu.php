<?php
$session = new CHttpSession;
$session->open();
$login_admin = $session['login'];
?>
<div class="leftmenu">        
    <ul class="nav nav-tabs nav-stacked">
        <li class="nav-header">Navigation</li>
        
        <li class="dropdown"><a href="#"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Tugas Master') ?></a>
            <ul>
                <!-- <li>
                    <a href="<?php echo CHtml::normalizeUrl(array('/admin/tugasLists')); ?>">Semua Tugas</a>
                </li> -->
                <li>
                    <a href="<?php echo CHtml::normalizeUrl(array('/admin/subjectKepentingan')); ?>">Tugas</a>
                </li>
                <li>
                    <a href="<?php echo CHtml::normalizeUrl(array('/admin/tugasLists/rekap')); ?>">Rekap Tugas</a>
                </li>
            </ul>
        </li> 

        <!-- <li class="dropdown"><a href="#"><span class="fa fa-folder"></span> <?php // echo Tt::t('admin', 'Kepentingan Master') ?></a>
            <ul>
                <li><a href="<?php // echo CHtml::normalizeUrl(array('/admin/subjectKepentingan')); ?>">Subject Kepentingan</a></li>
            </ul>
        </li>  -->

        <li class="dropdown"><a href="#"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Member Master') ?></a>
            <ul>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/customer/index')); ?>">Member List Overview</a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/jabatan/index')); ?>">Jabatan</a></li>
            </ul>
        </li>         

        <?php /*
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
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/eventMember/index')); ?>"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Event Member') ?></a></li> 

        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/pengumuman/index')); ?>"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Data Pengumuman') ?></a></li> 

        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/kategoriUsaha/index')); ?>"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Kategori Usaha') ?></a></li> 

        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/mitra/index')); ?>"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Master Komunitas') ?></a></li> 
        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/satuanUnit/index')); ?>"><span class="fa fa-folder"></span> <?php echo Tt::t('admin', 'Master Satuan') ?></a></li> 
        <?php endif ?>
        */ ?>

        <?php if ($login_admin['type'] == 'root'): ?>
        <li><a href="<?php echo CHtml::normalizeUrl(array('setting/index')); ?>"><span class="fa fa-cogs"></span> <?php echo Tt::t('admin', 'General Setting') ?></a>
        </li>
        <?php endif ?>

        <li><a href="<?php echo CHtml::normalizeUrl(array('/admin/home/logout')); ?>"><span class="fa fa fa-sign-out"></span> Logout</a></li>
    </ul>
</div><!--leftmenu-->
