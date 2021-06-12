<?php
namespace app\common\model;

use zero\Model;

class Base extends Model
{

	public function getList($page = '1', $limit = '10', $where = [], $fields = '*', $order = 'id DESC'){
		$data = $this->withTrashedData(false)->field($fields)->where($where)->limit($page-1, $limit)->select();
		$data = $data->toArray();
		
		$res['data'] = $data;
		$res['page'] = $page;
		$res['limit'] = $limit;
		
		return $data;
	}


}