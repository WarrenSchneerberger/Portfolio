@extends('layouts/app')

@section('content')
<style>
        img {
          display: block;
          margin-left: auto;
          margin-right: auto;
        }
</style>
<div class="text-center">
    <h1>Stage de 1er année</h1>
</div>
<div class="container">
    <div class="accordion" id="accordionExample">
        @foreach (App\Categorie::select('id')->where('nom','=','Stage 1er')->get() as $item)
            <div class="invisible">{{$test =$item->id}}</div>
        @endforeach
        @foreach (App\Article::where('categorie',$test)->get() as $item)
            @guest
            <div class="card text-white bg-dark mb-3">
                <div class="card-header text-center" id="headingOne">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{$item->id}}" aria-expanded="true" aria-controls="{{$item->id}}">
                        <h5 class="card-title">{!!$item->nom!!}</h5>
                    </button>
                </div>
                <div id="{{$item->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p class="card-text">{!!$item->text!!}</p>
                    </div>
                </div>
            </div>
            @else {{-- modification des contenu des post ou créer une autre page pour gérer tout les articles à voir --}}
            <form action="modif">
                    @csrf
                <div class="card text-white bg-dark mb-3"><input type="hidden" name="id" value="{!!$item->id!!}">
                    <div class="card-header text-center" id="headingOne">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{$item->id}}" aria-expanded="true" aria-controls="{{$item->id}}">
                            <h5 class="card-title">{!!$item->nom!!}</h5>
                        </button>
                        <input class="btn btn-primary" type="submit" value="Modifier">
                        <input class="btn btn-danger" type="submit" value="Supprimer" formaction="{{route('suppArticle')}}" formmethod="post">
                    </div>
                    <div id="{{$item->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="card-text">{!!$item->text!!}</p>
                        </div>
                    </div>
                </div>
            </form>
            @endguest
        @endforeach
    </div>
</div>
@endsection