<?php

namespace  App\Http\Controllers;
use App\Models\Manga;

class MangaContoller extends Controller{
    function index(){
        $mangas = Manga::all();
        return view('manga.index', compact('mangas'));
    }
    function find($id) {
        $find = Manga::find($id);
        return view('MangaUnique',compact('find'));
    }
    function create() {
        $validate = request()->validate([
            'manga_price' => 'integer',
            'manga_name' => 'required',
            'description' => 'required',
            'manga_link' =>  'required',
            'manga_autor' =>  'required',
            'manga_parution' =>  'required',
        ]);

        $m = new Manga;
        $m -> price = request('manga_price');
        $m -> name = request('manga_name');
        $m -> description = request('description');
        $m -> image = request('manga_link');
        $m -> autor = request('manga_autor');
        $m -> dateparution = request('manga_parution');
        $m -> save();

        return redirect('/Mangas/'.$m->id);
    }
    function update($id) {
        $validate = request()->validate([
            'manga_price' => 'integer',
            'manga_name' => 'required',
            'description' => 'required',
            'manga_link' =>  'required',
            'manga_autor' =>  'required',
            'manga_parution' =>  'required',
        ]);
        $update = Manga::find($id);
        $update -> price = request('manga_price');
        $update -> name = request('manga_name');
        $update -> description = request('description');
        $update -> image = request('manga_link');
        $update -> autor = request('manga_autor');
        $update -> dateparution = request('manga_parution');
        $update -> save();

        return redirect('/Mangas/'.$update->id);
    }
    function delete($id) {
        $delete = App\Models\Manga::destroy($id);
        return redirect('/Mangas');
    }
    function all() {
        $all = Manga::all();
        return view('Mangas',compact('all'));
    }
    function edit($id) {
        $update = Manga::find($id);
        return view('Update',compact('update'));
    }
    function creation() {
        return view('Create');
    }
}
