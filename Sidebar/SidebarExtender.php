<?php namespace Modules\Warrant\Sidebar;

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
            $group->item(trans('warrant::warrant.title'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('warrant::acts.title.acts'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.warrant.acts.create');
                    $item->route('admin.warrant.acts.index');
                    $item->authorize(
                        $this->auth->hasAccess('warrant.acts.index')
                    );
                });
                $item->item(trans('warrant::types.title.types'), function (Item $item) {
                    $item->icon('fa fa-file-text');
                    $item->weight(0);
                    $item->append('admin.warrant.types.create');
                    $item->route('admin.warrant.types.index');
                    $item->authorize(
                        $this->auth->hasAccess('warrant.types.index')
                    );
                });
            });
        });

        return $menu;
    }
}
