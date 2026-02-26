<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello() {
        return 'Selamat Datang';
    }

    public function about() {
        return '244107020192 / Wawa Elent Irawanti';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }
}
