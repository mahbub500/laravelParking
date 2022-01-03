<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DateTime;
use DateTimeZone;

class PdfController extends Controller
{
    public function report(){
        $date = new DateTime("now", new DateTimeZone('Asia/Dhaka') );
        
        return view('pdf.invoice',compact('date'));
        // $pdf = PDF::loadView('pdf.invoice');
        // return $pdf->download('invoice.pdf');
        
       

    }

 


}
