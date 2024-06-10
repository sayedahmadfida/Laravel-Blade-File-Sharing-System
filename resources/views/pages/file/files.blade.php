<div class="row">
    @foreach ($files as $file)
        <div class="col-md-3 mt-3 text-center file-parent">

            <div class="folders w-100">

                <div class="btn-group btn-action">
                    <a href="javascript:void(0)" aria-expanded="false" data-toggle="dropdown">
                        <span class="action-element">... </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right action-menu">
                        <li class="action-btn-list "><a
                                href="{{ asset('/app/public/uploaded_files/' . $file->file_name) }}"
                                target="_blank"><i class="fa-solid fa-download"></i></i>Download</a></li>

                        @if ($file->user_id == session('user.id'))
                            <li class="action-btn-list mt-2"><a href="#" onclick="deleteFile(event)"
                                    data-id={{ $file->id }}><i
                                        class="fa-regular fa-trash-can me-2"></i></i>Delete</a>
                            </li>
                        @endif
                    </ul>
                </div>

                <div class=" text-center files-icon">
                    @if (
                        $file->file_extension == 'jpg' ||
                            $file->file_extension == 'png' ||
                            $file->file_extension == 'gif' ||
                            $file->file_extension == 'jpeg')
                        <img src="{{ asset('/app/public/uploaded_files/' . $file->file_name) }}" class="rounded"
                            alt="">
                    @elseif($file->file_extension == 'pptx' || $file->file_extension == 'ppt')
                        <img src="{{ asset('/assets/img/ppt.png') }}" class="rounded" alt="">
                    @elseif($file->file_extension == 'MP4')
                        <img src="{{ asset('/assets/img/mp4.png') }}" class="rounded" alt="">
                    @elseif($file->file_extension == 'pdf')
                        <img src="{{ asset('/assets/img/pdf.png') }}" class="rounded" alt="">
                    @elseif($file->file_extension == 'docx')
                        <img src="{{ asset('/assets/img/docx.png') }}" class="rounded" alt="">
                    @elseif($file->file_extension == 'xlsx')
                        <img src="{{ asset('/assets/img/Excel.png') }}" class="rounded" alt="">
                    @else
                        <img src="{{ asset('/assets/img/zip.png') }}" class="rounded" alt="">
                    @endif
                    <p class="pb-3 pt-2">{{ $file->file_extension }}</p>

                </div>
            </div>
        </div>
    @endforeach
    
</div>