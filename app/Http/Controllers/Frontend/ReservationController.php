<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Table;
use App\Enums\TableStatus;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;

class ReservationController extends Controller
{
    public function create()
    {
        $tables = Table::where('status', TableStatus::Available)->get();
        return view('reservations.index', compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        // if($request->guest_number > $table->guest_number) {
        //     return back()->with('warning', 'Please choose the table base on guests.');
        // }
        // $request_date = Carbon::parse($request->res_date);
        // foreach ($table->reservations as $res) {
        //     if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
        //         return back()->with('warning', 'This table is reserved for this date.');
        //     }
        // }
        Reservation::create($request->validated());
        return to_route('completed');
    }
}
