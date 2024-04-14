<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\PhishingResult;
use App\Models\FeedBack;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    

   /* public function api(Request $request)
    {
        $client = new Client(['base_uri' => 'http://127.0.0.1:5000']);

        $response = $client->post('/detect-phishing', [
            'json' => [
                // Your input data for phishing detection
                'url' => $request->message,
            ]
        ]);

        $result = json_decode($response->getBody(), true);

        return response()->json(['phishing' => $result['phishing']]);
    }*/

    public function Save(Request $request){
        
        $result = 0;
        // dd($request->request->all());
        $data = PhishingResult::create([
            'url'=>$request->message,
            'result'=>$result
        ]);
        
        $data->save();
        // $result = Api();
        return redirect('/')->with(['resultid' => $data->id, 'result' => $result]);
    }

    public function feedbacksave(Request $request){
        // dd($request->request->all());
        $data = FeedBack::create([
            'Resultid'=>$request->resultid,
            'feedback'=>$request->feedback
        ]);
        $data->save();
        return redirect('/');
    }

    public function DisplayItems(){
        // $data = PhishingResult::All();
        // $feedback = FeedBack::All();
        $data = DB::table('phishing_results')
    ->join('feed_backs', 'phishing_results.id', '=', 'feed_backs.resultid')
    ->select('phishing_results.*', 'feed_backs.feedback')
    ->get();
        return view('home',['data'=>$data]);
    }
}