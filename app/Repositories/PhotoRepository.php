<?php

namespace App\Repositories;
use Illuminate\Http\UploadedFile;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class PhotoRepository.
 */
class PhotoRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function save(UploadedFile $image)
    {
        $image->store(config('images.path'), 'public.photo');
    }
}
