<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Payment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['total_events']=Event::all()->count();
        $data['total_Revenue']=Payment::all('amount')->count();
        return view('admin.dashboard')->with(['Events'=> $data])->with(['Revenue'=>$data]);
    }
}
