<?php

namespace App\Casts\PageContentCast;

class PageSection
{
    private array $section;

    public function __construct($section)
    {
        $this->section = $section;
    }

    public function getData()
    {
        return $this->section;
    }
}