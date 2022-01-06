<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class regcontroller extends Controller
{
    public function index(){
        return view('login');
    }

    //    //check login
    public function login(Request $req){
        $rec=DB::table('user')->where('email',$req->txtemail)
                                    ->where('pass',$req->txtpass)->count();

        if($rec==1)
        {
            return redirect('home');
        }
        else
        {
            return redirect('index');
        }
    }

    
    //home redirect
    public function gethome()
    {
        return view('home');
    }

    //addpoll redirect
    public function addpoll()
    {
        return view('addpoll');
    }

    public function addpollchk(Request $req)
    {
        DB::table('addpoll')->insert([
            'poll_name'=>$req->input('txtque'),
            'opt1'=>$req->input('txtfop'),
            'opt2'=>$req->input('txtsop'),
            'opt3'=>$req->input('txttop'),
            'opt4'=>$req->input('txtftop'),
            'status'=>0,

        ]);

                //return redirect('displaydata');
                return redirect('activepoll');
    }

      public function activepoll()
      {
          $data=DB::table('addpoll')->get();
          return view('activepoll' ,['data' => $data]);
      }
     public function displaydata(Request $req)
    {
        $data=DB::table('addpoll')->get();
        return view('display',['data' => $data]);
    }

    public function editdata($id)
    {
        $data=DB::table('addpoll')->update([
                'status'=>0,
        ]);

        $data=DB::table('addpoll')->where('pid',$id)
        ->update([
            'status'=>1,
    ]);
        
        return redirect('activepoll');


    }

    //edit user poll display
    // public function editdisp()
    // {
    //     $data=DB::table('addpoll')->get()->where('status',1);
    //     return view('userside',['data'=>$data]); 
    // }

    public function userdisplay()
    {
        $poll = DB::table('addpoll')->where('status',1)->get();

        return view('userside',['polldata'=>$poll]); 
        
    }

    public function Answer_reg(Request $request)
    {
        $answer = $request->get('ans');
        $id = $request->get('qid');

        $cnt = DB::table('user_result')->where(['cont'=> $answer ])->get('cont')->count();

        if($cnt == 0)
        {
            $cnt ==1;
        }
        else
        {
            $cnt = $cnt +1;
        }
       
        DB::table('user_result')->insert(
            ['pid' => $id, 'ans' =>  $answer , 'cont' =>  $cnt]
        );

        return "inserted";

        
        

        // return view('result', compact("per1", "per2", "per3","per4","POOL") );
    //     $ans = $req->get('ans');

    //     return $ans;
     }
     public function poolanswer($id)
    {
        $POOL = DB::table('addpoll')->where(['pid'=> $id])->get();

        $total = DB::table('user_result')->where(['pid'=> $id])->get()->count(); 

        $opt1 = DB::table('user_result')->where(['pid'=> $id , 'answer' =>1])->get('cont')->max('cont'); 
        $opt2 = DB::table('user_result')->where(['pid'=> $id , 'answer' =>2])->get('cont')->max('cont'); 
        $opt3 = DB::table('user_result')->where(['pid'=> $id , 'answer' =>3])->get('cont')->max('cont'); 
        $opt4 = DB::table('user_result')->where(['pid'=> $id , 'answer' =>4])->get('cont')->max('cont'); 
        
        $per1 = $opt1 *100 / $total;
        $per2 = $opt2 *100 / $total;
        $per3 = $opt3 *100 / $total;
        $per4 = $opt4 *100 / $total;

        
        

         return view('result', compact("per1", "per2", "per3","per4","POOL") );

           
        
        
    }

    public function adduserpoll(Request $req)
    {
        DB::table('')->insert([
         'pid'=>$req->input('qid'),
         'ans'=>$req->input('ans'),
         'cont'=>$req->input(''),
        ]);
    }

     //addpoll redirect
     public function userlogout()
     {
         return view('logout');
     }
     


}
