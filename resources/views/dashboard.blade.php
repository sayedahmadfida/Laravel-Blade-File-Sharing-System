@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @include('pages.folder.create')
    <div class="row">
        @foreach ($folders as $folder)
            <div class="col-md-3 mt-3 text-center folder-parent">
                @include('pages.folder.edit')
                <div class="folders w-100">
                    <div class="privacy">
                        <p>{{ $folder->privacy }}</p>
                    </div>
                    <div class="btn-group btn-action">
                        <a href="javascript:void(0)" aria-expanded="false" data-toggle="dropdown">
                            <span class="action-element">... </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right action-menu ">
                            <li class="action-btn-list "><a href="{{ route('folder.show', $folder->id) }}"><i
                                        class="fa fa-external-link me-2" aria-hidden="true"></i>View</a></li>

                            @if($folder->user_id == session('user.id'))
                            <li class="action-btn-list mt-2"><a href="#" onclick="deleteFolder(event)"
                                    data-id={{ $folder->id }}><i class="fa-regular fa-trash-can me-2"></i></i>Delete</a>
                            </li>
                            <li class="action-btn-list mt-2">
                                <a href="#" data-toggle="modal" data-target="#edit-folder-modal{{$folder->id}}"><i class="fa-solid fa-pen-to-square me-2"></i></i>Edit</a>
                            </li>
                            @endif
                        </ul>
                    </div>

                    <a href="{{ route('folder.show', $folder->id) }}" class="text-center">
                        <div class=" text-center board-files">
                            <i class="fa-solid fa-folder-open"></i>
                            <p>{{ $folder->folder_name }}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

        
    </div>
    <div class="pagination-parent my-3">
        {{$folders->links()}}
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('/assets/js/folder.js') }}"></script>
@endsection
