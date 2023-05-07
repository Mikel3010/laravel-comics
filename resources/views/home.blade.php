@extends('layouts.app')
@section('page.main')
<div>
    <div class="jumbotron">
    </div>
    <div class="container-series">
        <div class="current">CURRENT SERIES</div>
        <div class="series">
            <div class="serie">
                <div class="img"><img src='https://picsum.photos/200/300' alt=""></div>
                <div class="title"></div>
            </div>
        </div>
        <div class="more">
            <button>LOAD MORE</button>
        </div>
    </div>
</div>
    
@endsection