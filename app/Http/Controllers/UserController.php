<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comments;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = User::all();
        return view('users', compact('request'));
    }

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'password' => 'required| min:8',
        );
        $this->validate($request, $rules);

        User::where('id', $request->id)
            ->update(['name' => $request->name,
                'surname' => $request->surname,
                'groupID' => $request->group,
                'email' => $request->email,
                'password' => Hash::make($request->password)]);
        return redirect('users');
    }

    public function createUpdate($id)
    {
        $user = User::findOrFail($id);
        return view('users_update', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Requests::where('userID',$id)->exists()) {
            Requests::where('userID', $id)->delete();
        }
        User::where('id',$id)->delete();
        return redirect('users');
    }
}
