<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryPicture;
use Illuminate\Http\Request;

class GalleryPictureController extends Controller
{
    public function index($gallery)
    {
        $gallery = Gallery::find($gallery);
        $gallerypictures = GalleryPicture::where('gallery_id', $gallery->id)->get();
        return view('admin.gallerypictures.index', compact('gallerypictures', 'gallery'));
    }
}
