<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ContactUs extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;


    public static function getUploadsBannerName(): string
    {
        return 'banner';
    }

    /**
     * @return \Spatie\MediaLibrary\MediaCollections\Models\Media|null
     */
    public function getUploadedBannerMedia(): ?Media
    {
        return $this->getFirstMedia(self::getUploadsBannerName());
    }
}
