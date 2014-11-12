<?php
namespace Home\Model;
use Think\Model;
class ArticleModel extends Model {
    public function __construct(){
        parent::__construct();
    }

    /**
     * @desc 获取文章列表
     * @param int $id 文章ID
     * @return array
     * @version 1 2014-11-11 RGray
     */
    public function get_list()
    {
    	return $this->where(array('status'=>NORMAL))->select();
    }

    /**
     * @desc 获取文章的详细内容
     * @param int $id 文章ID
     * @return array
     * @version 1 2014-11-11 RGray
     */
    public function get_detail($id){
    	$info = $this->where(array('id'=>$id))->find();
    	$media = D('Media')->where(array('art_id'=>$id))->select();

    	foreach ($media as $m) {
    		switch ($m['type']) {
    			case TEXT:
    				$info['content'] = $m['description'];
    				break;

    			case IMAGE:
    				$info['image'][] = $m;
    				break;

    			case MUSIC:
    				$info['music'][] = $m;
    				break;

    			case VIDEO:
    				$info['video'][] = $m;
    				break;

    			case ANNEX:
    				$info['annex'][] = $m;
    				break;

    			case CODE:
    				$info['code'][] = $m;	
    			
    			default:
    				$info['media'][] = $m;
    				break;
    		}
    	}

    	return $info;
    }

    public function insert_article()
    {
    	
    }
}