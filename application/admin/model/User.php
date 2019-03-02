<?php
namespace app\admin\model;
use think\Model;
use traits\model\SoftDelete;
/**
* 
*/
class User extends Model
{
    protected static $deletetime='delete_time';
	protected auto['password'];
	protected function setPasswordAttr(){
		return md5($value);
	}
}