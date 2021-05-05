<?php

namespace App\Http\Controllers;

use App\Mail\credentials;
use App\Mail\resetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where([
            ['position', '!=', 'System Administrator'],
            ['center', auth()->user()->center]
        ])->get();
        return view('users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'worker_id' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'center' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'phone_no' => ['required', 'string', 'max:15'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'worker_id' => $request->worker_id,
            'position' => $request->position,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'center' => $request->center,
            'district' => $request->district,
            'password' => bcrypt($request->password),
        ]);

        if ($user) {
            try {
                Mail::to($user->email)->send(new credentials($request));
                session()->flash('success', 'User created');
            } catch (\Throwable $th) {
                throw $th;
                info($th);
                session()->flash('warning', 'User created successfully but message did not sent to user. Send it manually.');
            }
        } else {
            session()->flash('error', 'User not created');
        }

        return redirect()->route('users.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $name = request()->name;

        if ($name != null) {

            $details = User::where([['name', $name], ['position', '!=', 'System Administrator'], ['center', auth()->user()->center]])->first();

            if ($details == null) {
                return view('error-view')->with('error_txt', $name . ' does not exist in Manehmos');
            } else {

                return view('admin.userProfile')->with('profile', $details);
            }
        } else {
            return view('error-view')->with('error_txt', 'User can not be null, Enter the whole name of the user first');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if ($user) {
            return view('users.change-password', ['user' => $user]);
        }

        session()->flash('flash_message', 'Failed, user not found.');
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (!$user) {
            session()->flash('error', 'User does not exist.');
            return back();
        }

        $this->validate($request, ['password' => 'confirmed|string|min:7']);

        $user->update(['password' => bcrypt($request->password)]);

        try {
            Mail::to($user->email)->send(new resetPassword($request->password));
            session()->flash('success', 'Password changed successfully and message is sent to user.');
        } catch (\Throwable $th) {
            session()->flash('warning', 'Password changed successfully but message did not sent to user. Send it manually.');
        }
        return redirect()->route('users.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (!$user) {
            session()->flash('error', 'selected user not exist.');
            return back();
        }

        $action = $user->status == 'active' ? 'deactivated' : 'activated';
        $user->update(['status' => $user->status == 'active' ? 'Deactivated' : 'active'])
            ? session()->flash('success', "User $action successfully")
            : session()->flash('error', "User not $action successfully");

        return back();
    }
}
