<?php

namespace App\Helpers;


class SocialGroup
{
    public $id;
    public $name;
    public $slug;
    public $link;
    public $poster;
    public $inSystem = false;

    public function __construct($id, $name, $slug, $link, $poster)
    {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->link = $link;
        $this->poster = $poster;
    }
}