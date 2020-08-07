@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab blanditiis minus quos, cupiditate sint eaque voluptate ducimus consequuntur optio illum pariatur necessitatibus vitae veritatis impedit perferendis repellendus nemo ea vel!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection