@extends('layouts.app')
@section('page.main')
<div>
    <div class="jumbotron">
    </div>
    <div class="container-series">
        <div class="current">CURRENT SERIES</div>
        <div class="main__series">
            <div class="serie">
                @foreach ($comics as $comic)
                <div class="img">
                    <img src='https://picsum.photos/200/300' alt="">
                    <div class="title">
                        <p><a href="{{route('comic',['index'=>$loop->index])}}">{{$comic['title']}}</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="more">
            <button>LOAD MORE</button>
        </div>
    </div>
</div>
    
@endsection