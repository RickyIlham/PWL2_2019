@extends('tryblade.layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')
    <p>This is my body content.</p>
@endsection

<x-alert>
    <strong>Whoops!</strong>something went wrong!
</x-alert>
