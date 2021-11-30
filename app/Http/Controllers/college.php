<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\tregister;
use App\Models\syllabus;
use App\Models\timetable;
use App\Models\result;
use App\Models\feedback;

class college extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->obj=new admin;
        $this->obj1=new tregister;
        $this->obj2=new syllabus;
        $this->obj3=new timetable;
        $this->obj4=new result;
        $this->obj5=new feedback;
    }
  
    public function index()
    {
        return view('user.index');
    }
    public function alogin()
    {
        return view('user.alogin');
    }
    public function ahome()
    {
        return view('admin.adminhome');
    }
    public function viewteacherreg()
    {
        $data['result']=$this->obj1-> selectt('tregisters');
        return view('admin.approveteacher',$data);
    }
    public function viewsyllabus()
    {
        $data['result']=$this->obj2->selectsyllabus('syllabi');
        return view('admin.approvesyllabus',$data);
    }
    public function viewtimetable()
    {
        $data['result']=$this->obj3->selecttimetable('timetables');
        return view('admin.approvetimetable',$data);
    }
    public function viewresult()
    {
        $data['result']=$this->obj4->selectresult('results');
        return view('admin.approveresult',$data);
    }
    public function viewfeedback()
    {
        $data['result']=$this->obj5->selectfeedback('feedback');
        return view('admin.adminfeedback',$data);
    }



    //admin login

    public function aloging(Request $req)
    {
        $email=$req->input('email');
        $pswd=$req->input('pswd');
        // echo $email;
        // echo $pswd;
        // exit();
        $data=$this->obj->selectadmin('admins',$email,$pswd);
        if(isset($data))
        {
            $req->session()->put(array('asess'=>$data->id));
            return redirect('/adminhome');
        }
        else
        {
            return redirect('/alogin')->with('error','invalid username or password!!');
        }
    }


        //approve teachers
        public function tapprove($id)
        {
            $data=['status'=>"approved"];
            $this->obj1->approveteach('tregisters',$data,$id);
              return redirect('/approveteacher');
        }
        public function tdecline($id)
        {
            $data=['status'=>"declined"];
            $this->obj1->approveteach('tregisters',$data,$id);
              return redirect('/approveteacher');
        }


        //aprove syllabus
        public function sapprove($id)
        {
            $data=['status'=>"approved"];
            $this->obj2->approves('syllabi',$data,$id);
              return redirect('/approvesyllabus');
        }
        public function sdecline($id)
        {
            $data=['status'=>"declined"];
            $this->obj2->approves('syllabi',$data,$id);
              return redirect('/approvesyllabus');
        }


        //approve timetable
        public function aprovet($id)
        {
            $data=['status'=>"approved"];
            $this->obj3->approvet('timetables',$data,$id);
              return redirect('/approvetimetable');
        }
        public function declinet($id)
        {
            $data=['status'=>"declined"];
            $this->obj3->approvet('timetables',$data,$id);
              return redirect('/approvetimetable');
        }



        //approve result
        public function raprove($id)
        {
            $data=['status'=>"approved"];
            $this->obj4->rapprove('results',$data,$id);
              return redirect('/approveresult');
        }
        public function rdecline($id)
        {
            $data=['status'=>"declined"];
            $this->obj4->rapprove('results',$data,$id);
              return redirect('/approveresult');
        }

  
        public function alogout(request $req)
    {
        $req->session()->forget('asess');
        return redirect('/alogin');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
