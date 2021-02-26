<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuoteHistory;

class QuoteHistoryController extends Controller
{
    function show()
    {
   //   $data = QuoteHistory::all();
   //   return view('fuelquotehistory', 'orders' => $data);   uncomment once DB is implemented
      return view('fuelquotehistory');
    }
}
