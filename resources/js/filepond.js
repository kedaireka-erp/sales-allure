import * as FilePond from 'filepond';

const inputElement = document.querySelector('input[id="filepond"]');

// Create a multi file upload component
const pond = FilePond.create(inputElement);

FilePond.setOptions({
    server: {
        process:{
            url: "store/attachments",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        },
        revert: {
            url: 'delete/temp/attachments',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                _method: 'DELETE'
            }
        }
    },
});
