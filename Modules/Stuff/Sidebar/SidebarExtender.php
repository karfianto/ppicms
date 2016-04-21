<?php namespace Modules\Stuff\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Contracts\Authentication;

class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('stuff::abcs.title.abcs'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('stuff::stuffs.title.stuffs'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.stuff.stuff.create');
                    $item->route('admin.stuff.stuff.index');
                    $item->authorize(
                        $this->auth->hasAccess('stuff.stuffs.index')
                    );
                });
                $item->item(trans('stuff::categories.title.categories'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.stuff.category.create');
                    $item->route('admin.stuff.category.index');
                    $item->authorize(
                        $this->auth->hasAccess('stuff.categories.index')
                    );
                });
// append


            });
        });

        return $menu;
    }
}
