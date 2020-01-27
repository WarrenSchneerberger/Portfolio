@extends('layouts/app')

@section('content')
<div class="container">
        <form>
            @csrf
            <div class="card">
                <div class="card-header">
                    <input class="form-control" type="text" name="nom" />
                </div>
            </div>
            <input class="btn btn-primary" type="submit" name="envoyer" value="envoyer" formaction="{{route('issertCategorie')}}" formmethod="post" />
        </form>
</div>
@endsection