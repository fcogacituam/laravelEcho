@extends('layouts.app')
@section('content')


    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Websockets</div>

                <div class="card-body" id="app">
                    <chat-log :messages="messages"></chat-log>
                    <chat-composer v-on:messagesent="addMessage"></chat-composer>
                </div>
            </div>
        </div>
    </div>
</div>

   

@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Websockets</div>

                <div class="card-body">
                    <chat-log :messages="messages"></chat-log>
                 <chat-composer v-on:messagesent="addMessage"></chat-composer>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection --}}


