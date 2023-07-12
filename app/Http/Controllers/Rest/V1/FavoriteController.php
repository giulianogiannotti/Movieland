<?php

namespace App\Http\Controllers\Rest\V1;

use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/**
 * Class FavoriteController
 * @package App\Http\Controllers
 */
class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favorite = Favorite::orderBy('id','asc')->get();
        $favorite->makeHidden(['created_at','updated_at']);

        return response()->json($favorite);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $favorite = Favorite::find($id);
        $favorite->makeHidden(['created_at','updated_at']);

        return response()->json($favorite);
    }


}
