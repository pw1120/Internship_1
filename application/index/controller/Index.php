<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller{

    public function index(){
        return $this->fetch();
    }

    public function about(){
        $data = db('about')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function case(){
        $data=db('case')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function contact(){
        $data=db('contact')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function exhibition(){
        $data=db('exhibition')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function exhibition_page(){
        return $this->fetch();
    }

    public function join(){
        $data=db('join')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function product(){
        $data=db('product')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function science(){
        $data=db('science')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function case_page(){
        $id=input('id');
        $data=db('case')->where('id',$id)->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function science_page(){
        $id=input('id');
        $data=db('science')->where('id',$id)->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function science_video(){
        $data=db('science_video')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function product_page(){
        $id=input('id');
        $data=db('product')->where('id',$id)->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

}