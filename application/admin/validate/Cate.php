<?php
namespace app\admin\validate;

use think\Validate;

class Cate extends Validate
{
    //唯一确定需要绑定表格
    protected $rule = [
        'engineer'  =>  'require|unique:join',
        'salary'   =>  'require',
        'place'   =>  'require',
        'experience'   =>  'require',
        'duty'   =>  'require',
    ];

    protected $message  =   [
        'engineer.require' => '职位名称必须填写！',
        'engineer.unique' => '职位名称唯一，不能重复！',
        'salary' => '薪资必须填写！',
        'place' => '地点必须填写！',
        'experience' => '经验必须填写！',
        'duty' => '职责必须填写！',
    ];

    protected $scene = [
        'edit'  =>  ['engineer'=>'require','salary','place', 'experience','duty'],
    ];

}
