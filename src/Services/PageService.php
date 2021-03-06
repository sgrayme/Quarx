<?php

namespace Yab\Quarx\Services;

use Illuminate\Support\Facades\Auth;
use Yab\Quarx\Repositories\PagesRepository;

class PageService
{

    public function __construct()
    {
        $this->pageRepo = new PagesRepository;
    }

    public function getPagesAsOptions()
    {
        $pages = [];
        $publishedPages = $this->pageRepo->all();

        foreach ($publishedPages as $page) {
            $pages[$page->title] = $page->id;
        }

        return $pages;
    }

    public function getTemplatesAsOptions()
    {
        $availableTemplates = ['show'];
        $templates = glob(base_path('resources/views/quarx/pages/*'));

        foreach ($templates as $template) {
            $template = str_replace(base_path('resources/views/quarx/pages/'), '', $template);
            if (stristr($template, 'template')) {
                $template = str_replace('-template.blade.php', '', $template);
                if (! stristr($template, '.php')) {
                    $availableTemplates[] = $template.'-template';
                }
            }
        }

        return $availableTemplates;
    }

    public function pageName($id)
    {
        $page = $this->pageRepo->findPagesById($id);
        return $page->title;
    }
}
