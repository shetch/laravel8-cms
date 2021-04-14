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
        
        $pages = DB::table('pages')->where('active', '1')->get();

        $view->with('pages', $pages);
        
    }
}
