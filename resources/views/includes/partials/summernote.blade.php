@push('after-styles')
    <link href="{{ asset('js/vendor/summernote-bs4.min.css') }}" rel="stylesheet">
@endpush


@push('after-scripts')
    <script src="{{ asset('js/vendor/summernote-bs4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.form-summernote').summernote({
                placeholder: $('.form-summernote').attr('placeholder'),
                minHeight: 170,
            });
        });
    </script>
@endpush