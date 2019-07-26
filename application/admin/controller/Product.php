<?php
namespace app\admin\controller;

use think\Loader;

class Product extends Base
{

    public function lst()
    {
        $list =db('product')->order('id')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        $id=input('id');
        $product=db('product')->find($id);
        if(request()->isPost()){
            $data=[
                'title'=>input('title'),
                'translate'=>input('translate'),
                'content'=>input('content'),
                'bg_url'=>'img/'.$_FILES['bg_url']['name'],
                'img_url'=>'img/'.$_FILES['img_url']['name'],
                'video'=>'video/'.$_FILES['video']['name'],
            ];
            $validate = Loader::validate('Product');
            if(!$validate->check($data)){
                $this->error($validate->getError()); die;
            }
            $data['time']=date('y-m-d h:i:s',time());
            if(db('product')->insert($data)){
                $this->success('添加产品成功！','lst');
            }else{
                $this->error('添加产品失败！');
            }
        }
        $this->assign('product',$product);
        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        $product=db('product')->find($id);
        if(request()->isPost()){
            $data=[
                'title'=>input('title'),
                'translate'=>input('translate'),
                'content'=>input('content'),
            ];
            if(empty($_FILES['bg_url']['name'])){
                $data['bg_url'] = input('bg_url');
            }else{
                $data['bg_url'] = 'img/'.$_FILES['bg_url']['name'];
            }
            if(empty($_FILES['img_url']['name'])){
                $data['img_url'] = input('img_url');
            }else{
                $data['img_url'] = 'img/'.$_FILES['img_url']['name'];
            }
            if(empty($_FILES['video']['name'])){
                $data['video'] = input('video');
            }else{
                $data['video'] = 'video/'.$_FILES['video']['name'];
            }
            $validate = Loader::validate('Product');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError()); die;
            }
            $data['time']=date('y-m-d h:i:s',time());
            $save=db('product')->where('id',$id)->update($data);
            if($save !== false){
                $this->success('修改产品成功！','lst');
            }else{
                $this->error('修改产品失败！');
            }
        }
        $this->assign('product',$product);
        return $this->fetch();
    }

    public function del()
    {
        if (db('product')->delete(input('id'))) {
            $this->success('删除产品信息成功！', 'lst');
        } else {
            $this->error('删除产品信息失败！');
        }
        return $this->fetch();
    }
}
