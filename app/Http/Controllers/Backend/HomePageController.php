<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        /**
         * @get('/admin/homepage')
         * @name('admin.homepage')
         * @middlewares('web', auth')
         */
        return view('pages.backend.home_page');
    }
}
