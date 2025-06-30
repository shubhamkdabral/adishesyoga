<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class RetreatNearby extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public static function getUploadsCollectionName(): string
    {
        return 'nearby';
    }

    public function getUploadedMedia(): ?Media
    {
        return $this->getFirstMedia(self::getUploadsCollectionName());
    }

    public function retreat()
    {
        return $this->belongsTo(Retreat::class);
    }
}
