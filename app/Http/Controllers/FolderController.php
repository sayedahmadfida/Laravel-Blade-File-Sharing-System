<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Folder;
use App\Models\PostFile;
use Illuminate\Http\Request;
use App\Services\FolderService;
use App\Http\Requests\FolderRequest;
use App\Http\Resources\UserResource;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(FolderService $folderService){
        $this->folderService = $folderService;
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
    public function store(FolderRequest $request)
    {
        $folder = $request->validated();
        $folder['user_id'] = session('user.id');
        $this->folderService->createFolder($folder);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Folder $folder)
    {
        if($folder->user_id != session('user.id') && $folder->privacy == 'PRIVATE') return redirect()->back();
        $files = PostFile::where('post_id', $folder->id)->orderBy('id', 'DESC')->paginate(12);

        return view('pages.folder.show', compact('folder', 'files'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Folder $folder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Folder $folder)
    {
        $this->folderService->updateFolder($request, $folder);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Folder $folder)
    {
       return $this->folderService->deleteFolder($folder);
    }
}
