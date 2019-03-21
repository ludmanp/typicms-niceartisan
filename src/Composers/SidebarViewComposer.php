<?php

namespace TypiCMS\Modules\NiceArtisan\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Sidebar\SidebarGroup;
use Maatwebsite\Sidebar\SidebarItem;

class SidebarViewComposer
{
    public function compose(View $view)
    {
        if (Gate::denies('see-niceartisan')) {
            return;
        }
        $view->sidebar->group(__('SuperUser'), function (SidebarGroup $group) {
            $group->id = 'superuser';
            $group->weight = 200;
            $group->addItem(__('Nice Artisan'), function (SidebarItem $item) {
                $item->id = 'nice_artisan';
                $item->icon = config('typicms.niceartisan.sidebar.icon', 'icon fa fa-fw fa-code');
                $item->weight = 200;
                $item->route('niceartisan');
                $item->target_blank=true;
            });
        });
    }
}
