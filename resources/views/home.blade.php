@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p class="text-justify font-italic font-weight-bold">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est ullam, delectus officiis porro quis laboriosam debitis similique voluptatem cum sapiente, doloribus facilis magnam explicabo numquam atque ipsum earum quos cupiditate.
    </p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to sidebar</p>
@endsection