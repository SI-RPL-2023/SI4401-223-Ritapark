<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Charts;

class ChartController extends Controller
{
    public function barChart()
    {
        $chart = Charts::database(User::all(), 'bar', 'highcharts')
            ->elementLabel("Total Users")
            ->title("User Statistics")
            ->responsive(false)
            ->groupByMonth(date('Y'), true);
        
        return view('bar-chart', ['chart' => $chart]);
    }
}
