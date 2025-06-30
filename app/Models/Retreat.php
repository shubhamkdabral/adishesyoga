<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Retreat extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public static function getUploadsCollectionName(): string
    {
        return 'retreat';
    }

    /**
     * @return \Spatie\MediaLibrary\MediaCollections\Models\Media|null
     */
    public function getUploadedMedia(): ?Media
    {
        return $this->getFirstMedia(self::getUploadsCollectionName());
    }


    public static function getUploadsBannerName(): string
    {
        return 'banner';
    }

    /**
     * @return \Spatie\MediaLibrary\MediaCollections\Models\Media|null
     */
    public function getUploadedBannerMedia(): ?Media
    {
        return $this->getFirstMedia(self::getUploadsCollectionName());
    }

    public function highlights()
    {
        return $this->hasMany(RetreatHighlights::class);
    }

    public function learnings()
    {
        return $this->hasMany(RetreatLearning::class);
    }

    public function schedule()
    {
        return $this->hasMany(RetreatSchedule::class);
    }

    public function carry()
    {
        return $this->hasMany(RetreatCarry::class);
    }

    public function travelInfo()
    {
        return $this->hasOne(ArrivalDeparture::class);
    }

    public function foodNdAcc()
    {
        return $this->hasMany(FoodNdAcc::class);
    }

    public function nearBy()
    {
        return $this->hasMany(RetreatNearBy::class);
    }
}
