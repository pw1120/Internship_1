<?php
namespace app\admin\controller;

class File{

    public function rule($rule)
    {
        $time=date('y-m-d h:i:s',time());
        $rule=move_uploaded_file('$time','');
        $this->rule = $rule;
        return $this;
    }

}



