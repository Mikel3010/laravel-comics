@extends('layouts.app')
@section('page.main')
<div class="main__comic">
    <div class="jumbotron">
    </div>
    <div class="comic_img">
        <img src='https://picsum.photos/200/300' alt="">
    </div>
    <div class="blue_line"></div>
    <div class="comic_main">
        <div class="comic_info">
            <h1>{{$comics['title']}}</h1>
            <div class="comic_green">
                <div class="green_left justify-content-between">
                    <div class="d-flex  align-items-center"><p>U.S. Price:</p>
                        <p class="price">{{$comics['price']}}</p>
                    </div>
                    <div class="d-flex  align-items-center"><p>AVAILABLE</p></div>
                </div>
                <div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown button
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                </div>
            </div>
            <div class="descripiont">
                <p>{{$comics['description']}}</p>
            </div>
        </div>
        <div class="comic_adv">
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
        </div>
    </div>
    <div class="comic_footer">
        <div class="comic_talent">
            <h3>Talent</h3>
            <div class="talent_art d-flex justify-content-between">
                <p class="mx-2">Art by:</p>
                <p class="mx-2">artist</p>
            </div>
            <div class="talent_written d-flex justify-content-between">
                <p class="mx-2">Written by:</p>
                <p class="mx-2">writers</p>
            </div>
        </div>
        <div class="comic_specs">
            <h3>Specs</h3>
            <div class="specs_series d-flex justify-content-between">
                <p class="mx-2">Series:</p>
                <p class="mx-2">{{$comics['series']}}</p>
            </div>
            <div class="specs_price d-flex justify-content-between">
                <p class="mx-2">U.S. Price:</p>
                <p class="mx-2">{{$comics['price']}}</p>
            </div>
            <div class="specs_date d-flex justify-content-between">
                <p class="mx-2">On Sale Date:</p>
                <p class="mx-2">{{$comics['sale_date']}}</p>
            </div>
        </div>
    </div>
</div>
@endsection