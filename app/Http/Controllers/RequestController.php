<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Requests;
use App\Models\Comments;
use Auth;
class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = Requests::all();
        return view('requests', compact('request'));
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
        $rules = array(
            'request_type' => 'required',
            'name' => 'required',
            'priority' => 'required',
            'date' => 'required',
            'description' => 'required',
        );
        $this->validate($request, $rules);
        $currentuserid = Auth::user()->id;
        $newrequest = Requests::create([
            'request_type' => $request->request_type,
            'status' => $request->status,
            'name' => $request->name,
            'priority' => $request->priority,
            'attachment' => $request->attachment,
            'date' => $request->date,
            'description' => $request->description,
            'userID' => $currentuserid,
        ]);
        return view('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showrequest=Requests::where('id','=',$id)->get();
        $showcomment=Comments::where('requestID','=',$id)->get();
        return view('comments', compact('showrequest', 'showcomment'));
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
