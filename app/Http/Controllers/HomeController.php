<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
        if (!\Auth::user()->company_name || !\Auth::user()->coast_one_day) {
            return redirect(route('user_settings'))->withWarning('Прежде чем заполнять заявку необходимо настроить профиль');
        }
        return view('calculator.main');
    }

    public function load_groups() {
        $groups = \App\Group::all();
        return $groups;
    }

    public function load_questions($group = 0) {
        if ($group == 0) {
            $group = \App\Group::firstOrFail();
        } else {
            $group = \App\Group::findOrFail($group);
        }
        return $group->questions()->with('answers')->get();
    }

    public function test(Request $request) {
        $type = \App\Type::firstOrFail();

        $base = \App\Answer::where('code', $request->BaseNorma)->first()->value;

        $k1 = \App\Answer::where('code', $request->K1)->first()->value;
        $k3 = \App\Answer::where('code', $request->K3)->first()->value;
        $k4 = \App\Answer::where('code', $request->K4)->first()->value;
        $k5 = \App\Answer::where('code', $request->K5)->first()->value;
        $k6 = 1;
        $k7 = \App\Answer::where('code', $request->K7)->first()->value;
        $k8 = \App\Answer::where('code', $request->K8)->first()->value;
        $k9 = \App\Answer::where('code', $request->K9)->first()->value;

        if ($request->has('K6')) {
            $k6 = 0.96;
        }

        $norma = $base * $k1 * $k3 * $k4 * $k5 * $k6 * $k7 * $k8 * $k9;

        $T1 = $request->Ploshad / $norma;

        if ($request->has('tura_height')) {
            $T1 += $request->tura_height *100/60;
        }

        $D =$T1 / 8 * \Auth::user()->coast_one_day;

        $P = 0;
        if ($request->K1 == 'alp') {
            $P += 1000;
        }
        if ($request->K1 == 'high') {
            $P += 500;
        }

        $RM = $request->Ploshad * \Auth::user()->rm;
        $NR = \Auth::user()->nr;

        $res = $D + $P + $NR + $RM;

        $res2 = $res + ($res * \Auth::user()->recom_proc / 100);

        $request->flash();

        return view('calc_result', [
            'ploshad' => $request->Ploshad,
            'personal' => $D,
            'podrad' => $P,
            'matzatr' => $RM,
            'naklad' => $NR,
            'itogo' => $res2,
        ])->withInput($request->all());
    }

    public function save(Request $request) {
        dd($request->all());
    }
}
