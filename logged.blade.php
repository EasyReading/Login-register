@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               

                <div class="panel-body">
                    You are logged in!
               <br/><br/>
                    <a href="/cmnt">Go to Comment-box</a>
                    
                    <br/><br/>
                    <a href="/show">See all comments </a>
                    <br/><br/>
                    <a href="/data">Upload a Book</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection