<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Media;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class FoodAndAcc extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\FoodAndAcc>
     */
    public static $model = \App\Models\FoodNdAcc::class;

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

            Text::make('Title')->rules('required', 'max:255'),

            Trix::make('Accommodation Description', 'acc_description')->rules('required')->alwaysShow(),

            Text::make('Room Type')->rules('required', 'max:255'),

            Text::make('Amenities')->rules('required', 'max:255'),

            Text::make('Connectivity')->rules('required', 'max:255'),

            Media::make('Stay Image', 'stay'),

            Trix::make('Food Description')->rules('required')->alwaysShow(),

            Text::make('Org Local')->rules('required', 'max:255'),

            Text::make('Meal Schedule')->rules('required', 'max:255'),

            Text::make('Dietary Needs')->rules('required', 'max:255'),

            Media::make('Restaurant / Food Image', 'food'),

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
