<script src="https://cdn.tiny.cloud/1/q5xx0e2b8q7t8zoqh6g53r6cy5ll1agqk0ux80496yglcr2i/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@if ($editors)
    <script>
        $(document).ready(function () {

            @for ($i = 0; $i < count($editors); $i++)
                tinymce.init({
                    selector: '{{$editors[$i]['id']}}',
                    menubar: 'file | edit | view | format | insert',
                    plugins: 'lists, paste, link, table, advlist',
                    toolbar: 'undo redo | formatselect link| ' +
                        'bold italic backcolor| alignleft aligncenter ' +
                        'alignright alignjustify | bullist numlist outdent indent | ' +
                        'removeformat | help',
                });
            @endfor
        })
    </script>
@endif
