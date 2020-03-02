<?php

class ProductController extends Controller
{

	public $product, $category;

	public function actionIndex()
	{
		$criteria=new CDbCriteria;
		$criteria->with = array('description', 'category', 'categories', 'alternateImage');
		$criteria->order = 'date DESC';
		$criteria->addCondition('status = "1"');
		// $criteria->addCondition('terlaris = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;

		if ($_GET['category']) {
			$criteria->addCondition('categories.category_id = :category_id');
			$criteria->params[':category_id'] = intval($_GET['category']);
		}
		
		if ($_GET['brand']) {
			$ns_brand = PrdCategoryProduct::model()->findAll('category_id = :categorys_id', array(':categorys_id'=>intval($_GET['brand'])));
			$listn_idm_brand = array();
			foreach ($ns_brand as $key => $value) {
				$listn_idm_brand[$value->product_id] = $value->product_id;
			}
			// print_r($listn_idm_brand);exit;
			$criteria->addInCondition('t.id', $listn_idm_brand);
		}

		$pageSize = 12;
		$criteria->group = 't.id';
		$product = new CActiveDataProvider('PrdProduct', array(
			'criteria'=>$criteria,
		    'pagination'=>array(
		        'pageSize'=>$pageSize,
		    ),
		));

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('t.parent_id = :parent_id');
		$criteria->params[':parent_id'] = 0;
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		// $criteria->addCondition('t.type = :type');
		// $criteria->params[':type'] = 'category';
		$criteria->order = 'sort ASC';
		$categories = PrdCategory::model()->findAll($criteria);

		if ($_GET['category'] != '') {
			$criteria = new CDbCriteria;
			$criteria->with = array('description');
			$criteria->addCondition('t.id = :id');
			$criteria->params[':id'] = intval($_GET['category']);
			$criteria->addCondition('description.language_id = :language_id');
			$criteria->params[':language_id'] = $this->languageID;
			$category = PrdCategory::model()->find($criteria);
		}

		if ($_GET['brand'] != '') {
			$criteria = new CDbCriteria;
			$criteria->with = array('description');
			$criteria->addCondition('t.id = :id');
			$criteria->params[':id'] = intval($_GET['brand']);
			$criteria->addCondition('description.language_id = :language_id');
			$criteria->params[':language_id'] = $this->languageID;
			$brand = Brand::model()->find($criteria);
		}

		$this->layout='//layouts/column2';

		if ($_GET['brand'] != '') {
			$this->render('lists_brand', array(
				'product'=>$product,
				'categories'=>$categories,
				'category'=>$category,
				'brand'=>$brand,
			)); 
		} else {
			$stex_page = '';
			if ($_GET['category'] != '') {
				$stex_page = 'index_list';
			}else{
				$stex_page = 'index';
			}
			$this->render($stex_page, array(
				'product'=>$product,
				'categories'=>$categories,
				'category'=>$category,
				'brand'=>$brand,
			)); 
		}
		
	}	

	public function actionApplication()
	{

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		// $criteria->addCondition('t.parent_id = :parent_id');
		// $criteria->params[':parent_id'] = 0;
		
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		
		// $criteria->addCondition('t.type = :type');
		// $criteria->params[':type'] = 'category';
		// $criteria->limit = 10;

		$criteria->order = 't.id ASC';
		$categories = Brand::model()->findAll($criteria);

		$this->layout='//layouts/column2';

		$this->render('applications', array(
			'categories'=>$categories,
		)); 
		// $this->render('list', array(
		// 	'categories'=>$categories,
		// )); 
	}	

	public function actionDetail($id)
	{
		$criteria=new CDbCriteria;
		$criteria->with = array('description', 'category');
		$criteria->addCondition('status = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.id = :id');
		$criteria->params[':id'] = intval($id);
		$data = PrdProduct::model()->find($criteria);
		if($data===null)
			throw new CHttpException(404,'The requested page does not exist.');

		$criteria=new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$criteria->addCondition('t.id = :id');
		$criteria->params[':id'] = intval($data->category_id);
		$Categorys = PrdCategory::model()->find($criteria);

		$criteria=new CDbCriteria;
		$criteria->addCondition('t.product_id = :product_id');
		$criteria->params[':product_id'] = $data->id;
		$criteria->order = 'id ASC';
		$attributes = PrdProductAttributes::model()->findAll($criteria);

		$criteria=new CDbCriteria;
		$criteria->with = array('description', 'category', 'categories');
		$criteria->order = 'RAND()';
		$criteria->addCondition('status = "1"');
		$criteria->addCondition('description.language_id = :language_id');
		$criteria->params[':language_id'] = $this->languageID;
		$product = new CActiveDataProvider('PrdProduct', array(
			'criteria'=>$criteria,
		    'pagination'=>array(
		        'pageSize'=>4,
		    ),
		));

		$criteria = new CDbCriteria;
		$criteria->with = array('description');
		$criteria->addCondition('t.parent_id = :parent_id');
		$criteria->params[':parent_id'] = 0;
		$criteria->addCondition('t.type = :type');
		$criteria->params[':type'] = 'category';
		$criteria->limit = 3;
		$criteria->order = 'sort ASC';
		$categories = PrdCategory::model()->findAll($criteria);

		$this->pageTitle = $data->description->name.' | '.$this->pageTitle;
		$this->layout='//layouts/column2';
		$this->render('detail', array(	
			'data' => $data,
			'product' => $product,
			'attributes' => $attributes,
			'categories' => $categories,
			'Categorys' => $Categorys,
		));
	}

	public function actionView()
	{
		// $criteria=new CDbCriteria;
		// $criteria->with = array('description');
		// $criteria->addCondition('description.language_id = :language_id');
		// $criteria->params[':language_id'] = $this->languageID;
		// $criteria->addCondition('t.id = :id');
		// $criteria->params[':id'] = intval($data->category_id);
		// $Categorys = PrdCategory::model()->find($criteria);

		$criteria=new CDbCriteria;

		if (isset($_GET['type']) AND $_GET['type'] == 'application') {
			$sn_cat1 = array();
			$sn_cat2 = array();
			$danas = explode('||', $_GET['category']);

			$expn = [];
			foreach ($danas as $key => $value) {
				$sn_plode = explode('__', $value);
				$expn['category'][] = $sn_plode[0];
				$expn['cat1'][] = $sn_plode[1];
			}
			$sn_cat1 = $expn['category'];
			$sn_cat2 = $expn['cat1'];

			$criteria->addInCondition('t.category_id', $sn_cat1);
			$criteria->addInCondition('t.sub_cat1', $sn_cat2);
		}else{

			$criteria->addCondition('t.category_id = :category_id');
			$criteria->params[':category_id'] = intval($_GET['category']);
			if ($_GET['cat1']) {
				$criteria->addCondition('t.sub_cat1 = :sub_cat1');
				$criteria->params[':sub_cat1'] = intval($_GET['cat1']);
			}
			if ($_GET['cat2']) {
				$criteria->addCondition('t.sub_cat2 = :sub_cat2');
				$criteria->params[':sub_cat2'] = intval($_GET['cat2']);
			}
			if ($_GET['cat3']) {
				$criteria->addCondition('t.sub_cat3 = :sub_cat3');
				$criteria->params[':sub_cat3'] = intval($_GET['cat3']);
			}		
		}
		$criteria->order = 't.category_id ASC';

		$models = ListProducts::model()->findAll($criteria);
		
		$models_first = ListProducts::model()->find($criteria);
		
		$model = new ContactForm;
		$model->scenario = 'insert';

		$this->render('views', array(	
				'firsts'=>$models_first,
				'data' => $models,
				'model' => $model,
			));
	}
	
	public function actionAddcart()
	{
		if ($_POST['id'] != '') {
			if ( ! $_POST['id'])
				throw new CHttpException(404,'The requested page does not exist.');

			if ($_POST['qty'] < 1){
				Yii::app()->user->setFlash('danger','Item can not be less than 1');
				$this->redirect(array('/product/detail', 'id'=>$_POST['id']));
			}

			if ($_POST['option'] != '') {
				$id = $_POST['id'].'-'.$_POST['option'];
			}else{
				$id = $_POST['id'];
			}
			$qty = $_POST['qty'];
			$optional = $_POST['optional'];
			$option = $_POST['option'];

			$model = new Cart;

			$data = PrdProduct::model()->findByPk($id);

			if (is_null($data))
				throw new CHttpException(404,'The requested page does not exist.');

			$model->addCart($id, $qty, $data->harga, $option, $optional);
			
			Yii::app()->user->setFlash('addcart',$qty);
			Yii::app()->user->setFlash('success','The item has been added to the shopping cart');
			Yii::app()->user->setFlash('openpop','1');
			$this->redirect(array('/product/detail', 'id'=>$_POST['id']));
		}else{
			$criteria=new CDbCriteria;
			$criteria->with = array('description');
			$criteria->addCondition('status = "1"');
			$criteria->addCondition('description.language_id = :language_id');
			$criteria->params[':language_id'] = $this->languageID;
			$criteria->addCondition('t.id = :id');
			$criteria->params[':id'] = $_GET['id'];
			$data = PrdProduct::model()->find($criteria);
			if($data===null)
				throw new CHttpException(404,'The requested page does not exist.');
			
			$model = new Cart;
			$cart = $model->viewCart($this->languageID);

			$this->render('addcart', array(	
				'data' => $data,
				'cart' => $cart[$_GET['id']],
			));
		}
	}

	public function actionAddcart2()
	{
		if ( ! $_GET['id'])
			throw new CHttpException(404,'The requested page does not exist.');

		$id = $_GET['id'];
		$qty = 1;
		$optional = $_POST['optional'];
		$option = $_POST['option'];

		$model = new Cart;

		$data = PrdProduct::model()->findByPk($id);

		if (is_null($data))
			throw new CHttpException(404,'The requested page does not exist.');

		$model->addCart($id, $qty, $data->harga, $option, $optional);
		
		Yii::app()->user->setFlash('addcart',$qty);
		$this->redirect(array('/product/addcart', 'id'=>$data->id));
	}

	public function actionEdit()
	{
		if ( ! $_POST['id'])
			throw new CHttpException(404,'The requested page does not exist.');

		$id = $_POST['id'];
		$qty = $_POST['qty'];
		$optional = $_POST['optional'];
		$option = $_POST['option'];

		$model = new Cart;

		$data = PrdProduct::model()->findByPk($id);

		if (is_null($data))
			throw new CHttpException(404,'The requested page does not exist.');

		$model->addCart($id, $qty, $data->harga, $option, $optional, 'edit');

		// $this->redirect(CHtml::normalizeUrl(array('/cart/shop')));
	}
	
	public function actionDestroy()
	{
		$model = new Cart;
		$model->destroyCart();
	}
	public function actionAddcompare($id)
	{
		$model = new Cart;
		$model->addCompare($id);
	}
	public function actionDeletecompare()
	{
		$model = new Cart;
		$model->deleteCompare($id);
		$this->redirect(CHtml::normalizeUrl(array('/product/index')));
	}
	public function actionViewcompare()
	{
		$model = new Cart;
		$data = $model->viewCompare($id);

		$this->layout='//layoutsAdmin/mainKosong';

		$categoryName = Product::model()->getCategoryName();

		$this->render('viewcompare', array(
			'data'=>$data,
			'categoryName'=>$categoryName,
		));
	}

}