<?php
namespace app\admin\controller;

class Contact extends Base
{
    public function contact()
    {
        $id=input('id');
        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'content'=>input('content'),
            ];
            $data['time']=date('y-m-d h:i:s',time());
            if(db('contact')->where('id',$id)->update($data)){
                $this->success('恭喜修改成功！');
            }else{
                $this->error('修改失败，请重试！');
            }
        }
        $contact=db('contact')->find($id);
        $this->assign('contact',$contact);
        return $this->fetch();
    }

}
