<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Requests;


class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('website.request');
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
        if($file = $request->file('coverImage')) {

            $name = time() . $file->getClientOriginalName();
            $file->move('coverImages', $name);

        }

        if($file1 = $request->file('image1')) {

            $name1 = time() . $file1->getClientOriginalName();
            $file1->move('coverImages', $name1);
        }

        if($file2 = $request->file('image2')) {

            $name2 = time() . $file2->getClientOriginalName();
            $file2->move('coverImages', $name2);
        }

        if($file3 = $request->file('image3')) {

            $name3 = time() . $file3->getClientOriginalName();
            $file3->move('coverImages', $name3);
        }
        
        $requests = new requests;
        $requests->first_name = $request->first_name;
        $requests->last_name = $request->last_name;
        $requests->email = $request->email;
        $requests->issue = $request->issue;
        $requests->image = $name;
        $requests->image2 = $name1;
        $requests->image3 = $name2;
        $requests->image4 = $name3;
        $requests->details = $request->details;
        $requests->save();
        return back();
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

    // public function filter(Request $request)
    // {
    //     $issues = Requests::where('issue', $request->issue)->all();

    //     return view('admin.filter',compact('issues'));
    // }
}
