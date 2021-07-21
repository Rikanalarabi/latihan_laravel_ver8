@extends('main.Template')

@section('content')
    <div class="container mt-3">
        <h1>About Us</h1>
        <p>Nama : {{ $Name }}</p>
        <p> Email : <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=Rikanalarabi8@gmail.com">{{ $Email }}</a></p>
        <img src="img/{{ $image }}" alt="{{ $Name }}" title="{{ $Name }}" width="150">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6c757d" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,144C384,171,480,213,576,202.7C672,192,768,128,864,122.7C960,117,1056,171,1152,192C1248,213,1344,203,1392,197.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
@endsection