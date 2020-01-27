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
    @endforeach
</div>
@endsection