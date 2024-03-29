<?php
namespace app\admin\controller;

use think\Loader;

class Admin extends Base
{

    public function lst()
    {
        $list =db('admin')->order('id')->paginate(3);
    	$this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {	
    	if(request()->isPost()){
			$data=[
    			'username'=>input('username'),
    			'password'=>input('password'),
    		];
    		$validate = Loader::validate('Admin');
    		if(!$validate->scene('add')->check($data)){
			   $this->error($validate->getError()); die;
			}
            $data['time']=date('y-m-d h:i:s',time());
    		if(db('admin')->insert($data)){
    			$this->success('添加管理员成功！','lst');
    		}else{
    			$this->error('添加管理员失败！');
    		}
    	}
        return $this->fetch();
    }

    public function edit(){
    	$id=input('id');
    	$admins=db('admin')->find($id);
    	if(request()->isPost()){
    		$data=[
    			'id'=>input('id'),
    			'username'=>input('username'),
    		];
    		if(input('password')){
				$data['password']=(input('password'));
			}else{
				$data['password']=$admins['password'];
			}
			$validate = Loader::validate('Admin');
    		if(!$validate->scene('edit')->check($data)){
			   $this->error($validate->getError()); die;
			}
            $data['time']=date('y-m-d h:i:s',time());
            $save=db('admin')->where('id',$id)->update($data);
    		if($save !== false){
    			$this->success('修改管理员成功！','lst');
    		}else{
    			$this->error('修改管理员失败！');
    		}
    	}
    	$this->assign('admins',$admins);
    	return $this->fetch();
    }

    public function del(){
    	$id=input('id');
    	if($id != 2){
    		if(db('admin')->delete(input('id'))){
    			$this->success('删除管理员成功！','lst');
    		}else{
    			$this->error('删除管理员失败！');
    		}
    	}else{
    		$this->error('初始化管理员不能删除！');
    	}
    }

    public function logout(){
        session(null);
        $this->success('退出成功！','Login/index');
    }
}
