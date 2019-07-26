<?php
namespace app\admin\validate;

use think\Validate;

class Product extends Validate
{
    //唯一确定需要绑定表格
    protected $rule = [
        'title'  =>  'require|unique:product',
    ];

    protected $message  =   [
        'title.require' => '产品中文标题必须填写！',
        'title.unique' => '产品中文标题唯一，不能重复！',
    ];

    protected $scene = [
        'edit'  =>  ['title'=>'require'],
    ];

}
