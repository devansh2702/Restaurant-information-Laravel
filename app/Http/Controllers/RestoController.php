<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurant;
use Session;

class RestoController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function list()
    {
        $data= restaurant::all();
        return view('list',['data'=>$data]);
    }
    function add(Request $req)
    {
        //return $req->input();
        $resto=new restaurant;
        $resto->name=$req->name;
        $resto->id=$req->id;
        $resto->email=$req->email;
        $resto->address=$req->address;
        $resto->save();

        $req->session()->flash('status','Restaurant entered succesfully');
        return redirect('list');
    }
    function update($id)
    {
        $resto=restaurant::find($id);
        return view('update',['data'=>$resto]);
    }
    function change(Request $req)
    {
        
        $resto=restaurant::find($req->id);

        $resto->name=$req->name;
        $resto->email=$req->email;
        $resto->address=$req->address;
        $resto->save();

        $req->session()->flash('status','Restaurant updated successfully');
        return redirect('list');

    }
    function delete($id)
    {
        restaurant::find($id)->delete();
        
        Session::flash('status','Restaurant deleted succesfully');
        return redirect('list');
    }

}
