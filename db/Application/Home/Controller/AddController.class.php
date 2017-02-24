<?php
namespace Home\Controller;

use Think\Controller;
use Think\Model;

class AddController extends Controller{
    public function index(){
        
    }
    
    public function editStudentInfo(){
        $this->display('edit_student_info');
    }
    
    public function submitStudentInfo(){
        if(IS_GET){
            $student = M('students');
            
            $data['sid'] = I('get.sid');
            $sid = $data['sid'];
            $data['sname'] = I('get.sname');
            $data['sex'] = I('get.sex');
            $data['schoolAge'] = I('get.schoolAge');
            $data['schoolYear'] = I('get.schoolYear');
            $data['class'] = I('get.class');

            if(is_null($student->where("sid = $sid")->find())){
                $student->add($data);
                if(is_null($student->where("sid = $sid")->find())){
                    $this->error('学生添加失败，请重新添加');
                }else{
                    $this->success('学生添加成功',U('Query/index'));
                }

            }else{
                $this->error('该学生已经存在，请检查输入的学生信息是否正确');
            }
        }
    }
    
    public function editCourseInfo(){
        $this->display('edit_course_info');
    }
    
    public function submitCourseInfo(){
        if(IS_GET){
            $course = M('courses');

            $data['cid'] = I('get.cid');
            $cid = $data['cid'];
            $data['cname'] = I('get.cname');
            $data['professor'] = I('get.professor');
            $data['credit'] = I('get.credit');
            $data['tgrade'] = I('get.tgrade');
            $data['canceledYear'] = I('get.canceledYear');
            
            if(is_null($course->where("cid = $cid")->find())){
                $course->add($data);
                if(is_null($course->where("cid = $cid")->select())){
                    $this->error('课程添加失败，请重新添加');
                }else{
                    $this->success('课程添加成功',U('Query/index'));
                }

            }else{
                $this->error('该课程已经存在，请检查输入的课程信息是否正确');
            }
        }
    }
    
    public function addSelectedCourse(){
        $sid = $_GET['sid'];
        $this->assign('sid',$sid);
        $this->display('add_selected_course');
    }

    public function submitSelectedCourse(){
        if(IS_GET){
            $sid = I('get.sid');
            $cid = I('get.cid');
            $selectedYear = I('get.selectedYear');
            $score = I('get.score');

            $course = M('courses');
            $selectedCourse = M('selectedcourse');
            $test = $course->where("cid = $cid")->select();
            $Model = new Model();

            if($test){
                //$selectedCourse->add($data);
                $sql = "insert into selectedcourse(sid,cid,selectedYear,scores) values( $sid,$cid,$selectedYear,$score)";
                $Model->execute($sql);
                if(is_null($selectedCourse->where("cid = $cid")->find())){
                    $this->error("选课失败，请重新选择！");
                }
                else if($selectedCourse >= $test[0]['canceledyear']){
                    $this->error('改课程已被取消，请检查后重新选择！');
                }
                else{
                    $this->success('恭喜你，选课成功',U("Query/query?keyword=$sid"));
                }
            }else{
                $this->error("没有课程编号为$cid 的课程，请检查你的输入！");
            }

        }
    }
}