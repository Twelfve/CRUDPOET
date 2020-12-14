@extends('layouts.master')
@if(isset($poet) and is_object($poet))
    @php
        $title='Modificacion de un Poeta';
        $boton = 'Actualizar';
        $id = $poet -> poet_code;
        $first_name = $poet -> first_name;
        $surname = $poet -> surname;
        $address = $poet -> address;
        $postcode = $poet -> postcode;
        $telephone_number = $poet -> telephone_number;
    @endphp
@else
    @php
        $title='Alta de un Poeta';
        $boton = 'Dar de Alta';
        $id = '';
        $first_name = '';
        $surname = '';
        $address = '';
        $postcode = '';
        $telephone_number = '';
    @endphp
@endif

@section('title', $title)
@section('header')

@stop
@section('navbar')

@stop
@section('content')

        <form action="{{isset($poet) ? action('CRUD@update') : action('CRUD@store')}}" method="POST">
        {{csrf_field()}}
        @if(isset($poet) and is_object($poet))
            <input type="hidden" name="id" value="{{$id}}">
        @endif
        <label for="first_name">first_name</label>
        <input type="text" name="first_name" value="{{$first_name}}">
        <br>
        <label for="surname">surname</label>
        <input type="text" name="surname" value="{{$surname}}">
        <br>
        <label for="address">address</label>
        <input type="text" name="address" value="{{$address}}">
        <br>
        <label for="postcode">postcode</label>
        <input type="text" name="postcode" value="{{$postcode}}">
        <br>
        <label for="telephone_number">telephone_number</label>
        <input type="text" name="telephone_number" value="{{$telephone_number}}">
        <br>
        <input type="submit" value="{{$boton}}">
    </form>

@stop
@section('footer')

@stop
