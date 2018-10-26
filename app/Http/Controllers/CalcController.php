<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function index() {
        if (!\Auth::user()->company_name || !\Auth::user()->coast_one_day) {
            return redirect(route('user_settings'))->withWarning('Прежде чем заполнять заявку необходимо настроить профиль');
        }
        return view('calculator.new');
    }
}
