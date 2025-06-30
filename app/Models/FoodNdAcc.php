<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class FoodNdAcc extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public static function getUploadsCollectionName(): string
    {
        return 'food';
    }

    /**
     * @return \Spatie\MediaLibrary\MediaCollections\Models\Media|null
     */
    public function getUploadedMedia(): ?Media
    {
        return $this->getFirstMedia(self::getUploadsCollectionName());
    }

    public static function getUploadsStayName(): string
    {
        return 'stay';
    }

    public function getUploadedStayMedia(): ?Media
    {
        return $this->getFirstMedia(self::getUploadsStayName());
    }


    public function retreat()
    {
        return $this->belongsTo(Retreat::class);
    }
}
