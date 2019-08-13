@extends('layouts.app')

@section('content')
    <h1 class="pb-2">Queries</h1>

    @if ( count($queries) > 0 )
        @foreach ($queries as $query)
            <h3><a href="/queries/{{$query->id}}">{{$query->name}}</a></h3>
            <small>{{$query->message}}</small>
        @endforeach
        {{$queries->links()}}
    @else
        <p>No results found</p>
    @endif
@endsection