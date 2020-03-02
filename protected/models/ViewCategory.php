<?php

/**
 * This is the model class for table "prd_category".
 *
 * The followings are the available columns in table 'prd_category':
 * @property integer $id
 * @property integer $parent_id
 * @property string $image
 * @property string $type
 * @property string $data
 */
class ViewCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PrdCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'view_category';
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'parent_id' => 'Parent',
			'image' => 'Image',
			'type' => 'Type',
			'data' => 'Data',
			'id2' => 'id2',
			'category_id' => 'category_id',
			'language_id' => 'language_id',
			'name' => 'Name',
			'data2' => 'Data2',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('language_id',$this->language_id);

		$criteria->order = 'sort asc';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function primaryKey() {
	    return 'id';
	}

	public function getSubName($data)
	{
		$criteria=new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = 2;
		$criteria->addCondition('t.id = '. intval($data) );

		$model = PrdCategory::model()->find($criteria);

		return $model->description->name;
	}


	public function getViewdropdown()
	{
		$criteria=new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = 2;
		$criteria->addCondition('t.parent_id = 0');
		$criteria->order = 't.sort ASC';
		$list_categorys = PrdCategory::model()->findAll($criteria);

		$string = '<ul class="navbar-nav subdropdown">';
		foreach ($list_categorys as $ke => $valu) {
			$string .= '<li class="nav-item dropdown">';	
				$string .= '<a class="nav-link dropdown-toggle" href="javascript:return false;" data-toggle="dropdown">'.$valu->description->name.'</a>'."\n";
				// sub data 1
				$string .= '<ul class="dropdown-menu">'."\n";
				$models1 = ListProducts::model()->Getsubdata($valu->id);
				foreach ($models1 as $key => $value) {
					$string .= '<li>';
					$string .= '<a class="dropdown-item dropdown-toggle" href="javascript:return false;" data-toggle="dropdown">'.$value->description->name.'</a>'."\n";
						// sub data 2
						$string .= '<ul class="dropdown-menu">'."\n";
						$models2 = ListProducts::model()->Getsubdata($value->id);
						foreach ($models2 as $key1 => $value1) {
							$string .= '<li>';
								$string .= '<a class="dropdown-item dropdown-toggle" href="javascript:return false;">'.$value1->description->name.'</a>'."\n";
								// sub data 3								
								$string .= '<ul class="dropdown-menu">'."\n";
								$models3 = ListProducts::model()->Getsubdata($value1->id);
								foreach ($models3 as $key2 => $value2) {
									$string .= '<li>';
										$string .= '<a class="dropdown-item dropdown-toggle" href="'. CHtml::normalizeUrl(array('/product/view', 'category'=>$valu->id, 'cat1'=> $value->id, 'cat2'=> $value1->id, 'cat3'=> $value2->id)) .'">'.$value2->description->name.'</a>'."\n";
									$string .= '</li>';
								}
								$string .= '</ul>'."\n";
							$string .= '</li>';
						}
						$string .= '</ul>'."\n";
					$string .= '</li>';
				}
				$string .= '</ul>'."\n";
			$string .= '</li>';	
		}
		$string .= '</ul>';

		echo $string;
	}

}