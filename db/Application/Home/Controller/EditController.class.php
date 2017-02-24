<?php
namespace Home\Controller;

use Think\Controller;

class EditController extends Controller{
    public function index(){

    }

    public function deleteStudentInfo(){
        if(IS_GET){
            $sid = $_GET['sid'];
            $students = M('students');
            $students->where("sid = $sid")->delete();
            if(is_null($students->where("sid = $sid")->find())){
                $this->success('您已经成功删除目标信息',U('Query/index'));
            }
        }
    }

    public function deleteSelectedCourse(){
        if(IS_GET){
            $cid = $_GET['cid'];
            $sid = $_GET['sid'];
            $selectedCourse = M('selectedcourse');
            $selectedCourse->where("cid = $cid and sid = $sid")->delete();

            $this->success('您已经成功删除目标信息',U("Query/query?keyword=$sid"));
        }
    }

    public function deleteCourse(){
        if(IS_GET){
            $cid = $_GET['cid'];
            $course = M('courses');
            $course->where("cid = $cid")->delete();

            $this->success('您已经成功删除目标信息',U('Query/index'));
        }
    }
    
    public function editStudentInfo(){
        if(IS_GET){
            $sid = $_GET['sid'];
            $sname = $_GET['sname'];
            $sex = $_GET['sex'];
            $schoolAge = $_GET['schoolAge'];
            $schoolYear = $_GET['schoolYear'];
            $class = $_GET['class'];
            
            $this->assign('sid',$sid);
            $this->assign('sname',$sname);
            $this->assign('sex',$sex);
            $this->assign('schoolAge',$schoolAge);
            $this->assign('schoolYear',$schoolYear);
            $this->assign('class',$class);

            $this->display('edit_student_info');
        }
    }
    
    public function changeStudentInfo(){
        if(IS_GET){
            $student = M('students');
            $studentInfo['sid'] = $_GET['sid'];
            $sid = $studentInfo['sid'];
            $studentInfo['sname'] = $_GET['sname'];
            $studentInfo['sex'] = $_GET['sex'];
            $studentInfo['schoolAge'] = $_GET['schoolAge'];
            $studentInfo['schoolYear'] = $_GET['schoolYear'];
            $studentInfo['class'] = $_GET['class'];

            $student->where("sid = $sid")->save($studentInfo);

            $this->success('恭喜您，信息修改成功',U("Query/query?keyword=$sid"));
        }
    }

    public function editCourseInfo(){
        if(IS_GET){
            $cid = $_GET['cid'];
            $cname = $_GET['cname'];
            $professor = $_GET['professor'];
            $credit = $_GET['credit'];
            $tgrade = $_GET['tgrade'];
            $canceledYear = $_GET['canceledYear'];

            $this->assign('cid',$cid);
            $this->assign('cname',$cname);
            $this->assign('professor',$professor);
            $this->assign('credit',$credit);
            $this->assign('tgrade',$tgrade);
            $this->assign('canceledYear',$canceledYear);

            $this->display('edit_course_info');

        }
    }

    public function changeCourseInfo(){
        if(IS_GET){
            $course = M('courses');
            $courseInfo['cid'] = $_GET['cid'];
            $cid = $courseInfo['cid'];
            $courseInfo['cname'] = $_GET['cname'];
            $courseInfo['professor'] = $_GET['professor'];
            $courseInfo['credit'] = $_GET['credit'];
            $courseInfo['tgrade'] = $_GET['tgrade'];
            $courseInfo['canceledYear'] = $_GET['canceledYear'];

            $course->where("cid = $cid")->save($courseInfo);

            $this->success('恭喜您，信息修改成功',U("Query/query?keyword=$cid"));
        }
    }


}