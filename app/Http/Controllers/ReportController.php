<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App;
use Auth;

class ReportController extends Controller
{
    public function report1($pid)
    {
        $payment = Payment::find($pid);
        $pdf = App::make('dompdf.wrapper');
        $print = "<div>";
        $print.= "<h1> Payment Receipt </h1>";
        $print.= "</div>";
        $pdf->loadHTML($print);
        return $pdf->stream();

    }
}
?>
