<?php
/**
 * Created by PhpStorm.
 * User: zhangjian
 * Date: 2018/8/27
 * Time: 下午11:17
 */
namespace App\Http\Controllers;


use App\Models\Student;

class StudentController extends Controller{

    public function index(){
        $students=Student::paginate(2);
        return view('student.index',[
            'students'=>$students
        ]);
    }
}