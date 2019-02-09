<?php
namespace Model;
use Think\Model;

//用户model模型类
class UserModel extends Model{
	//是否批处理验证
	protected $patchValidate=true;
	
	//表单验证规则制定
	//自动验证定义
	protected $_validate=array(
			//用户名验证
			array('username','require','用户名必须填写'),
			array('username','','用户名已存在',0,'unique'),
			//密码验证
			array('password','require','密码必须填写'),
			array('password','5,10','密码位数必须5-10之间',0,'length'),
			//确认密码验证
			array('password2','require','确认密码必须填写'),
			array('password2','password','两次密码必须一致',0,'confirm'),
			//邮箱验证
			array('user_email','email','邮箱格式不正确'),
			//qq验证
			array('user_qq','number','qq号码必须是数字'),
			array('user_qq','5,12','qq号码位数5到12之间',0,'length'),
			//手机号码验证
			array('user_tel','/^1\d{10}$/','手机号码格式不正确'),
			//验证学历
			array('user_xueli','1','学历必须选择一个',0,'notin'),
			//验证爱好--不能少于两项
			array('user_hobby','check_hobby','爱好不能少于两项',0,'callback'),
	);
	//验证爱好的方法
	//params:$arg代表被验证项目的信息值
	function check_hobby($arg){
		//var_dump($arg);  结果：array(2) { [0]=> string(1) "3" [1]=> string(1) "4" } 
		if(count($arg)<2){
			return false;
		}
		return true;
	}
	
	//自动完成
	//自动完成定义
	protected $_auto=array(
			array('user_time','time',1,'function'),//user_time在新增用户的时候通过time()函数给写入数据库
			array('password','md5',1,'function'),//对用户的密码进行md5加密
			array('last_time','time',2,'function'),//用户信息修改的时候自动完成last_time字段的填充
	);
	
	
	//制作方法实现用户名和密码的校验
	//返回值：
	//成功-->当前用户的信息记录
	//失败-->返回false
	
	public function checkNamePwd($name,$pwd){
		//首先验证名字，其次再验证密码
		$info=$this->where("username='$name'")->find();
		if($info!==null){
			//其次再验证密码
			if($info['password']==$pwd){
				return $info;
			}		
		}else{
			return false;
		}
	}
	
	
	
	
}