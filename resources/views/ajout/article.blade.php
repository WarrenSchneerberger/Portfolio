@extends('layouts/app')

@section('content')
<div class="container">
        <form>
            @csrf
            <select class="form-control" name="categorie">
                @foreach (App\Categorie::all() as $item)
                    <option value="{{$item->id}}">{{$item->nom}}</option>
                @endforeach
            </select>
            <div class="card">
                <div class="card-header">
                    <input class="form-control" type="text" name="nom_article" />
                </div>
                <div class="card-body">
                    <textarea class="form-control" type="text" name="text_article" cols="30" rows="10"></textarea>
                </div>
            </div>
            <input class="btn btn-primary" type="submit" name="envoyer" value="envoyer" formaction="{{route('issertArticle')}}" formmethod="post" />
        </form>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
        <script>CKEDITOR.replace( 'text_article' );</script>
</div>
@endsection