<?php
namespace app\admin\controller;

use think\Loader;

class Exhibition extends Base
{

    public function lst()
    {
        $list =db('exhibition')->order('id')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        $id=input('id');
        $exhibition=db('exhibition')->find($id);
        if(request()->isPost()){
            $data=[
                'title'=>input('title'),
                'date'=>input('date'),
                'place'=>input('place'),
            ];
            $validate = Loader::validate('Exhibition');
            if(!$validate->check($data)){
                $this->error($validate->getError()); die;
            }
            $data['time']=date('y-m-d h:i:s',time());
            if(db('exhibition')->insert($data)){
                $this->success('添加展会成功！','lst');
            }else{
                $this->error('添加展会失败！');
            }
        }
        $this->assign('exhibition',$exhibition);
        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        $exhibition=db('exhibition')->find($id);
        if(request()->isPost()){
            $data=[
                'title'=>input('title'),
                'date'=>input('date'),
                'place'=>input('place'),
            ];
            $validate = Loader::validate('Product');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError()); die;
            }
            $data['time']=date('y-m-d h:i:s',time());
            $save=db('exhibition')->where('id',$id)->update($data);
            if($save !== false){
                $this->success('修改产品成功！','lst');
            }else{
                $this->error('修改产品失败！');
            }
        }
        $this->assign('exhibition',$exhibition);
        return $this->fetch();
    }

    public function del()
    {
        if (db('exhibition')->delete(input('id'))) {
            $this->success('删除产品信息成功！', 'lst');
        } else {
            $this->error('删除产品信息失败！');
        }
        return $this->fetch();
    }
}
