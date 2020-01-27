<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Categorie;

class CategorieController extends Controller
{
    public function issert(Request $request)
    {
        if($request)
        {
            $Categorie = new Categorie;

            $Categorie->nom = $request->post('nom');
            $Categorie->save();
            \Session::flash('success','
            <div class="text-center alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Votre demmande a bien été transmit
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');  
        }
        else{
            \Session::flash('warnning','
            <div class="text-center alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Attention!</strong> Vous devez remplire tout les champs requis avant de valider
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        }

        return Redirect::back();
    }

    public function supp(Request $request)
    {
        //dd($request->id);

        Article::where('id',$request->id)->delete();

        return Redirect::back();
    }
}
