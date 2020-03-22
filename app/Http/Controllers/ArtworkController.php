<?php

namespace App\Http\Controllers;

use App\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtworkController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function create(Request $request)
  {

    $file = $request->file('file');
    $extension = $file->getClientOriginalExtension();
    $filename = $file.'.'.$extension;
    $newfile = $file->move('artworks',$filename);
    $collection = DB::table('collections')->where('collection', '=', $request['collection'])->first();

    DB::table('artworks')->insert([
      'name' => $request['name'],
      'title' => $request['title'],
      'grade' => $request['year'],
      'description' => $request['description'],
      'collection_id' => $collection->id,
      'image' => $newfile
    ]);
  }
}
