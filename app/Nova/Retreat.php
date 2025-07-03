<?php

namespace App\Nova;

use App\Enums\RetreatButtonTypeEnum;
use Ebess\AdvancedNovaMediaLibrary\Fields\Media;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Retreat extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Retreat>
     */
    public static $model = \App\Models\Retreat::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            Text::make('Banner Title')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Banner Heading')
                ->sortable()
                ->rules('required', 'max:255'),

            text::make('Banner Short Description'),

            Text::make('Title')
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Slug')
                ->from('Title')
                ->help('Please do not make any changes to this field.')
                ->separator('-')
                ->hideWhenUpdating()
                ->rules('required', 'unique:retreats,slug,{{resourceId}}')
                ->creationRules('unique:retreats,slug')
                ->updateRules('unique:retreats,slug,{{resourceId}}')
                ->hideFromIndex(),

            Text::make('Description'),

            Number::make('program_in_days'),

            Number::make('price'),

            Text::make('Button Text')
                ->sortable()
                ->rules('required', 'max:255'),

            Select::make('Button Type', 'button_type')
                ->options(array_combine(RetreatButtonTypeEnum::getValues(), RetreatButtonTypeEnum::getValues()))
                ->displayUsingLabels()
                ->rules('required'),

            Text::make('Address')
                ->sortable()
                ->rules('required', 'max:255'),

            Media::make('Banner Image', 'banner'),

            Media::make('Image', 'retreat'),

            HasMany::make('Highlights', 'highlights', RetreatHighlights::class),

            HasMany::make('Learnings', 'learnings', RetreatLearning::class),

            HasMany::make('Schedules', 'schedule', RetreatSchedule::class),

            HasMany::make('What to Carry', 'carry', RetreatCarries::class),

            HasOne::make('Travel Info', 'travelInfo', RetreatArivalDeparture::class),

            HasMany::make('Food & Accommodation', 'foodNdAcc', FoodAndAcc::class),

            HasMany::make('Nearby Places', 'nearBy', RetreatNearBy::class),

            HasMany::make('Calendar', 'calendar', RetreatCalendar::class),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
