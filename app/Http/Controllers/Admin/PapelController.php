<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paper;


class PapelController extends Controller
{
   public function index()
   {
   		$registros = Paper::all();
   		return view('admin.papel.index', compact('registros'));
   }
}
