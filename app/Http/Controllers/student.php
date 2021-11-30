<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sregister;
use App\Models\syllabus;
use App\Models\notes;
use App\Models\result;
use App\Models\timetable;
use App\Models\feedback;


class student extends Controller
{
    public function __construct()
    {
        $this->obj=new sregister;
        $this->obj1=new syllabus;
        $this->obj2=new notes;
        $this->obj3=new result;
        $this->obj4=new timetable;
        $this->obj5=new feedback;
    }
    public function reg()
    {
        return view('user.register');
    }
    public function login()
    {
        return view('user.login');
    }
    public function feedback()
    {
        return view('user.addfeedback');
    }
    
    
    

    //insert into sregister
    public function store(Request $request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        $paddress=$request->input('paddress');
        $caddress=$request->input('caddress');
        $fname=$request->input('fname');
        $mname=$request->input('mname');
        $dob=$request->input('dob');
        $pin=$request->input('pin');
        $gen=$request->input('gender');
        $dis=$request->input('dis');
        $dept=$request->input('dept');
        $sem=$request->input('sem');
        $phno=$request->input('num');
        $lang=$request->input('lan');
        $lan=implode(',',$lang);
        $pswd=$request->input('pswd');
        $data=['name'=>$name,
                'email'=>$email,
                'paddress'=>$paddress,
                'caddress'=>$caddress,
                'fname'=>$fname,
                'mname'=>$mname,
                'dob'=>$dob,
                'pin'=>$pin,
                'gender'=>$gen,
                'dis'=>$dis,
                'dept'=>$dept,
                'sem'=>$sem,
                'phno'=>$phno,
                'lan'=>$lan,
                'pswd'=>$pswd,
                'utype'=>'student'];
            $this->obj->insertdata('sregisters',$data);
            return redirect('/login');
    }


    
    //login
    public function loginaction(Request $req)
    {
        $email=$req->input('email');
        $pswd=$req->input('pswd');
        // echo $email;
        // echo $pswd;
        // exit();
        $data=$this->obj->selectdata('sregisters',$email,$pswd);
        if(isset($data))
        {
            $req->session()->put(array('sessid'=>$data->id));
            return redirect('/studenthome');
        }
        else
        {
            return redirect('/login')->with('error','invalid username or password!!');
        }
    }


    //student home
    public function shome()
    {
        $id=session('sessid');
        $data['result']=$this->obj->name('sregisters',$id);
        return view('user.studenthome',$data);
    }

    //view syllabus
    public function sviewsyllabus()
    {
        // $data['result']=$this->obj1->selectsyllabus('syllabi');
        $id=session('sessid');
        $data['result']=syllabus::join('sregisters','sregisters.dept','=','syllabi.course')
        ->where('sregisters.id',$id)
        ->select('syllabi.course','syllabi.semester','syllabi.syllabus','syllabi.status')
        ->get();
        return view('user.sviewsyllabus',$data);
    }


    public function sviewnotes()
    {
        // $data['result']=$this->obj2->selectnotes('notes');
        $id=session('sessid');
        $data['result']=notes::join('sregisters','sregisters.dept','=','notes.course')
        ->where('sregisters.id',$id)
        ->select('notes.course','notes.semester','notes.notes')
        ->get();
        return view('user.sviewnotes',$data);
    }


    public function sviewtimetable()
    {
        // $data['result']=$this->obj4->selecttimetable('timetables');
        $id=session('sessid');
        // echo $id;
        // exit();
        $data['result']=timetable::join('sregisters','sregisters.dept','=','timetables.course')
        ->where('sregisters.id',$id)
        ->select('timetables.course','timetables.semester','timetables.subject','timetables.date','timetables.time','timetables.status')
        ->get();
        return view('user.sviewtimetable',$data);
    }


    public function sviewresult()
    {
         $id=session('sessid');
        $data['result']=$this->obj3->selectresult('results');
        return view('user.sviewresult',$data);
    }


    public function addfeedback(request $request)
    {
        $feedback=$request->input('feedback');
        $tname=$request->input('tname');
        $data=['tname'=>$tname,
        'feedback'=>$feedback,];
        $this->obj5->insertfeedback('feedback',$data);
        return redirect('/addfeedback');
    }

    public function logout(request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/login');
    }

    //download
    
    
}
