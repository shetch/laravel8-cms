<?php namespace App\Core\Composers;

use Illuminate\View\View;

use Illuminate\Support\Facades\DB;

use App\Models\Pages;


/**
 * Class NavComposer
 *
 * @package App\Core\Composers
 */
class NavComposer
{

    /**
     * Bind data to the view.
     *
    */

    public function compose(View $view)
    {
        
        $navigation = '';
        
        $navs = DB::table('pages')->where('active', '1')->get();

        foreach ($navs as $nav) {
            $navigation .= '<li class="nav-item"><a class="nav-link" href="page/'.$nav->slug.'">'.$nav->title.'</a></li>';
        }

        $view->with('navigation', $navigation);
        
    }
}
