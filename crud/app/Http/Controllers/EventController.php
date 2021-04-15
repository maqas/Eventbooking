<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EventController extends Controller
{
    public function displayform()
    {
        return view('event');
    }
    public function save(Request $request)
    {
        $username = $request->input('username');
        $event_list = $request->input('event_list');
        $phoneno = $request->input('phoneno');
        $event_date = $request->input('event_date');
        $description = $request->input('description');  
        
        
        DB::insert('insert into eventbooking (username,event_list,phoneno,event_date,description) value (?,?,?,?,?)',[$username, $event_list, $phoneno, $event_date, $description]);

        return redirect('event')->with('success', 'Data Saved');
    }
    public function viewform()
    {
        return view('eventview');
    }
    public function index()
    {
        $eventbooking = DB::select('select * from eventbooking');
        
        return view('eventview', ['eventbooking'=>$eventbooking]);
    }

    public function edit_function($id)
    {
        $eventbooking = DB::select('select * from eventbooking where id = ?' , [$id]);

        return view('eventedit',['eventbooking' => $eventbooking]);
    }

    public function update_function(Request $request,$id)
    {
        $username = $request->input('username');
        $event_list = $request->input('event_list');
        $phoneno = $request->input('phoneno');
        $event_date = $request->input('event_date');
        $description = $request->input('description');
        
        DB::select('update eventbooking set username = ?, event_list = ?, phoneno = ?, event_date = ?, description = ? where id = ?', [$username, $event_list, $phoneno, $event_date, $description, $id]);

        return redirect('eventview')->with('success', 'Data Updated');
    }

    public function delete_function($id)
    {
        DB::delete('delete from eventbooking where id = ?', [$id]);
        return redirect('eventview')->with('success','Data Deleted');
    }
}
