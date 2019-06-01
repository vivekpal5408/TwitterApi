@extends('master')
@section('content')
    <div class="col-lg-12">   
        <div class="page-header">
            <h1>Twitter Feed </h1>
            <a href="{{url('tweets')}}">Back To Search Page</a>
        </div>
            
    </div>
     
   

    <div class="col-lg-4">
        <div class='overflow-hidden'> 
        @if(!empty($tweets))
        <?php 
            $profile_photo=str_replace("normal", "400x400", $tweets[0]['user']['profile_image_url_https']); 
            $screen_name = $tweets[0]['user']['screen_name'];
            $name = $tweets[0]['user']['name'];    
        ?>
        @foreach($tweets as $value) 
            <img src="{{$profile_photo}}" class='img-thumbnail' />
            <div class='text-align-center'>
                <div><h2>{{$name}}</h2></div>
                <div><a href="https://twitter.com{{$screen_name}}" target='_blank'>{{$screen_name}}</a></div>
                <div>{{$value['text']}}</div>
            </div>
            <hr />
        @endforeach    
        @else
            <h2>No tweets found</h2>
        
        @endif

        </div>
    </div>
 
@endsection