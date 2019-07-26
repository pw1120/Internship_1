<?php
namespace app\admin\controller;

use think\Loader;

class Science extends Base
{

    public function lst()
    {
        $list =db('science')->order('id')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        $id=input('id');
        $science=db('science')->find($id);
        if(request()->isPost()){
            $data=[
                'title'=>input('title'),
                'content'=>input('content'),
            ];
            $validate = Loader::validate('Science');
            if(!$validate->check($data)){
                $this->error($validate->getError()); die;
            }
            $data['time']=date('y-m-d h:i:s',time());
            if(db('science')->insert($data)){
                $this->success('添加术语成功！','lst');
            }else{
                $this->error('添加术语失败！');
            }
        }
        $this->assign('science',$science);
        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        $science=db('science')->find($id);
        if(request()->isPost()){
            $data=[
                'title'=>input('title'),
                'content'=>input('content'),
            ];
            $validate = Loader::validate('Science');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError()); die;
            }
            $data['time']=date('y-m-d h:i:s',time());
            $save=db('science')->where('id',$id)->update($data);
            if($save !== false){
                $this->success('修改产品成功！','lst');
            }else{
                $this->error('修改产品失败！');
            }
        }
        $this->assign('science',$science);
        return $this->fetch();
    }

    public function del()
    {
        if (db('science')->delete(input('id'))) {
            $this->success('删除产品信息成功！', 'lst');
        } else {
            $this->error('删除产品信息失败！');
        }
        return $this->fetch();
    }

    public function lok()
    {
        $id=input('id');
        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'content'=>input('content'),
            ];
            if(empty($_FILES['poster']['name'])){
                $data['poster'] = input('poster');
            }else{
                $data['poster'] = 'img/'.$_FILES['poster']['name'];
            }
            if(empty($_FILES['video']['name'])){
                $data['video'] = input('video');
            }else{
                $data['video'] = 'video/'.$_FILES['video']['name'];
            }
            $data['time']=date('y-m-d h:i:s',time());
            if(db('science_video')->where('id',$id)->update($data)){
                $this->success('恭喜修改成功！','lok');
            }else{
                $this->error('修改失败，请重试！');
            }
        }
        $science=db('science_video')->find($id);
        $this->assign('science',$science);
        return $this->fetch();
    }
}
