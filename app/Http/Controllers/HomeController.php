<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FolderService;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(FolderService $folderService){
        $this->folderService = $folderService;
    }
    public function index()
    {
        $folders = $this->folderService->getFolders();
        
        return view('dashboard', compact('folders'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
