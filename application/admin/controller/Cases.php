<?php
namespace app\admin\controller;

use think\Loader;

class Cases extends Base
{

    public function lst()
    {
        $list =db('case')->order('id')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function add()
    {
        $id=input('id');
        $case=db('case')->find($id);
        if(request()->isPost()){
            $data=[
                'title'=>input('title'),
                'translate'=>input('translate'),
                'bg_url'=>'img/'.$_FILES['bg_url']['name'],
                'img_url'=>'img/'.$_FILES['img_url']['name'],
                'content'=>input('content'),
            ];
            $validate = Loader::validate('Cases');
            if(!$validate->check($data)){
                $this->error($validate->getError()); die;
            }
            $data['time']=date('y-m-d h:i:s',time());
            if(db('case')->insert($data)){
                $this->success('添加方案成功！','lst');
            }else{
                $this->error('添加方案失败！');
            }
        }
        $this->assign('case',$case);
        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        $case=db('case')->find($id);
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
            $validate = Loader::validate('Cases');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError()); die;
            }
            $data['time']=date('y-m-d h:i:s',time());
            $save=db('case')->where('id',$id)->update($data);
            if($save !== false){
                $this->success('修改方案成功！','lst');
            }else{
                $this->error('修改方案失败！');
            }
        }
        $this->assign('case',$case);
        return $this->fetch();
    }

    public function del()
    {
        if (db('case')->delete(input('id'))) {
            $this->success('删除方案成功！', 'lst');
        } else {
            $this->error('删除方案失败！');
        }
        return $this->fetch();
    }
}
