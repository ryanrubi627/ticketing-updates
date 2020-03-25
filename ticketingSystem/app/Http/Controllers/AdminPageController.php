<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\client_pages;
use App\admin_pages;

class AdminPageController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function display(){
      $users = client_pages::all();
      return view('admin_page', ['users'=>$users]);
    }

    public function delete($id){
      client_pages::where('ticket_number', $id)->delete();
      return redirect('admin');
    }

    public function insert(Request $request){

        $admin = new admin_pages;

        $admin->ticket_number = $request->ticket_id;
        $admin->name = $request->name;
        $admin->title = $request->title;
        $admin->description = $request->description;
        $admin->importance = $request->importance;
        $admin->date = $request->date;

        $admin->save();

        $id = $request->ticket_id;

        client_pages::where('ticket_number', $id)->delete();
    }

    public function display_closed_ticket(){
      $closed_tickets = admin_pages::all();
      return view('closed_list_ticket', ['closed_tickets'=>$closed_tickets]);
    }

}
