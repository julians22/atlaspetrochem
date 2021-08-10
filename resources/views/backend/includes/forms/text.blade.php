@foreach (array_keys(list_locale()) as $lang)
    <div class="form-group">
        {{ html()->label(Str::title($name).' '.__('menus.language-picker.langs.'.$lang))->for($name.'-'.$lang) }}
        {{ html()->text($name.'-'.$lang)
            ->value($data ? $data->getTranslation($name, $lang) : '')
            ->class('form-control')
            ->placeholder(Str::title($name).' '.__('menus.language-picker.langs.'.$lang))
            ->attribute('maxlength', 191)
            ->required() }}
    </div><!-- form-group -->
@endforeach
