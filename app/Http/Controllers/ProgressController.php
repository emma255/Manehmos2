<?php
namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

use DB;

use App\Infant;
use App\RegisterChild;
use App\Register6;
use App\RegisterMaternal;

class ProgressController extends Controller
{
    /**
     * Display the specified
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //show chart home for clinician
    public function index1()
    {
         return view('progressRecords.clinicianChartHome');
    }

    //show chart home for doctor
    public function index2()
    {
         return view('progressRecords.doctorChartHome');
    }

    public function showChart()
    {
        $this->validate(request(),[
            'type'=>'required',
            'namba'=>'required',
        ]);


        if(request('type') == 'mtoto'){

            $test = Infant::where('namba_ya_usajili',request('namba'))->first();

            if($test == null){
                $error_txt = 'Hamna taarifa zilizohifadhiwa za '.request('namba');

                return view('error-view')->with('error_txt',$error_txt);
            }
            else{

                $name = RegisterChild::where('namba_ya_mtoto',request('namba'))->pluck('jina_la_mtoto');

                $Weight = DB::table('infants')->select(DB::raw("sum(uzito) as uzito"))->where('namba_ya_usajili',request('namba'))
                ->orderBy("tarehe")->groupBy(DB::raw("(tarehe)"))->get();

                $months = 0;
                $result[] = ['Hudhurio','Uzito'];

                foreach ($Weight as $key => $value) {

                $result[++$key] = [$months++, (int)$value->uzito/1000];
            }
            return view('progressRecords.chart',['Weight'=>json_encode($result), 'name'=>$name, 'vmin'=>0, 'vmax'=>20, 'hmin'=>0, 'hmax'=>64]);
            }               
        }

        elseif (request('type') == 'mjamzito') {

            $test = Register6::where('namba_ya_usajili',request('namba'))->first();

            if($test == null){
                $error_txt = 'Hamna taarifa zilizohifadhiwa za '.request('namba');

                return view('error-view')->with('error_txt',$error_txt);
            }
            else{
                $name = RegisterMaternal::where('namba_ya_usajili',request('namba'))->pluck('jina_la_mama');

                $Weight = DB::table('register6s')->select(DB::raw("sum(uzito) as uzito"),DB::raw("(tarehe_ya_hudhurio) as hudhurio"))->where('namba_ya_usajili',request('namba'))
                ->orderBy("tarehe_ya_hudhurio")->groupBy(DB::raw("(tarehe_ya_hudhurio)"))->get();

                // $months = 0;
                $result[] = ['Mwezi','Uzito'];

                foreach ($Weight as $key => $value) {

                $result[++$key] = [$value->hudhurio, (int)$value->uzito/1000];
            }
            return view('progressRecords.chart',['Weight'=>json_encode($result), 'name'=>$name, 'vmin'=>'30', 'vmax'=>100, 'hmin'=>"null", 'hmax'=>"null"]);
            }  
        }

        else{
            
            $error_txt = 'Hakuna rekodi ya maendeleo ya mteja aina ya '.request('type');

            return view('error-view')->with('error_txt',$error_txt);
        }

    }
}