<?php
namespace app\admin\controller;

use think\Loader;

class Cate extends Base
{
    public function lst()
    {
        $id=input('id');
        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'content'=>input('content'),//表单？
            ];
            $data['time']=date('y-m-d h:i:s',time());
            if(db('about')->where('id',$id)->update($data)){
                $this->success('恭喜修改成功！','lst');
            }else{
                $this->error('修改失败，请重试！');
            }
        }
        $about=db('about')->find($id);
        $this->assign('about',$about);
        return $this->fetch();
    }

    public function join(){
        $join=db('join')->paginate(3);
        $this->assign('join',$join);
        return $this->fetch();
    }

    public function add(){
        if(request()->isPost()){
            $data=[
                'engineer'=>input('engineer'),
                'salary'=>input('salary'),
                'place'=>input('place'),
                'experience'=>input('experience'),
                'duty'=>input('duty'),
            ];
            $validate = Loader::validate('Cate');
            if(!$validate->check($data)){
                $this->error($validate->getError()); die;
            }
            $data['time']=date('y-m-d h:i:s',time());
            if(db('join')->insert($data)){
                $this->success('恭喜添加成功！','join');
            }else{
                $this->error('添加失败，请重试！');
            }
        }
        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        $join=db('join')->find($id);
        if(request()->isPost()){
            $data=[
                'engineer'=>input('engineer'),
                'salary'=>input('salary'),
                'place'=>input('place'),
                'experience'=>input('experience'),
                'duty'=>input('duty'),
            ];
            $validate = Loader::validate('Cate');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError()); die;
            }
            $data['time']=date('y-m-d h:i:s',time());
            $a=db('join')->where('id',$id)->update($data);
            if($a!==false){
                $this->success('恭喜修改成功！','join');
            }else{
                $this->error('修改失败，请重试！');
            }
        }
        $this->assign('join',$join);
        return $this->fetch();
    }

    public function del(){
        if(db('join')->delete(input('id'))){
            $this->success('删除工程师成功！','join');
        }else{
            $this->error('删除工程师失败！');
        }
        return $this->fetch();
    }

}
