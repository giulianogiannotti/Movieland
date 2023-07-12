<?php

namespace App\Http\Controllers\Rest\V1;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/**
 * Class MovieController
 * @package App\Http\Controllers
 */
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movie::orderBy('id','asc')->get();
        $movie->makeHidden(['created_at','updated_at']);

        return response()->json($movie);
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        $movie->makeHidden(['created_at','updated_at']);

        return response()->json($movie);
    }

    public function searchByName($nombre){
        $movies= Movie::where('title','iLIKE', '%' . $nombre . '%')->get();
        $movies->makeHidden(['created_at','updated_at']);

        return response()->json($movies);
    }

    public function searchByCategory($category){
        $movies= Movie::where('id_category', $category)->get();
        $movies->makeHidden(['created_at','updated_at']);

        return response()->json($movies);
    }
}
