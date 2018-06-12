<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Tasks;
use App\User;
use Illuminate\Http\Request;

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
        $details = User::where('position', '!=', 'System Administrator')->get();

        // $doctors = User::where('position', 'Doctor')->get();
        // $clinicians = User::where('position', 'Clinical Attendant')->get();
        return view('admin.showUsers', compact('details'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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

            echo 'user does not exist no updates taken place, go back to <a href="/showUsers"> users page</a>';
        }
        else{

        User::where('id', $id) ->update(
        ['status' => 'active',]
        );
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
        $user = User::find($id); // Redirect to state list if updating state wasn't existed 
        
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
        if (User::find($id) == null){
                                    session()->flash('flash_message', 'Failed!!');

            echo 'user does not exist no updates taken place, go back to <a href="/showUsers"> users page</a>';
        }
        else{

        $this->validate(request(), [
            'password' => 'required|string|min:6|confirmed',
        ]);

            // echo Hash::make(request()->password);

        User::where('id', $id) ->update(
        ['password'=>Hash::make(request()->password),]
        );
            session()->flash('flash_message', 'Password changed successfully!!');

        return redirect('/showUsers');
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

            echo 'user does not exist no updates taken place, go back to <a href="/showUsers"> users page</a>';
        }
        else{

        User::where('id', $id) ->update(
        ['status' => 'Deactivated',]
        );
    }
            session()->flash('flash_message', 'User deactivated successfully!!');

        return redirect()->back();
    }


    // public function activate($id)
    // {
    //     if (User::find($id) == null){
    //         echo 'user does not exist no updates taken place, go back to <a href="/showUsers"> users page</a>';
    //     }
    //     else{

    //     User::where('id', $id) ->update(
    //     ['status' => 'activate',]
    //     );
    // }

    //     return redirect()->back();
    // }
}