<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
	/**
	 * 个人主页
	 *
	 */
    public function index(){

       $this->display();
    }


     /**
      * 后台登陆
      *
      */

     public function login()
     {
        $this->display();
     }

    /**
     * 个人资料
     *
     */

    public function personal()
    {
    	$this->display();
    }

    /**
     * 认证资料
     *
     */

    public function information()
    {
    	$this->display();
    }

    /**
     * 密码管理
     *
     */

    public function password()
    {
    	$this->display();
    }

    /**
     *  推荐管理
     *
     */

    public function recommend()
    {
    	$this->display();
    }

    /**
     * 资金管理
     *
     */

    public function capital()
    {
    	$this->display();
    }

    /**
     * 我的投资
     *
     */

    public function investment()
    {
    	$this->display();
    }

    /**
     * 我的贷款
     *
     */

    public function loan()
    {
    	$this->display();
    }
}