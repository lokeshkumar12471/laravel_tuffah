<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class MiscellaneousController extends Controller
{
    public function image_upload(Request $request)
    {
       /**
        * @post('/admin/image_upload')
        * @name('admin.ckeditor.upload')
        * @middlewares('web', auth')
        */
        $blog = new Blog();
        $blog->id = 0;
        $blog->exists = true;
        $image = $blog->addMediaFromRequest('upload')->toMediaCollection('images');

        return response()->json([
            'url' => $image->getUrl('thumb')
        ]);
    }

    public function terms()
    {
       /**
        * @get('/admin/terms')
        * @name('admin.terms')
        * @middlewares('web', auth')
        */
        return view('pages.backend.terms');
    }

    public function privacy()
    {
       /**
        * @get('/admin/privacy')
        * @name('admin.privacy')
        * @middlewares('web', auth')
        */
        return view('pages.backend.privacy');
    }

    public function career()
    {
       /**
        * @get('/admin/career')
        * @name('admin.career')
        * @middlewares('web', auth')
        */
        return view('pages.backend.career');
    }

    public function feedback()
    {
        /**
         * @get('/admin/feedback')
         * @name('admin.feedback')
         * @middlewares('web', auth')
         */
        return view('pages.backend.feedback');
    }
}
