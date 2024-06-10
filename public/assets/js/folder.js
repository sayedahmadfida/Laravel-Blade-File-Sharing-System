

function deleteFolder(event) {
    let id = event.target.closest('a').getAttribute('data-id');
    let element = event.target.closest('.folder-parent');
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this folder and the inside files!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!"
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '/folder/' + id,
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