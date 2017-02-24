<?php
namespace Home\Controller;

use Think\Controller;
use Think\Model;

class GradeController extends Controller{
    public function studentsAverage(){
        $Model = new Model();
        $sql = "select selectedcourse.sid,students.sname,students.sex,students.schoolYear,students.class,sum(credit*scores)/sum(credit) as average from selectedcourse,courses,students where selectedcourse.sid = students.sid and selectedcourse.cid = courses.cid group by selectedcourse.sid";
        $studentsAverage = $Model->query($sql);
        if($studentsAverage){
            $this->assign('studentsAverage',$studentsAverage);
            $this->display('students_average');
        }
    }

    public function classesAverage(){
        $Model = new Model();
        $sql = "select tmp.schoolYear,tmp.class,sum(tmp.average)/count(*) as average from (select students.schoolYear,students.class,sum(credit*scores)/sum(credit) as average from selectedcourse,courses,students where selectedcourse.sid = students.sid and selectedcourse.cid = courses.cid group by selectedcourse.sid) as tmp group by tmp.class";
        $classesAverage = $Model->query($sql);
        $average1 = $classesAverage[0]['average'];
        $average2 = $classesAverage[1]['average'];
        $average3 = $classesAverage[2]['average'];
        $average4 = $classesAverage[3]['average'];
        if($classesAverage){
            $this->assign('average1',$average1);
            $this->assign('average2',$average2);
            $this->assign('average3',$average3);
            $this->assign('average4',$average4);
            $this->assign('classesAverage',$classesAverage);
            $this->display('classes_average');
        }
    }

    public function coursesAverage(){
        $Model = new Model();
        $sql = "select selectedcourse.cid,courses.cname,courses.professor,courses.credit,count(*) as totalpersons,sum(scores)/count(*) as average from students,courses,selectedcourse where selectedcourse.sid = students.sid and selectedcourse.cid = courses.cid group by selectedcourse.cid";
        $coursesAverage = $Model->query($sql);
        $average1 = $coursesAverage[0]['average'];
        $average2 = $coursesAverage[1]['average'];
        $average3 = $coursesAverage[2]['average'];
        $average4 = $coursesAverage[3]['average'];
        $average5 = $coursesAverage[4]['average'];
        $average6 = $coursesAverage[5]['average'];
        $average7 = $coursesAverage[6]['average'];
        $average8 = $coursesAverage[7]['average'];
        $average9 = $coursesAverage[8]['average'];
        $average10 = $coursesAverage[9]['average'];
        $average11 = $coursesAverage[10]['average'];
        $average12 = $coursesAverage[11]['average'];
        $average13 = $coursesAverage[12]['average'];
        $average14 = $coursesAverage[13]['average'];
        if($coursesAverage){
            $this->assign('average1',$average1);
            $this->assign('average2',$average2);
            $this->assign('average3',$average3);
            $this->assign('average4',$average4);
            $this->assign('average5',$average5);
            $this->assign('average6',$average6);
            $this->assign('average7',$average7);
            $this->assign('average8',$average8);
            $this->assign('average9',$average9);
            $this->assign('average10',$average10);
            $this->assign('average11',$average11);
            $this->assign('average12',$average12);
            $this->assign('average13',$average13);
            $this->assign('average14',$average14);
            $this->assign('coursesAverage',$coursesAverage);
            $this->display('courses_average');
        }
    }
}