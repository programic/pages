<?php

namespace App\Casts;

use App\Casts\PageContentCast\PageContent;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class PageContentCast implements CastsAttributes
{
    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return PageContent
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return new PageContent($value);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return mixed
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return json_encode($value);
    }
}
