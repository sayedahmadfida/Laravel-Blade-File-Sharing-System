let _token = $('[name="_token"]').val();
    $(document).ready(function() {

        $("#folder-form").validate({
            rules: {
                folder_name: {
                    required: true,
                    minlength: "3",
                    maxlength: 20
                },
                privacy:{
                    required: true
                }
            }
        });
        $("#folder-edit-form").validate({
            rules: {
                folder_name: {
                    required: true,
                    minlength: "3",
                    maxlength: 20
                },
                privacy:{
                    required: true
                }
            }
        });
    })