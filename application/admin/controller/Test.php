<?php
namespace app\admin\controller;

class Test extends Base
{
    public function test1(){
        $id=input('id');
        $test1=db('test1')->find($id);
        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
            ];
            $data['time']=date('y-m-d h:i:s',time());
            if($_FILES['img']['tmp_name']){
                $file = request()->file('img');
                $info = $file->rule('test')->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['img']='/uploads/'.$info->getSaveName();
            }
            $save=db('test1')->where('id',$id)->update($data);
            if($save !== false){
                $this->success('修改成功！','test1');
            }else{
                $this->error('修改失败！');
            }
        }
        $this->assign('test1',$test1);
        return $this->fetch();
    }

    public function del()
    {
        $id=input('id');
        $test1=db('test1')->find($id);
        if (db('test1')->where('id',$id)->update(['img'=>''])) {
            $this->success('删除图片成功！', 'test1');
        } else {
            $this->error('删除图片失败！');
        }
        return $this->fetch();
    }

    public function test2(){
        $id=input('id');
        $title=input('title');
        $test2 =db('test2')->order('num desc,id desc')->paginate(3);
        $this->assign('test2',$test2);
        if(request()->isPost()){
            if($title != ''){
                if(db('test2')->where('title',$title)->find()){
                    $data=[
                        'id'=>input('id'),
                        'title'=>input('title'),
                        'num'=>input('num'),
                    ];
                    $data['time']=date('y-m-d h:i:s',time());
                    $save=db('test2')->where('title',$title)->update($data);
                    if($save !== false){
                        $this->success('修改成功！','test2');
                    }else{
                        $this->error('修改失败！');
                    }
                }else{
                    $data=[
                        'id'=>input('id'),
                        'title'=>input('title'),
                        'num'=>input('num'),
                    ];
                    $data['time']=date('y-m-d h:i:s',time());
                    $save=db('test2')->insert($data);
                    if($save !== false){
                        $this->success('增加成功！','test2');
                    }else{
                        $this->error('增加失败！');
                    }
                }
            }else{
                $this->error('标题不能为空！');
            }
        }
        return $this->fetch();
    }

    public function save(){
        $id=input('id');
        if(db('test2')->find($id)){
            $data=[
                'title'=>input('title'),
                'num'=>input('num'),
            ];
            $data['time']=date('y-m-d h:i:s',time());
            $save=db('test2')->where('id',$id)->update($data);
            if($save !== false){
                $this->success('修改成功！','test2');
            }else{
                $this->error('修改失败！');
            }
        }else{
            $data=[
                'title'=>input('title'),
                'num'=>input('num'),
            ];
            $data['time']=date('y-m-d h:i:s',time());
            $save=db('test2')->insert($data);
            if($save !== false){
                $this->success('修改成功！','test2');
            }else{
                $this->error('修改失败！');
            }
        }
        return $this->fetch();
    }

}
