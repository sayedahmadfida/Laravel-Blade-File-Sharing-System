@extends('layouts.app')

@section('title', 'Upload File')

@section('content')

    @include('pages.folder.create')
    @include('pages.file.create')
    <div class="card card-widget widget-user-2">

        <div class="widget-user-header bg-gradient-dark">

            <div class="d-flex justify-content-between">
                <div>
                    <h3 class="widget-user-username">{{ $folder->user->first_name . ' "' . $folder->user->last_name . '"' }}
                    </h3>
                    <h5 class="widget-user-desc">{{ $folder->folder_name }}</h5>
                </div>
                <div>
                    <a href="#" data-target="#new-file-modal" data-toggle="modal">Upload Your File</a>
                </div>
            </div>
        </div>
        <div class="card-footer">
            @include('pages.file.files')
            <div class="pagination-parent my-3">
                {{ $files->links() }}
            </div>
            @if ($files->total() == 0)
                    <h1 class="pb-5 pt-4 text-center text-secondary">This folder is empty</h1>
            @endif
        </div>
    </div>



@endsection

@section('scripts')
    <script src="{{ asset('assets/js/post.js') }}"></script>
@endsection
