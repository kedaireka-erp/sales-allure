import * as FilePond from 'filepond';

const inputElement = document.querySelector('input[id="filepond"]');

// Create a multi file upload component
const pond = FilePond.create(inputElement);

pond.setOptions({
    server: {
        url: 'http://sales.alluresystem.site/fppps',
        process:{
            url: "/store/attachments",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        },
        revert: {
            url: "/delete/temp/attachments",
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                _method: 'DELETE'
            }
        },
    },
});

