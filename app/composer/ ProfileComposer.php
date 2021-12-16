<?php
namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;

class ProfileComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $items;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $items)
    {
        // Dependencies are automatically resolved by the service container...
        $this->items = $items;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    // public function compose(View $view)
    // {
    //     $view->with('count', $this->items->select());
    // }
    public function compose(View $view) {
        $view->with('home_item', "Calling with View Composer Provider");
    }
}
