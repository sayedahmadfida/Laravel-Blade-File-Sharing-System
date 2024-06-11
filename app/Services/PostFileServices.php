<?php

namespace App\Services;

use App\Models\PostFile;
use Illuminate\Support\Facades\File;

class PostFileServices
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function createPostFile($request){
        $files = $request->file('file');
        $folderId = $request->folder_id;
      
        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1, 10000).'-Sayed-Ahmad-Fida-'.$file->getClientOriginalName();
            $file->storeAs('public/uploaded_files', $fileName);

            PostFile::create([
                'file_name' => $fileName, 
                'file_extension' => $extension, 
                'post_id' => $folderId, 
                'user_id' => session('user.id')
            ]);
        }
    
    }
    public function deletePostFile($postFile){
        $filename = $postFile->file_name;
        $filePath = public_path('app/public/uploaded_files/'.$filename);
        $postFile->delete();
        if (File::exists($filePath)) {
            File::delete($filePath);
        } 
    }
}
