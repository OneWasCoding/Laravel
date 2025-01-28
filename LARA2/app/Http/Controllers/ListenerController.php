<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listener;
use DB;

class ListenerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listeners = Listener::withTrashed()->get();
        // $listeners = DB::table('users AS u')
        //     ->join('listeners AS l', 'u.id', '=', 'l.user_id')
        //     ->orderBy('l.lname')
        //     ->select('l.id', 'l.fname', 'l.lname', 'u.email', 'l.address', 'img_path')
        //     ->get();
        // dd($listeners);
        return view('listener.index', compact('listeners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $listener = Listener::find($id);

        dd($listener);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Listener::destroy($id);
        return redirect()->route('listeners.index');
    }

    public function restore($id) {
        $listener = Listener::withTrashed()->find($id)->restore();
        // dd($listener);
        // $listener->restore();
        
        return redirect()->route('listeners.index');
    }
}