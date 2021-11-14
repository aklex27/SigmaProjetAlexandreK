@extends('layout')

@section('content')
    <div class="container">
        <h1>La liste des formations</h1>


        @if(\Illuminate\Support\Facades\Auth::check())

        @endif
        @if(sizeof($posts) > 0)
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset("storage/$post->picture")}}"
                                 style="object-fit: cover" height="200">
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p>{{$post->extrait}}</p>
                                <p>Il y a {{$post->countComments()}} commentaire(s)</p>

                                <div>
                                    @foreach($post->categories as $category)
                                        <span>{{$category->name}}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex">
                                    <a href="{{route('postDetails', $post->id)}}" class="btn btn-primary">Détails de la formation</a>
                                    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->id === $post->user_id)
                                        <form method="post" action="{{route('postDelete', $post->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Supprimer</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Il n'y a aucune formation en cours </p>
        @endif
    </div>
@endsection
