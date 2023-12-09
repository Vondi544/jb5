<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
class PostController extends Controller
{
    public function index()
    {
        //jangan lupa import model Post dengan cara klik kanan untuk import
        $post = Post::all();
        //berfungsi untuk mengatur jenis data yang akan ditampilkan
        return response()->json(['data' => $post]);
    }

}
