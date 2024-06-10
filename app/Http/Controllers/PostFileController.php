<?php

namespace App\Http\Controllers;

use App\Models\PostFile;
use Illuminate\Http\Request;
use App\Services\PostFileServices;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostFileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(PostFileServices $postFileService){
        $this->postFileService = $postFileService;
    }
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     */
    public function show(PostFile $postFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostFile $postFile)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostFile $postFile)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostFile $postFile)
    {
        return $this->postFileService->deletePostFile($postFile);
    }
    public function uploadFile(Request $request)
    {
        return $this->postFileService->createPostFile($request);
    }
}
