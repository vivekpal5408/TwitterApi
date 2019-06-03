<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Validator;

class TestController extends BaseController
{
    
  
    
    public function __construct(){
       
    }

    public function index(){

        return view('search');
       

       
    }


    public function showFeeds(Request $request){
         $searchField = $request->tags;
        $data = array(
            'oauth_access_token' => "1133750556445487104-ayHpcHQy0bSFNEzEY01RA8L0OhQGck",
            'oauth_access_token_secret' => "5yReOCouZ6hFvUi2j74TO0KYYNZ0UXNi7D81JOimQpkHo",
            'consumer_key' => "4xUojiSgb1nL5erT2NWXXbSfQ",
            'consumer_secret' => "KHkzZLsVcwm3kXYNoF2Ke3U0wAQK8GkaRpTkZr4YsDqr1NMDRS"
        );

        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = "screen_name=$searchField&result_type=mixed&count=5";
  
        $requestMethod = 'GET';

        $twitter = new TwitterController($data);

        $data = $twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();
        
       $data = json_decode($data,true);
     
        
        $display['tweets'] = $data;
        return view('feed',$display);

    }

    public function showDemo(){        
      
        
    }
}


?>