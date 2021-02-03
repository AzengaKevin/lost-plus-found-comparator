<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ReportController extends Controller
{
    
    /** @group reports */
    public function index(Request $request)
    {
        $reports = Report::latest()->paginate();

        $needle = $request->s;

        if(!is_null($needle)){
            $reports = Report::search($needle)->paginate();
        }

        return view('reports.index', compact('reports'));
    }
}
