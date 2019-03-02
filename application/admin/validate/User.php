<?php
namespace app\admin\validate;
use think\Validate;

/**
* 
*/
class User extends Validate
{
	
	protected $rule=[
	'id'=>'requere|max:20',
	'password'=>'requere|max:20|min:6|confirm:repassword',
	'name'=>'requere|max:10|min:3',
	];
	protected $massage=[
	'id.requere'=>'教师工号不能为空',
	'id.max'=>'教师工号不能大于20位',
	'password.requere'=>'密码不能为空',
	'password.max'=>'密码不能大于20位',
	'password.min'=>'密码不能小于6位',
	'password.confirm'=>'两次密码不一致',

	]

}