<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Andalalin;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @param  \App\Models\Andalalin  $andalalin
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     */
    // public function index(Request $request)
    // {
    //     return Inertia::render('Andal/Index', [
    //         'admin' => Andalalin::when($request->term, function($query, $term){
    //             $query->where('code', 'LIKE', '%'.$term.'%');
    //         })->paginate(),
    //     ]);
    // }

    public function home()
    {
        return Inertia::render('Home');
    }

    public function info(){
        return Inertia::render('Info');
    }

    public function search(Andalalin $id)
    {
        $andal = Andalalin::find($id);
        return Inertia::render('Search', [
            'andal' => $andal,
        ]);
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
