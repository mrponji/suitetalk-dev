@extends('layouts.app')

@section('content')
    <h1>{{$query->name}}</a></h1>
    <div>
        {{$query->message}}
    </div>
    <small>{{$query->updated_at}}</small>
@endsection