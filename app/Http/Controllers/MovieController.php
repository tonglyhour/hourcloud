<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        return view('pages.movie');
    }
    public function cinema(){
        return view('pages.cinema');
    }
    public function contact(){
        return view('pages.contact');
    }
     public function saveContact(Request $request){
        $contact_name = request('name');
        $contact_email = request('email');
        $contact_message = request('msg');

        DB::insert('insert into tbl_contactUs (contact_id, contact_name,contact_email,contact_message) values (?, ?,?,?)', [NULL, $contact_name, $contact_email, $contact_message]);
        return redirect('/contact');

    }
    public function orderTicket(Request $request){
        $r_id = $request->id;

        //Query Order to show in form
        $orders = DB::select('select * from tbl_movie where movie_id = ?', [$r_id ]);

        return view('pages.ticket', ['orders' =>$orders]);
    }

    public function confirmTicket(Request $request){
        // $order = DB::select('select * from tbl_movie where movie_id = ?', [$r_id ]);
        $movie_id = $request->id;
        
        // Default number
        $resv_seat = 28;
        $seat_price = 4;
        $user_id = 1;

        DB::insert('insert into tbl_reservation ( resv_id,resv_seat,seat_price,movie_id,user_id) values (?, ?,?,?,?)', [NULL, $resv_seat, $seat_price, $movie_id, $user_id]);
        return redirect('/movie')->with('status', 'Booking has been confirmed!');
    }

    public function movie(){
        $movies = DB::table('tbl_movie')->get();
        return view('pages.movie')->with('movies', $movies);
    }
}
