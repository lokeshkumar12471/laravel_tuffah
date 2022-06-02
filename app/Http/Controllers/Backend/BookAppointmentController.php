<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BookAppointment;

class BookAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /**
        * @get('/admin/book-appointment')
        * @name('admin.book.appointment')
        * @middlewares('web', auth')
        */
        return view('pages.backend.book_appointment');
    }
}
