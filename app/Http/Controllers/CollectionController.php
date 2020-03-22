<?php
namespace App\Http\Controllers;
use App\Collection;

class CollectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function collection($id)
    {
        $artworks = Collection::find($id)->artworks()->get();
        return $artworks;
    }
}
