<?php

namespace App\Http\Controllers;

use App\Models\Pie;
use App\Models\Line;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    //
    public function pieChart(){
        return view('pie');
    }
    public function pieChartForm(){
        return view('pieForm');
    }
    public function lineChartForm(){
 return view('lineForm');
    }
    public function pieChartpost(Request $request){

        $request->validate([
            'd1' => 'required|string',
            'pour1' => 'required|numeric',
            'd2' => 'string',
            'pour2' => 'numeric',
            'd3' => 'string',
            'pour3' => 'numeric',
            'd4' => 'string',
            'pour4' => 'numeric',
            'd5' => 'string',
            'pour5' => 'numeric',
        ]);
        $pie=new Pie();
        $pie->title=$request->title;
        $pie->d1=$request->d1;
        $pie->pour1=$request->pour1;
        $pie->d2=$request->d2;
        $pie->pour2=$request->pour2;
        $pie->d3=$request->d3;
        $pie->pour3=$request->pour3;
        $pie->d4=$request->d4;
        $pie->pour4=$request->pour4;
        $pie->d5=$request->d5;
        $pie->pour5=$request->pour5;
        $res=$pie->save();

        if($res){
            $latestPie = Pie::latest()->first();
            return view('pie', compact('latestPie'));
                }
    }
    public function piegraphe(){
        $pies = Pie::all();
    
        return view('piegraphe', compact('pies'));
    }
    public function linegraphe(){
        $pies = Line::all();
        $valuesForVAxis = [];
    
        foreach ($pies as $pie) {
            $valuesForVAxis[] = $pie->dv1;
            $valuesForVAxis[] = $pie->dv2;
            $valuesForVAxis[] = $pie->dv3;
            $valuesForVAxis[] = $pie->dv4;
            $valuesForVAxis[] = $pie->dv5;
            $valuesForVAxis[] = $pie->dv6;
        }
    
        return view('linegraphe', compact('pies', 'valuesForVAxis'));
    }
    
    
    public function lineChartpost(Request $request){

        $request->validate([
            'd1' => 'string',
            'd2' => 'string',
            'd3' => 'string',
            'dh1' => 'numeric',
            'dh2' => 'numeric',
            'dh3' => 'numeric',
            'dh4' => 'numeric',
            'dv1' => 'numeric',
            'dv2' => 'numeric',
            'dv3' => 'numeric',
            'dv4' => 'numeric',
            'dv5' => 'numeric',
            'dv6' => 'numeric',
            'title' => 'string',
            'subt1' => 'string',
            'subt2' => 'string',

        ]);
        $line=new Line();
        $line->title=$request->title;
        $line->d1=$request->d1;
        $line->d2=$request->d2;
        $line->d3=$request->d3;
       
        $line->subt1=$request->subt1;
        $line->subt2=$request->subt2;

        $line->dv1=$request->dv1;
        $line->dv2=$request->dv2;
        $line->dv3=$request->dv3;
        $line->dv4=$request->dv4;

        $line->dh1=$request->dh1;
        $line->dh2=$request->dh2;
        $line->dh3=$request->dh3;
        $line->dh4=$request->dh4;
        $line->dv5=$request->dv5;
        $line->dv6=$request->dv6;

        $res=$line->save();

        if($res){
            $latestLine = Line::latest()->first();
            $valuesForVAxis = [$latestLine->dv1, $latestLine->dv2, $latestLine->dv3, $latestLine->dv4, $latestLine->dv5, $latestLine->dv6];
            
            return view('line', compact('latestLine', 'valuesForVAxis'));                }
    }
}
