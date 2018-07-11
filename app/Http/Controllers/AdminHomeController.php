<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Tasks;
use App\User;
use App\Mail\resetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {

        $tasks = Tasks::take(3)->get();
        return view('admin.adminHome', compact('tasks'));
    }

    public function users()
    {
        $test  = User::where('position','!=','System Administrator')->first();
        if($test != null){

        $details = User::where([['position', '!=', 'System Administrator'],['center',Auth::user()->center]])->get();

        // $doctors = User::where('position', 'Doctor')->get();
        // $clinicians = User::where('position', 'Clinical Attendant')->get();
        return view('admin.showUsers', compact('details'));
        }

        else {
            $error_txt = 'No doctors and nurses registered';
            return view('error-view')->with('error_txt',$error_txt);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userProfile()
    {
        $name = request()->name;

        if ($name != null) {

            $details = User::where([['name',$name],['position', '!=', 'System Administrator'],['center',Auth::user()->center]])->first();

            if($details == null){
                return view('error-view')->with('error_txt',$name.' does not exist in Manehmos');
            }
            else{

            return view('admin.userProfile')->with('profile',$details);
            
            }
        } else {
            return view('error-view')->with('error_txt','User can not be null, Enter the whole name of the user first');
        }
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (User::find($id) == null){
        session()->flash('flash_message', 'Failed!!');
        $error_txt = 'user does not exist no updates taken place, go back to <a href="/showUsers"> users page</a>';
        return view('error-view')->with('error_txt',$error_txt);

        }
        else{
        User::where('id', $id) ->update(['status' => 'active',]);
    }
        session()->flash('flash_message', 'User activated successfully!!');
        return redirect()->back();
    }  


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        if ($user == null) { 
        
        session()->flash('flash_message', 'User not found, no password changed!!');

        return redirect()->intended('showUsers');

        }

        return view('admin.changePassword', ['user'=> $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $to = User::where('id',$id)->first();

        if (User::find($id) == null){
            session()->flash('flash_message', 'Failed!!');

            $error_txt = 'user does not exist no updates taken place, go back to <a href="/showUsers"> users page</a>';
            return view('error-view')->with('error_txt',$error_txt);
        }
        else{

        $this->validate(request(), [
            'password' => 'confirmed',
        ]);

        $password = request()->password;

        if(strlen($password) > 6){

            User::where('id', $id) ->update(
            ['password'=>Hash::make($password),]
            );

            try{
                \Mail::to($to->email)->send(new resetPassword($password));
            }

            catch(\Exception $e){

                return view('error-view')
                ->with('error_txt','Failed to submit your request, 
                password changed but message did not sent. Try o send it manually.');
            }

        session()->flash('flash_message', 'Password changed successfully and message is sent to user!!');

        return redirect('/showUsers');
    }

    else {
        return view('error-view')
        ->with('error_txt','The password can not be less than 6 characters, try another password');
        }
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (User::find($id) == null){
            session()->flash('flash_message', 'Failed!!');

            $error_txt = 'user does not exist no updates taken place, go back to <a href="/showUsers"> users page</a>';
            return view('error-view')->with('error_txt',$error_txt);
        }
        else{

        User::where('id', $id)->update(
        ['status' => 'Deactivated',]
        );
    }
            session()->flash('flash_message', 'User deactivated successfully!!');

        return redirect()->back();
    }
}