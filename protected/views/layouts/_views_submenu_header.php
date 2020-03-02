<div class="view_subdata pt-3">
  <?php 
  $criteria=new CDbCriteria;
  $criteria->with = array('description');
  $criteria->addCondition('description.language_id = :language_id');
  $criteria->params[':language_id'] = $this->languageID;
  $criteria->addCondition('t.parent_id = 0');
  $criteria->order = 't.sort ASC';
  $list_categorys = PrdCategory::model()->findAll($criteria);
  ?>
  <ul class="nav flex-column flex-nowrap">
    <?php foreach ($list_categorys as $key1 => $value1): ?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#hsubmenu<?php echo $key.'_'.$key1 ?>" data-toggle="collapse" data-target="#hsubmenu<?php echo $key.'_'.$key1 ?>"><?php echo $value1->description->name ?></a>
        <?php 
        $ins_data2 = ListProducts::model()->Getsubdata($value1->id);
        ?>
        <?php if (count($ins_data2) > 0): ?>
        <div class="collapse" id="hsubmenu<?php echo $key.'_'.$key1 ?>" aria-expanded="false">
            <ul class="flex-column pl-2 nav">    
              <?php foreach ($ins_data2 as $key2 => $value2): ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#hsubmenut1<?php echo $key.'_'.$key1.'_'.$key2 ?>" data-toggle="collapse" data-target="#hsubmenut1<?php echo $key.'_'.$key1.'_'.$key2 ?>"><?php echo $value2->description->name ?></a>
                    <?php 
                    $ins_data3 = ListProducts::model()->Getsubdata($value2->id);
                    ?>
                    <?php if (count($ins_data3) > 0): ?>
                    <div class="collapse" id="hsubmenut1<?php echo $key.'_'.$key1.'_'.$key2 ?>" aria-expanded="false">
                      <?php foreach ($ins_data3 as $key3 => $value3): ?>
                        <ul class="flex-column nav pl-4">
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#hsubmenut2<?php echo $key.'_'.$key1.'_'.$key2.'_'.$key3 ?>" data-toggle="collapse" data-target="#hsubmenut2<?php echo $key.'_'.$key1.'_'.$key2.'_'.$key3 ?>"><?php echo $value3->description->name ?></a>
                                <?php 
                                $ins_data4 = ListProducts::model()->Getsubdata($value3->id);
                                ?>
                                <?php if (count($ins_data4) > 0): ?>
                                <div class="collapse" id="hsubmenut2<?php echo $key.'_'.$key1.'_'.$key2.'_'.$key3 ?>" aria-expanded="false">
                                  <?php foreach ($ins_data4 as $key4 => $value4): ?>
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/product/view', 'category'=>$value1->id, 'cat1'=> $value2->id, 'cat2'=> $value3->id, 'cat3'=> $value4->id)); ?>"><?php echo $value4->description->name ?></a>
                                        </li>
                                    </ul>
                                  <?php endforeach ?>
                                </div>
                                <?php endif ?>
                            </li>
                        </ul>
                      <?php endforeach ?>
                    </div>
                    <?php endif ?>
                </li>
              <?php endforeach; ?>
            </ul>
        </div>
        <?php endif ?>
    </li>
    <?php endforeach; ?>
</ul>
</div>