<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ThreadCollection;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    
    public function index(){
        // inserisco in una variabile tutto 
       $threads= Thread::all();
       // ritorno e richiamo il cotruttore rella Resorce (delegato)
       return new ThreadCollection($threads); 
        
    }
}
