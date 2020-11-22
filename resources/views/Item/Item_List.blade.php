@extends('index.index_main_home')
@section('content_home_user')
    <div id="app">
        <div class="w3-container">
            <item></item>
        </div>

        <div class="w3-container">
        <div class="w3-container w3-card w3-white w3-margin-bottom w3-padding-16">
                <button type="button" class="btn btn-primary pull-right" @click="showModal=true">
                    Insert
                </button>
            </div>
        </div>
        {{--modal--}}
        <Modal v-model="showModal" title="My first modal">
            <create-item></create-item>
        </Modal>
    </div>

@endsection
