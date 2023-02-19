<?php

namespace App\Http\Controllers;

use App\Filters\UserStatusFilter\UserStatusFilter;
use App\Http\Requests\UserStatusRequest;
use App\Models\UserStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function test(Request $request)
    {
       $users = collect();
       $name =  request("to");
       if ($request->has('to')) {
           dd('status');
       }
        return view('welcome',compact('users'));

    }

    public function Filter(Request $request)
    {



        if ($request->method() == "GET") {

            $filter = app()->make(UserStatusFilter::class,['queryParams' => array_filter($data)]);


            $users =  UserStatus::filter($filter)->with('users')->when($data['from'],function ($q)use($data){
                $q->whereBetween('created_at',[$data['from'],$data['to']]);
            })->paginate(15);

        } else {
            $users = collect() ;
        }
        return view('welcome',compact('users'));
    }
}
