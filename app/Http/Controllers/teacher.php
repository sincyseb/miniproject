<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tregister;
use App\Models\syllabus;
use App\Models\notes;
use App\Models\result;
use App\Models\timetable;
use App\Models\feedback;

class teacher extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->obj=new tregister;
        $this->obj1=new syllabus;
        $this->obj2=new notes;
        $this->obj3=new result;
        $this->obj4=new timetable;
        $this->obj5=new feedback;
    }

    public function tlog()
    {
        return view('user.tlogin');
    }
    public function treg()
    {
        return view('user.tregister');
    }
    public function syll()
    {
        return view('user.uploadsyllabus');
    }
    public function notes()
    {
        return view('user.uploadnotes');
    }
    public function result()
    {
        return view('user.uploadresults');
    }
    public function timetable()
    {
        return view('user.uploadtimetable');
    }
  
   



    //insert into tregister
    public function tinsert(Request $request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        $paddress=$request->input('paddress');
        $caddress=$request->input('caddress');
        $qul=$request->input('qul');
        $dob=$request->input('dob');
        $pin=$request->input('pin');
        $gen=$request->input('gender');
        $dis=$request->input('dis');
        $dept=$request->input('dept');
        $phno=$request->input('num');
        $lang=$request->input("lan");
        $lan=implode(',',$lang);

        $pswd=$request->input('pswd');
        $data=['name'=>$name,
                'email'=>$email,
                'paddress'=>$paddress,
                'caddress'=>$caddress,
                'qualification'=>$qul,
                'dob'=>$dob,
                'pin'=>$pin,
                'gender'=>$gen,
                'dis'=>$dis,
                'dept'=>$dept,
                'phno'=>$phno,
                'lan'=>$lan,
                'pswd'=>$pswd,
                'utype'=>'teacher',
                'status'=>'not defined'];
            $this->obj->insertteach('tregisters',$data);
            return redirect('/tlogin');
    }




//login
    public function loginaction(Request $req)
    {
        $email=$req->input('email');
        $pswd=$req->input('pswd');
        $data=$this->obj->selectteacher('tregisters',$email,$pswd);
        // echo $email;
        // echo $pswd;
        // exit();
        if(isset($data))
        {
           
            if($data->status=='approved')
            {
                $req->session()->put(array('sess'=>$data->id));
                return redirect('/teacherhome');
            }
            elseif($data->status=='declined')
            {
                return redirect('/tlogin')->with('error','your application is rejected!!');
            }
            else
            {
                return redirect('/tlogin')->with('error','your application is pending!!');
            }
            
        }
        else
            {
                return redirect('/tlogin')->with('error','Invalid Email Id or Password');
            }
    }
    


    //home page
    public function home()
    {
        $id=session('sess');
        $data['result']=$this->obj->name('tregisters',$id);
        // echo $data;
        // exit();
        return view('user.teacherhome',$data);
    }


    // insert into syllabus page
    public function syllabus(request $request)
    {
        $course=$request->input('course');
        $sem=$request->input('sem');
        $syll=$request->file('syl');
        $filename=$syll->getClientOriginalName();
        $syll->move(public_path().'/uploads',$filename);
        $data=['course'=>$course,
                'semester'=>$sem,
                'syllabus'=>$filename,
                'status'=>'not defined'];
        $this->obj1->insertsyllabus('syllabi',$data);
        return redirect('/uploadsyllabus');
    }

    //upload notes page
    public function note(request $request)
    {
        $course=$request->input('course');
        $sem=$request->input('sem');
        $sub=$request->input('sub');
        $note=$request->file('notes');
        $filename=$note->getClientOriginalName();
        $note->move(public_path().'/uploads',$filename);
        $data=['course'=>$course,
                'semester'=>$sem,
                'subject'=>$sub,
                'notes'=>$filename,
                'status'=>'not defined'];
        $this->obj2->insertnote('notes',$data);
        return redirect('/uploadnotes');
    }

    //insrt into timetable
    public function timetables(request $request)
    {
        $course=$request->input('course');
        $sem=$request->input('sem');
        $sub=$request->input('sub');
        $date=$request->input('date');
        $time=$request->input('time');
        $data=['course'=>$course,
                'semester'=>$sem,
                'subject'=>$sub,
                'date'=>$date,
                'time'=>$time,
                'status'=>'not defined'];
        $this->obj4->timetablesinsert('timetables',$data);
        return redirect('/uploadtimetable');
    }


    
    //insert into result table
    public function results(request $request)
    {
        $course=$request->input('course');
        $sem=$request->input('sem');
        $result=$request->file('mark');
        $filename=$result->getClientOriginalName();
        $result->move(public_path().'/uploads',$filename);
        $data=['course'=>$course,
                'semester'=>$sem,
                'result'=>$filename,
                'status'=>'not defined'];
        $this->obj3->insertresult('results',$data);
        return redirect('/uploadresults');
    }




    public function viewfeedback()
    {
        $data['result']=$this->obj5->selectfeedback('feedback');
        return view('user.tviewfeedback',$data);
    }



    public function tlogout(request $req)
    {
        $req->session()->forget('sess');
        return redirect('/tlogin');
    }

    public function tviewsyllabus()
    {
        $data['result']=$this->obj1->selectsyllabus('syllabi');
        return view('user.tviewsyllabus',$data);
    }


    // public function sdownload()
    // {
    //     $file=public_path()."'/uploads',$filename";
    //     $headers = array(
    //         'Content-Type: application/pdf',
    //       );
    //       return Response::download($file, 'filename.pdf', $headers);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

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
