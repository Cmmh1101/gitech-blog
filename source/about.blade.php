@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About Me</h1>

    <p>My name is Carla M. I'm a teacher in the mid 30's. Mom, wife, teacher, and web developer</p>

    <p>After 10 years teaching in both my home country and U.S. I discovered that its posible to learn how to code and be a web developer without any former education in the field.</p>

    <p>I was always attracted to tech but widthout a degree in tech I was sure I would never get the chance to be involved in the field but, <em>how wrong I was...</em></p>

    <p>I found hope in other that just like me got into tech without a degree and learning on their own. Then I thought, if they did it... <em>I can do it too</em></p>

    <p>That is why I want to share the ins and outs of my learning process, which hopefully will provide hope, tools, guidance, and resources to others that are looking for options.</p>

    <p>Learning to code is not easy, <em>But its absolutely posible!</em><br />Stay tuned, let's learn together, and support each other!</p>

    <h2>Follow me</h2>

    <ul>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">Twitter<i class="fab fa-twitter-square"></i></a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>
@endsection
