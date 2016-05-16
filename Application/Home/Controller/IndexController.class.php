<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	/**
	* 首页
	*
	*/
    public function index(){
        $this->display();
    }
    /**
    * 平台特色
    *
    */
    public function platform(){
    	$this->display();
    }
    /**
    * 开发工具
    *
    */
    public function tools(){
    	$this->display();
    }
    /**
    * 文档
    *
    */
    public function document(){
    	$this->display();
    }
    /**
    * 开发支持
    *
    */
    public function support(){
    	$this->display();
    }
    /**
    * 关于我们
    *
    */
    public function aboutus(){
    	$this->display();
    }
}