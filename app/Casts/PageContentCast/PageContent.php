<?php

namespace App\Casts\PageContentCast;

class PageContent
{
    private array $content;


    public function __construct($content)
    {
        $this->content = json_decode($content, true);
    }

    public function getSections()
    {
        return array_map(function ($section) {
            return new PageSection($section);
        }, $this->content);
    }

}