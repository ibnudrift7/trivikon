<?php

class RestapiController extends Controller
{

	public function actionLogin()
	{
		$this->layout='//layouts/_blank';

		$posts = $_POST;
		
		$query_data = Yii::app()->db->createCommand()
        ->select('me_member.*')
        ->from('me_member')
        ->where('email = :username AND pass = :passw', array(':username'=>$posts['login_username'], ':passw'=> sha1($posts['login_password'])))
        ->queryRow();

        $feedback_msg['auth'] = 'log';

        if ( $query_data && count($query_data) > 1 ) {
        	$feedback_msg['login_data'] = $query_data;
        	$feedback_msg['auth_message'] = 'success';
        }else{
        	$feedback_msg['auth_message'] = 'fail';
        }

        echo json_encode($feedback_msg, JSON_PRETTY_PRINT);
	}

	public function actionEditprofile()
	{
		$this->layout='//layouts/_blank';

		$posts = $_POST;

		$data = MeMember::model()->find('id = :u_id', array(':u_id'=> $posts['user_id']));
		$s_name = explode(' ', $posts['name']);
		$del_first = array_shift($s_name);
		$last_names = implode('', $s_name);
		
		$data->first_name = $s_name[0];
		$data->last_name = $last_names;
		$data->email = $posts['email'];
		$data->hp = $posts['hp'];
		$data->no_ktp = $posts['no_ktp'];
		$data->jenis_kelamin = $posts['jenis_kelamin'];
		$data->tanggal_lahir = $posts['tanggal_lahir'];
		$data->perusahaan = $posts['perusahaan'];
		$data->bidang_usaha = $posts['bidang_usaha'];
		$data->save(false);
		$feedback_msg['auth_message'] = 'success';

		echo json_encode($feedback_msg, JSON_PRETTY_PRINT);
	}

	public function actionSaveMarket()
	{
		$this->layout='//layouts/_blank';

		$posts = $_POST;

		$data = new TbMarket;
		$data->user_post_id = trim( $posts['user_post_id'] );
		$data->title = trim( $posts['title'] );
		$data->content = trim( $posts['content'] );
		$data->picture = null;
		$data->harga = trim( $posts['harga'] );
		$data->satuan = trim( $posts['satuan'] );
		$data->date_post = date('Y-m-d H:i:s');
		$data->date_expired = date('Y-m-d', strtotime('+1 month'));
		$data->location = trim( $posts['location'] );
		$data->actives = 1;
		$data->has_deal = 0;
		$data->save(false);

		$feedback_msg['auth_message'] = 'success';

		echo json_encode($feedback_msg, JSON_PRETTY_PRINT);
	}

	public function actionShowmarketby()
	{
		$this->layout='//layouts/_blank';

		$posts = $_POST;
		$data = TbMarket::model()->findAll('user_post_id = :user_id', array(':user_id'=>$posts['user_id']));

		$str = '<ul>';
		if ( $data && count($data) > 0 ) {
			foreach ($data as $key => $value) {
            $str .= '<li>
              <a href="#" class="item-link item-content">
                <div class="item-media">
                	<img src="https://cdn.framework7.io/placeholder/people-160x160-1.jpg" width="80" />
                </div>
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title">CARI</div>
                  </div>
                  <div class="item-text">'.$value->title.'</div>
                  <div class="item-text">Rp. '.number_format($value->harga).'</div>
                  <div class="item-text-row">
                    <div class="item-text float-left"><small>'. date("d F Y", strtotime($value->date_post)) .'</small></div>
                    <div class="item-text float-right"><small><i class="fa fa-trash"></i> Delete</small></div>
                  </div>
                </div>
              </a>
            </li>';
            // <div class="item-text float-right"><small>6:00 P.M</small></div>
			}
		} else {
	    	$str .= '<li><div class="item-inner"><h4 class="text-align-center">No Data</h4></div></li>';
		}
	    $str .= '</ul>';

	    $feedback_msg['auth_message'] = 'success';
		$feedback_msg['data'] = $str;

		echo json_encode($feedback_msg, JSON_PRETTY_PRINT);
	}

	public function actionShowmarket()
	{
		$this->layout='//layouts/_blank';

		$posts = $_POST;
		$data = TbMarket::model()->findAll('t.actives = 1 ORDER BY t.date_post DESC');

		$str = '<ul>';
		if ( $data && count($data) > 0 ) {
			foreach ($data as $key => $value) {
            $str .= '<li>
              <a href="/detail/" class="item-link item-content">
                <div class="item-media">
                	<img src="https://cdn.framework7.io/placeholder/people-160x160-1.jpg" width="80" />
                </div>
                <div class="item-inner">
                  <div class="item-title-row">
                    <div class="item-title">CARI</div>
                  </div>
                  <div class="item-text">'.$value->title.'</div>
                  <div class="item-text">Rp. '.number_format($value->harga).'</div>
                  <div class="item-text-row">
                    <div class="item-text float-left"><small>'. date("d F Y", strtotime($value->date_post)) .'</small></div>
                    <div class="item-text float-right"><small>'. date("H i", strtotime($value->date_post)) .'</small></div>
                  </div>
                </div>
              </a>
            </li>';
            // <div class="item-text float-right"><small>6:00 P.M</small></div>
			}
		} else {
	    	$str .= '<li><div class="item-inner"><h4 class="text-align-center">No Data</h4></div></li>';
		}
	    $str .= '</ul>';

	    $feedback_msg['auth_message'] = 'success';
		$feedback_msg['data'] = $str;

		echo json_encode($feedback_msg, JSON_PRETTY_PRINT);
	}

}