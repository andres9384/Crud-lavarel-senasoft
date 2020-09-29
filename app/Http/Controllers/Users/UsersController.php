<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;

class UsersController extends Controller
{
    //get
    public function index() {
        $users = User::all();
        
        return view('users.index',compact('users'));
    }  
    //get
    public function created() { 
        return view('users.create');
    } 
    //post
    public function store(Request $request) {
        $user= User::create($request->all());
        return redirect()->route('users.index') ;
    } 
    //get
    public function edit($id) {
        $users = User::find($id);
        return view('users.edit',compact('users'));
    }  
    //put//post
    public function update(Request $request, $id) {
        $user= User::find($id)->update($request->all());
        return redirect()->route('users.index');
    }   
    //delete//post  
    public function destroy($id) {
        $user= User::find($id)->Delete();
        return redirect()->route('users.index') ;
    }   
}
