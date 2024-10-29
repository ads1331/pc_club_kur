<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        return view('index');
    }
    public function game(){
        $games = DB::table('games')->get();
        return view('games', compact('games'));
    }
    public function booking(){
        $services = DB::table('services')->get();
        return view('booking' ,compact('services'));
    }
    public function book(Request $request)
{
    $validated = $request;

    $userId = auth()->id(); 

    $bookingDateTime = $validated['date'] . ' ' . $validated['time'];

    DB::table('bookings')->insert([
        'user_id' => $userId,
        'service_id' => $validated['service_id'],
        'booking_date' => $bookingDateTime,
        'duration' => $validated['hours'], 
    ]);

    return redirect()->back()->with('success', 'Запись успешно создана!');
}


    
    public function computer(){
        $services = DB::table('services')->get();
       
        return view('pc', compact('services'));
    }
}
