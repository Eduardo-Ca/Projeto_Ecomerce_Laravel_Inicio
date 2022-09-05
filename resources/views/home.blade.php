@extends('layouts.app')

@section('title', 'GShop - Ecommerce')

@section('content')
   
    @include("layouts._produtos" , [ 'lista' => $lista ])

@endsection