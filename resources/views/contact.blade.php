@extends('layout')

@section('content')
    <div class="container">
        <h1>Formulaire de contact</h1>

        <form method="post" action="{{route('sendMail')}}">
            @csrf

            {{--Nom--}}
            <div class="form-group">
                <label>Nom et prénom</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            {{--Email--}}
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            {{--Sujet--}}
            <div class="form-group">
                <label>Sujet</label>
                <input type="text" class="form-control" name="subject" required>
            </div>
            {{--Message--}}
            <div class="form-group">
                <label>Message</label>
                <textarea rows="5" class="form-control" name="message" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer le message</button>
        </form>
    </div>
@endsection
