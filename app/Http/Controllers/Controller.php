<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendMail(Request $request)
    {
        Mail::to('pawelged9903@wp.pl')->send(new Contact($request->name, $request->email, $request->message));
        return true;
    }

    /**
     * @return BinaryFileResponse
     */
    public function generatePDF(): BinaryFileResponse
    {
        return response()->download('Paulina Skukowska - CV.pdf');
    }
}
