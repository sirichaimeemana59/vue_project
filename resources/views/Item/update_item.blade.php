@extends('index.index_main_home')
@section('content_home_user')
    <div id="app">
        <div class="w3-container">
            <update-item id="{!! $id !!}"></update-item>
        </div>
    </div>
@endsection
