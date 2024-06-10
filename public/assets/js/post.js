
function deleteFile(event) {
    let id = event.target.closest('a').getAttribute('data-id');
    let element = event.target.closest('.file-parent');
    Swal.fire({
        title: "Are you sure?",
        text: "want to delete this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!"
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '/post-file/' + id,
                data: {
                    _token: _token
                },
                type: 'DELETE',
                success: function (result) {
                    element.remove();
                }
            });
        }
      });

}

Dropzone.options.myDropzone = {
    url: '/upload',
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 100,
    maxFiles: 100,
    maxFilesize: 1000, 
    acceptedFiles: '.jpg,.png,.gif,.jpeg,.pdf,.pptx,.ppt,.docx,.xlsx,.mp4,.zip',
    addRemoveLinks: true,
    dictDefaultMessage: 'Drop files here to upload',
    init: function() {
        this.on('addedfile', function(file) {});
        this.on('success', function(file, response) {
            window.location.reload();
        });
        this.on('error', function(file, message) {
            console.log('Error uploading file:', message);
        });
    }
};

function test() {
    var myDropzone = Dropzone.forElement("#my-dropzone");
    myDropzone.processQueue();
}