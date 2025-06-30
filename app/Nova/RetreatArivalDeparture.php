<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class RetreatArivalDeparture extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\RetreatArivalDeparture>
     */
    public static $model = \App\Models\ArrivalDeparture::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

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
            BelongsTo::make('Retreat')->sortable()->rules('required'),

            Text::make('Check In')->rules('required', 'max:255'),
            Text::make('Nearest Airpot')->rules('required', 'max:255'),
            Text::make('Airpot Transfer')->rules('required', 'max:255'),
            Text::make('By Train')->rules('required', 'max:255'),
            Text::make('Check Out')->rules('required', 'max:255'),
            Text::make('Airport Transfer Departure')->rules('required', 'max:255'),
            Text::make('Late Departure')->rules('required', 'max:255'),
            Text::make('Extending Your Stay')->rules('required', 'max:255'),
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
