
<section class="footer">
    <div class="prelative container pt-5 pb-5">
        <div class="row pt-3">
            <div class="col-md-20">
                <img src="<?php echo $this->assetBaseurl; ?>logo-footer.png" alt="" class="img img-fluid">
                <div class="clear height-50"></div>
                <div class="clear height-50"></div>
                <div class="clear height-50"></div>
                <div class="clear height-40"></div>
                <div class="bottoms_leftsbrand">
                    <span>Our Brand</span> <div class="clear clearfix height-5"></div>
                    <img src="<?php echo $this->assetBaseurl ?>lgosn_ft_astra.png" alt="" class="img img-fluid">
                </div>
            </div>
            <div class="col-md-40">
                <div class="row">
                    <div class="col-md-20">
                        <div class="menu-box">
                            <div class="title">
                                <p>PT. Trias Sentosa, Tbk</p>
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo CHtml::normalizeUrl(array('/home/process', 'lang'=>Yii::app()->language)); ?>">
                                        Our Process
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo CHtml::normalizeUrl(array('/home/news', 'lang'=>Yii::app()->language)); ?>">
                                        News & Articles
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang'=>Yii::app()->language)); ?>">
                                        Career
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-20">
                        <div class="menu-box">
                            <div class="title">
                                <p>BOPP & PET Film Products</p>
                            </div>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo CHtml::normalizeUrl(array('/product/index')); ?>">View Product Category</a></li>
                            </ul>
                            <?php 
                            
                            /*<ul class="list-unstyled">
                                <?php 
                                $criteria = new CDbCriteria;
                                $criteria->with = array('description');
                                $criteria->addCondition('description.language_id = :language_id');
                                $criteria->params[':language_id'] = $this->languageID;
                                $criteria->group = 't.id';
                                $criteria->order = 't.sort ASC';
                                $Categorys2 = PrdCategory::model()->findAll($criteria);
                                ?>
                                <?php foreach ($Categorys2 as $key => $value): ?>
                                <li class="dropdown">
                                    <?php echo $value->description->name ?>
                                    <?php 
                                    $criteria=new CDbCriteria;
                                    $criteria->with = array('description');
                                    $criteria->order = 't.date ASC';
                                    $criteria->addCondition('status = "1"');
                                    $criteria->addCondition('description.language_id = :language_id');
                                    $criteria->params[':language_id'] = $this->languageID;
                                    $criteria->addCondition('t.category_id = :category_id');
                                    $criteria->params[':category_id'] = $value->id;
                                    $criteria->limit = 3;
                                    $model_prd = PrdProduct::model()->findAll($criteria);
                                    ?>
                                    <ul class="dropdown-menu list-unstyled">
                                        <?php foreach ($model_prd as $key => $value2): ?>
                                        <li><a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value2->id)); ?>"><?php echo $value2->description->name ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                                <?php endforeach ?>
                            </ul>*/ ?>
                        </div>
                    </div>
                    <div class="col-md-20">
                        <div class="menu-box">
                            <div class="title">
                                <p>Investor Relations</p>
                            </div>
                            <?php
                            $criteria = new CDbCriteria;
                            $criteria->with = array('description');
                            $criteria->addCondition('description.language_id = :language_id');
                            $criteria->params[':language_id'] = $this->languageID;
                            $criteria->group = 't.id';
                            $criteria->order = 't.sort ASC';
                            $Categorys = PrdCategory2::model()->findAll($criteria);
                            ?>
                            <ul class="list-unstyled">
                                <?php foreach ($Categorys as $key => $value): ?>
                                <li><a href="<?php echo CHtml::normalizeUrl(array('/investor/index', 'category'=> $value->id)); ?>"><?php echo $value->description->name; ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer-bawah">
    <div class="prelative container">
        <div class="row py-4">
            <div class="col-md-40">
                <div class="kanan">
                    <p>
                        Copyright 2018 © PT. Trias Sentosa, Tbk - Flexible Packaging Film Manufacturer (BOPP & PET Films). All rights reserved.
                    </p>
                </div>
            </div>
            <div class="col-md-20">
                <div class="kiri">
                    <p>
                        Website design by <a href="#"> Mark Design </a>Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>