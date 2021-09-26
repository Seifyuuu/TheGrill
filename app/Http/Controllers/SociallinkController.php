<?php

namespace App\Http\Controllers;

use App\Models\Sociallink;
use App\Models\Chef;
use App\Models\Footer;
use Illuminate\Http\Request;

class SociallinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sociallinks = Sociallink::all();
        return view('back.sociallinks.allSociallinks',compact('sociallinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chefs = Chef::all();
        $footers = Footer::all();
        return view('back.sociallinks.create', compact('chefs','footers'));
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
     * @param  \App\Models\Sociallink  $sociallink
     * @return \Illuminate\Http\Response
     */
    public function show(Sociallink $sociallink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sociallink  $sociallink
     * @return \Illuminate\Http\Response
     */
    public function edit(Sociallink $sociallink)
    {
        return view('back.sociallinks.edit',compact('sociallink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sociallink  $sociallink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Sociallink $sociallink)
    {
        
        $sociallink->link = $rq->link;
        $sociallink->icon_id= $rq->icon_id;
        $sociallink->save();
        return redirect()->route('chef.edit',$sociallink->chef->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sociallink  $sociallink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sociallink $sociallink)
    {
        $sociallink->delete();
        return redirect()->back();
    }
}
