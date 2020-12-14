@extends('layouts.master')
@section('title', $title)
@section('header')

@stop
@section('navbar')

@stop
@section('content')
    <div>
        <a href="{{action('CRUD@create')}}"> Agregar un nuevo poeta <img src="{{url('/images/more.png')}}" width="2%"></a>
    </div>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">first_name</th>
            <th scope="col">surname</th>
            <th scope="col">address</th>
            <th scope="col">postcode</th>
            <th scope="col">telephone_number</th>
            <th scope="col">Actualizar</th>
            <th scope="col">Borrar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($poetas as $poet)
        <tr>
            <td>{{$poet->first_name}}</td>
            <td>{{$poet->surname}}</td>
            <td>{{$poet->address}}</td>
            <td>{{$poet->postcode}}</td>
            <td>{{$poet->telephone_number}}</td>
            <td><a href="{{action('CRUD@show', ['id' => $poet->poet_code])}}"><img src="{{url('/images/loop-arrow.png')}}" width="8%"></a></td>
            <td><a href="{{action('CRUD@destroy', ['id' => $poet->poet_code])}}"><img src="{{url('/images/img_26004.png')}}" width="4%"></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @if(session('status'))
    <div class="alert alert-danger" role="alert">
        {{session('status')}}
    </div>
    @endif

@stop
@section('footer')

@stop
