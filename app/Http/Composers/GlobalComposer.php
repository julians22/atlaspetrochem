<?php

namespace App\Http\Composers;

use App\Models\WebSetting;
use Illuminate\View\View;

/**
 * Class GlobalComposer.
 */
class GlobalComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('logged_in_user', auth()->user());
        $view->with('setting', new WebSetting());
    }
}
