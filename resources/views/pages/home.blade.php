@extends('layouts.main')

@section('content')
    <div class="banner-container">
        <div class="abstract-banner"></div>
        <div class="banner-text">
            <h1><b>Ideas</b></h1>
            <p>Additional description or subtext</p>
        </div>
    </div>

    <div class="container">
        <div>
            @include('templates.filter')
        </div>

        <div class="row" id="postContainer">
            @include('templates.card')
        </div>

        <div class="my-5 d-flex justify-content-center">
            <nav aria-label="...">
                <ul class="pagination pagination-md">
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
