<?php
namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller{
    public function login(){
        if (IS_GET) {
            $teacher = M('teacher');
            $username = I('get.username');
            $password = I('get.password');
            $data = $teacher->where(array('username' => $username))->find();
            if (!$username || !$password) {
                $this->error("请将表单填写完整");
            }

            if ($data) {
                if ($username== $data['username'] && $password == $data['password']) {
                    cookie('username',$username,3600);
                    cookie('password',$password,3600);

                    $_SESSION['username'] = $username;

                    $this->success('登陆成功',U('Query/index'));
                } else {
                    $this->error('密码输入错误');
                }
            }
            else{

                $this->error('用户名不存在，请重新输入');
            }
        }
    }

    public function logout(){
        $this->success('系统退出成功','http://localhost/db/index.php');
    }
}