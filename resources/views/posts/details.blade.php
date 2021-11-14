@extends('layout')

@section('content')
    <div class="container">

        @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->id === $post->user_id)
            <h1>Détails de la formation</h1>
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="{{route('postUpdate', $post->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" class="form-control" name="title" required value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label>Extrait</label>
                            <input type="text" class="form-control" name="extrait" required value="{{$post->extrait}}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="5" required>{{$post->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Prix de la formation </label>
                            <textarea name="description" class="form-control" rows="5" required>{{$post->prix}}</textarea>
                        </div>

                        <div>
                            @foreach($categories as $category)
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="check-{{$category->id}}"
                                           name="checkboxCategories[{{$category->id}}]"
                                           value="{{$category->id}}"
                                           @if($post->categories->contains('id', $category->id)) checked @endif>
                                    <label for="check-{{$category->id}}" class="form-check-label">{{$category->name}}</label>
                                </div>
                            @endforeach
                        </div>


                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                    <p>Ecrit le {{$post->created_at->format('d/m/Y')}}</p>
                </div>
                <div class="col-md-6">
                    <form method="post" action="{{route('postUpdatePicture', $post->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Modifier l'image de la formation</label>
                            <input type="file" name="picture" required class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>

            <div class="d-flex">
                <a href="{{route('postList')}}"
                   class="btn btn-primary">Retourner à la liste des articles</a>

                <form method="post" action="{{route('postDelete', $post->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Supprimer cet article</button>
                </form>
            </div>
        @else
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
        @endif

        <h2>Commentaires</h2>
        @if(sizeof($post->comments) > 0)
            <ul>
                @foreach($post->comments as $comment)
                    <li>
                        <p>{{$comment->content}}</p>
                        <form method="post" action="{{route('commentDelete', $comment->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Il n'y aucun commentaire.</p>
        @endif

        <form method="post" action="{{route('commentAdd', $post->id)}}">
            @csrf
            <div class="form-group">
                <label>Votre commentaire</label>
                <input type="text" class="form-control" name="content" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter ce commentaire</button>
        </form>

    </div>
@endsection
