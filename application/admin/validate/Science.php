<?php
namespace app\admin\validate;

use think\Validate;

class Science extends Validate
{
    //唯一确定需要绑定表格
    protected $rule = [
        'title'  =>  'require|unique:science',
    ];

    protected $message  =   [
        'title.require' => '术语名称必须填写！',
        'title.unique' => '术语名称唯一，不能重复！',
    ];

    protected $scene = [
        'edit'  =>  ['title'=>'require'],
    ];

}
