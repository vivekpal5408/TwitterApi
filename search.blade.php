@extends('master')
@section('content')
    <div class="col-lg-12">   
        <div class="page-header">
            <h1>Twitter Feed </h1>
        </div>
        
        <form class="form-horizontal" action="{{url('/showFeeds')}}" method="post">
                    {!! csrf_field() !!}

            <div class="form-group">
                 <label class="control-label col-sm-2" for="email">Tags:</label>
                <div class="col-sm-8">
                     <input type="text" class="form-control" id="email" placeholder="search timeline" name="tags">
                </div>
                <div class="col-sm-2">
                     <input type="submit" class="form-control" id="email" value="search">
                </div>
            </div>
        </form>
            
    </div>
@endsection