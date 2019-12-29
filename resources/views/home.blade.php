@extends('master')

@section('title', 'Homepage')

@section('content')
    Post a message:

    <form action="/message" method="post">
        <input type="text" name="title" id="title" placeholder="Title">
        <br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        {{ csrf_field() }}
        <button type="submit">Submit</button>
    </form>

    Recent Messages:
    <ul>
        @foreach($messages as $message)
            <li>
                <a href="/message/{{ $message->id }}"><strong>{{ $message->title }}</strong></a>
                <br>
                {{ $message->message }}
                <br>
                {{ $message->created_at->format('d/m/Y') }}
                {{ $message->created_at->diffForHumans() }}
            </li>
        @endforeach
    </ul>
@endsection
