@extends('layouts/app')

@section('content')
<div class="text-center">
    <h1><u>PPE</u></h1>
</div>
<div class="container">
    @foreach (App\Article::where('categorie',1)->get() as $item)
        @guest
        <p>{!!$item->text!!}</p>
        @else
        {{-- modification des contenu des post ou créer une autre page pour gérer tout les articles à voir --}}
        @endguest
    @endforeach

</div>

@endsection
