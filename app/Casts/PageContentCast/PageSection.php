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
        return $this->section['data'];
    }

    public function getType()
    {
        return $this->section['type'];
    }

    public function isType($type)
    {
        return $this->getType() === $type;
    }

    public function render()
    {
        return view("components.themes.default.{$this->getType()}", [
            'section' => $this,
        ]);
    }
}
