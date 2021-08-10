@foreach (array_keys(list_locale()) as $lang)
    <div class="{{ 'form-'.$name }} form-group">
        {{ html()->label($label . ' ' .__('menus.language-picker.langs.'.$lang))->for($name.'-'.$lang) }}
        {{ html()->textarea($name.'-'.$lang)->value($data ? $data->getTranslation($name,$lang) : '')->class('form-control pb-1')->attributes(['maxlength' =>  300, 'rows' => 4])->placeholder($label . ' ' .__('menus.language-picker.langs.'.$lang)) }}
        @if ($countableWord)
            <small class="float-right text-muted text-sm"><span class="total_text"></span> / {{ $maxSize }} text</small>
        @endif
    </div>
@endforeach


@push('after-scripts')
@if ($countableWord)
    <script>
        function validateTextArea(target, textArea, maxSize) {
            $(target).html(textArea.val().length);
            if (textArea.val().length >= maxSize) {
                $(this).find('.total_text').addClass('text-danger').removeClass('text-muted');
            }else{
                $(this).find('.total_text').addClass('text-muted').removeClass('text-danger');
            }
        }
        $(function () {
            const maxSize = {{ $maxSize }};
            const className = $('.form-{{$name}}');

            $(document).ready(function () {
                $(className).each(function () {
                    const textArea = $(this).find('textarea');
                    const target = $(this).find('span.total_text');
                    validateTextArea(target, textArea, maxSize);
                });
            })
            $(className).each(function () {
                const textArea = $(this).find('textarea');
                const target = $(this).find('span.total_text');
                $(textArea).on('keyup', _.debounce(function () {
                    validateTextArea(target, textArea, maxSize);
                }, 500))
            });
        })
    </script>
@endif
@endpush
