<li class="breadcrumb-menu">
    <div class="btn-group" role="group" aria-label="Button group">
        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="breadcrumb-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('Slider Company')</a>

            <div class="dropdown-menu" aria-labelledby="breadcrumb-dropdown-1">
                <a class="dropdown-item" href="{{ route('admin.slider.company') }}">@lang('Active Slider')</a>
                <a class="dropdown-item" href="{{ route('admin.slider.company.create') }}">@lang('Create New Slider')</a>
                <a class="dropdown-item" href="{{ route('admin.slider.company.deleted') }}">@lang('Deleted Slider')</a>
            </div>
        </div><!--dropdown-->

        <!--<a class="btn" href="#">Static Link</a>-->
    </div><!--btn-group-->
</li>
