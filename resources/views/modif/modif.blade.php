@extends('layouts/app')

@section('content')
<div class="container">
    @foreach (App\Article::where('id',$_GET['id'])->get() as $item)
        <form><input type="hidden" name="id" value="{!!$item->id!!}">
            @csrf
            <select class="form-control" name="categorie">
                    @foreach (App\Categorie::all() as $test)
                        @if($test->id == $item->categorie) 
                            <option value="{{$test->id}}" selected>{{$test->nom}}</option>
                        @else
                            <option value="{{$test->id}}">{{$test->nom}}</option>
                        @endif
                    @endforeach
                </select>
            <div class="card">
                <div class="card-header">
                    <input class="form-control" type="text" name="nom_article" value="{{$item->nom}}" />
                </div>
                <div class="card-body">
                    <textarea class="form-control" type="text" name="text_article" cols="30" rows="10">{{$item->text}}</textarea>
                </div>
            </div>
            <input class="btn btn-primary" type="submit" name="envoyer" value="envoyer" formaction="{{route('updateArticle')}}" formmethod="post" />
        </form>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
        <script>CKEDITOR.replace( 'text_article' );</script>
    @endforeach
</div>
@endsection