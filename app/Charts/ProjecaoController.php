<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use ConsoleTVs\Charts\Facades\Charts

use Illuminate\Http\Request;

use App\Charts\SampleChart;
use App\Investimento;

class ProjecaoController extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('auth');	
    }


    public function index($id)
    {
    	//$investimento = \App\Post::find($id);

    	
    	$chart = new SampleChart;
    	$chart->labels(['One', 'Two', 'Three', 'Four']);
    	$chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
    	$chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);

    	return view('investimentos.projection', ['chart' => $chart]);

    	//return view('investimentos.projection',compact('chart'));
    }
}
