<?php

namespace App\Services;

use App\Models\Folder;
use App\Models\PostFile;
use Illuminate\Support\Facades\File;

class FolderService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function createFolder(array $data)
    {
        return Folder::create($data);
    }

    public function getFolders(){
        return Folder::where('user_id', session('user.id'))->orWhere('privacy', 'PUBLIC')->orderBy('id', 'DESC')->paginate(12);
    }

    public function updateFolder($request, $folder){
        $folder->folder_name = $request->folder_name;
        $folder->privacy = $request->privacy;
        return $folder->save();

    }

    public function deleteFolder($folder){
        
        $postFiles = PostFile::where('post_id', $folder->id)->get();
        
        foreach($postFiles as $postFile){
            $filename = $postFile->file_name;
            $filePath = public_path('app/public/uploaded_files/'.$filename);
            if (File::exists($filePath)) {
                
                File::delete($filePath);
                $postFile->delete();
            } 
        }
        return $folder->delete();
    }
}
