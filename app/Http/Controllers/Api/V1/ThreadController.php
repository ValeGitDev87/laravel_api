<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThreadRequest;
use App\Http\Requests\ThreadUpdateRequest;
use App\Http\Resources\V1\ThreadCollection;
use App\Http\Resources\V1\ThreadResource;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $threads = Thread::all();
      return new ThreadCollection($threads);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ThreadRequest $request)
    {
     
      
        $thread = Thread::create($request->validate());
        
        return new ThreadCollection($thread);
    }

    /**
     * Display the specified resource.
     */
    public function show(Thread $thread)
    {
        return new ThreadResource($thread);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ThreadUpdateRequest $request, Thread $thread)
    {
       // Ottenere i dati validati dall'oggetto $request
       $data = $request->validated();

       // Aggiornare il modello con i dati validati
       $thread->fill($data);
       $thread->save();
   
       return new ThreadResource($thread);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
