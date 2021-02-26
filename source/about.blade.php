@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About Me</h1>

    <p>My name is Carla M {{ $page->owner->name }}</p>

    <h2>Follow me</h2>

    <ul>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">Twitter</a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>
@endsection
