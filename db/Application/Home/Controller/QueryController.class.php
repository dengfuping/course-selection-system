<?php
namespace Home\Controller;

use Think\Controller;
use Think\Model;

class QueryController extends Controller{
    public function index(){
        $this->display('index');
    }

    public function courseInfo(){
        $this->display('course');
    }
    
    public function query(){
        if(IS_GET){
            $keyword = I('get.keyword');

            if(strpos($keyword,' ')){
                $keywordArr = explode(' ',$keyword);
                $keyword1 = $keywordArr[0];
                $keyword2 = $keywordArr[1];
                if(is_numeric($keyword1)){
                    //根据学生学号和课程编号查询该生该课程的成绩
                    if(is_numeric($keyword2)){
                        $selectedCourse = M('selectedcourse');
                        $students = M('students');
                        $course = M('courses');
                        $sname = $students->where("sid = $keyword1")->getField('sname');
                        $cname = $course->where("cid = $keyword2")->getField('cname');
                        $score = $selectedCourse->where("sid = $keyword1 AND cid = $keyword2")->getField('scores');
                        $this->assign('sname',$sname);
                        $this->assign('cname',$cname);
                        $this->assign('score',$score);
                        $this->display('student_cgrade');

                    }
                    //根据学生学号和课程名称查询该生该课程的成绩
                    else{
                        $selectedCourse = M('selectedcourse');
                        $students = M('students');
                        $course = M('courses');
                        $sname = $students->where("sid = $keyword1")->getField('sname');
                        $cname = $keyword2;
                        $cid = $course->where("cname = '$keyword2'")->getField('cid');
                        $score = $selectedCourse->where("sid = $keyword1 AND cid = $cid")->getField('scores');
                        $this->assign('sname',$sname);
                        $this->assign('cname',$cname);
                        $this->assign('score',$score);
                        $this->display('student_cgrade');
                    }
                }
                else{
                    //根据学生姓名和课程编号查询该生该课程的成绩
                    if(is_numeric($keyword2)){
                        $selectedCourse = M('selectedcourse');
                        $students = M('students');
                        $course = M('courses');
                        $sname = $keyword1;
                        $cname = $course->where("cid = $keyword2")->getField('cname');
                        $sid = $students->where("sname = '$keyword1'")->getField('sid');
                        $score = $selectedCourse->where("sid = $sid AND cid = $keyword2")->getField('scores');
                        $this->assign('sname',$sname);
                        $this->assign('cname',$cname);
                        $this->assign('score',$score);
                        $this->display('student_cgrade');
                    }
                    //根据学生姓名和课程名称查询该生该课程的成绩
                    else{
                        $selectedCourse = M('selectedcourse');
                        $students = M('students');
                        $course = M('courses');
                        $sname = $keyword1;
                        $cname = $keyword2;
                        $sid = $students->where("sname = '$keyword1'")->getField('sid');
                        $cid = $course->where("cname = '$keyword2'")->getField('cid');
                        $score = $selectedCourse->where("sid = $sid AND cid = $cid")->getField('scores');
                        $this->assign('sname',$sname);
                        $this->assign('cname',$cname);
                        $this->assign('score',$score);
                        $this->display('student_cgrade');
                    }
                }
            }
            else{
                if(is_numeric($keyword)){
                    //通过课程编号查询课程信息和该课程的选课情况
                    if(strlen($keyword) == 4){
                        $course = M('courses');
                        $courseInfo = $course->where(array('cid' => $keyword))->select();

                        $Model = new Model();
                        $sql = "select * from students where sid in (select sid from selectedcourse where cid = $keyword)";
                        $data = $Model->query($sql);
                        $cname = $course->where("cid = $keyword")->getField('cname');
                        $this->assign('data',$data);

                        $sql2 = "select scores from selectedcourse where cid = $keyword";
                        $scores = $Model->query($sql2);
                        $count1 = 0;
                        $count2 = 0;
                        $count3 = 0;
                        $count4 = 0;
                        $count5 = 0;
                        $count6 = 0;
                        foreach($scores as $value)
                        {
                            foreach($value as $score)
                            {
                                if($score < 60)
                                    $count1++;
                                else if($score <= 69)
                                    $count2++;
                                else if($score <= 79)
                                    $count3++;
                                else if($score <= 89)
                                    $count4++;
                                else if($score <= 99)
                                    $count5++;
                                else
                                    $count6++;
                            }
                        }

                        $this->assign('count1',$count1);
                        $this->assign('count2',$count2);
                        $this->assign('count3',$count3);
                        $this->assign('count4',$count4);
                        $this->assign('count5',$count5);
                        $this->assign('count6',$count6);

                        if($courseInfo){
                            $this->assign('courseInfo',$courseInfo);
                            $this->assign('cname',$cname);
                            $this->display('course');
                        }
                        else{
                            $this->error('您所要查询的信息不存在，请重新输入');
                        }
                    }
                    //通过学号查询学生的基本信息或所选课的情况
                    else{
                        $students = M('students');
                        $studentInfo = $students->where(array('sid' => $keyword))->select();
                        $sname = $students->where("sid = $keyword")->getField('sname');

                        //$Model = new Model();
                        //$selectedCourse = $Model->query("select * from courses where cid in (select cid from selectedcourse where sid = $keyword)");
                        $Model = new Model();
                        $sql = "select * from courses where cid in (select cid from selectedcourse where sid = $keyword)";
                        $selectedCourse = $Model->query($sql);
                        
                        if($studentInfo){
                            $this->assign('studentInfo',$studentInfo);
                            $this->assign('sname',$sname);
                            $this->assign('sid',$keyword);
                            $this->assign('selectedCourse',$selectedCourse);
                            $this->display('student');
                        }
                        else{
                            $this->error('您所要查询的信息不存在，请重新输入');
                        }
                    }
                }
                else{
                    //通过课程名称查询课程信息和该课程的选课情况
                    if(strlen($keyword) >= 12){
                        $course = M('courses');
                        $courseInfo = $course->where(array('cname' => $keyword))->select();

                        $Model = new Model();
                        $sql = "select * from students where sid in (select sid from selectedcourse where cid in (select cid from courses where cname = '$keyword'))";
                        $data = $Model->query($sql);
                        $this->assign('data',$data);

                        $sql2 = "select scores from selectedcourse where cid in (select cid from courses where cname = '$keyword')";
                        $scores = $Model->query($sql2);
                        $count1 = 0;
                        $count2 = 0;
                        $count3 = 0;
                        $count4 = 0;
                        $count5 = 0;
                        $count6 = 0;
                        foreach($scores as $value)
                        {
                            foreach($value as $score)
                            {
                                if($score < 60)
                                    $count1++;
                                else if($score <= 69)
                                    $count2++;
                                else if($score <= 79)
                                    $count3++;
                                else if($score <= 89)
                                    $count4++;
                                else if($score <= 99)
                                    $count5++;
                                else
                                    $count6++;
                            }
                        }

                        $this->assign('count1',$count1);
                        $this->assign('count2',$count2);
                        $this->assign('count3',$count3);
                        $this->assign('count4',$count4);
                        $this->assign('count5',$count5);
                        $this->assign('count6',$count6);


                        if($courseInfo){
                            $this->assign('courseInfo',$courseInfo);
                            $this->assign('cname',$keyword);
                            $this->display('course');
                        }
                        else{
                            $this->error('您所要查询的信息不存在，请重新输入');
                        }
                    }
                    //通过学生姓名查询学生的的基本信息和所选课的情况
                    else{
                        $students = M('students');
                        $studentInfo = $students->where(array('sname' => $keyword))->select();
                        //$sid = $students->where("sname = $keyword")->getField('sid');

                        $Model = new Model();
                        $sql = "select * from courses where cid in (select cid from selectedcourse where sid in (select sid from students where sname = '$keyword'))";
                        $selectedCourse = $Model->query($sql);
                        $this->assign('selectedCourse',$selectedCourse);

                        if($studentInfo){
                            $this->assign('studentInfo',$studentInfo);
                            $this->assign('sname',$keyword);
                            //$this->assign('sid',$sid);
                            $this->display('student');
                        }
                        else{
                            $this->error('您所要查询的信息不存在，请重新输入');
                        }
                    }
                }
            }
        }
    }

}