@foreach (array_keys(list_locale()) as $lang)
    <div class="form-group {{ 'form-'.$name }}">
        {{ html()->label($label . ' ' .__('menus.language-picker.langs.'.$lang))->for($name.'-'.$lang) }}
        {{ html()->textarea($name.'-'.$lang)->class('form-control')->placeholder($label . ' ' .__('menus.language-picker.langs.'.$lang))->value($data ? $data->getTranslation($name,$lang) : '') }}
    </div>
@endforeach


@push('after-scripts')
    <script src="https://cdn.tiny.cloud/1/q5xx0e2b8q7t8zoqh6g53r6cy5ll1agqk0ux80496yglcr2i/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $(document).ready(function () {
        @foreach (array_keys(config('locale.languages')) as $lang)
        tinymce.init({
            height: '400px',
            selector: '#{{$name.'-'.$lang}}',
            menubar: 'file | edit | view | format | insert',
            plugins: 'lists, paste, link, table, advlist, code, fullscreen, paste',
            toolbar: 'undo redo | formatselect paste| ' +
                'bold italic backcolor| alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help | code | fullscreen',
                smart_paste: true,
                paste_block_drop: true,
        });
        @endforeach
        })
    </script>
@endpush
