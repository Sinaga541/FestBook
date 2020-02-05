<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RentHistory;
use Carbon\Carbon;

class RentController extends Controller
{
   public function index()
   {
      return view('admin.rent.index');
   }

   public function returnP(Request $request, RentHistory $rentHistory)
    {
        $rentHistory->update([
            'returned_at' => Carbon::now(),
            'admin_id' => auth()->id(),
        ]);

        return redirect()->back()->withSuccess('Masa Berlaku habis');
    }
}
