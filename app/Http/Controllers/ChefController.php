<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Foreach_;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = Chef::all();
        return view('back.chefs.allChefs',compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.chefs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
        $chef = new Chef;
        $rq->file("img")->storePublicly("img/team/","public");
        $chef->name = $rq->name;
        $chef->img =  $rq->file('img')->hashName();
        $chef->save();
        return redirect()->route('chef.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef)
    {
        return view('back.chefs.edit',compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Chef $chef)
    {
        
        Storage::disk("public")->delete("img/team/$chef->img");
        $chef->name = $rq->name;
        $chef->img =  $rq->file('img')->hashName();
        $rq->file("img")->storePublicly("img/team/","public");
        $chef->save();
        return redirect()->route('chef.index');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        // dd("img/team/$chef->img");
        Storage::disk("public")->delete("img/team/$chef->img");
        foreach($chef->sociallinks as $link){
            $link->delete();
        }


        $chef->delete();

        return redirect()->back();
    }
}
