@extends('layouts.default')
<<<<<<< HEAD
@section('title',$user->name)

@section('content')
    {{$user->name}} - {{$user->email}}
=======
@section('title', $user->name)

@section('content')
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <div class="col-md-12">
                <div class="offset-md-2 col-md-8">
                    <section class="user_info">
                        @include('shared._user_info', ['user' => $user])
                    </section>
                </div>
            </div>
        </div>
    </div>
>>>>>>> 4b44ffeb59ad025da1df00391b155f0489395821
@stop
