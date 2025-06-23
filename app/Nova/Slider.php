<?php

namespace App\Nova;

use App\Enums\SliderButtonType;
use Ebess\AdvancedNovaMediaLibrary\Fields\Media;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Slider extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Slider>
     */
    public static $model = \App\Models\Slider::class;

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
            ID::make()->sortable(),
            Text::make('Title')->required(),
            Text::make('Heading')->required(),
            Text::make('slider No')->required(),
            Text::make('Description')->required(),
            Text::make('Button 1')->required(),
            Select::make('Button 1 Type', 'button1_type')
                ->options(array_combine(SliderButtonType::getValues(), SliderButtonType::getValues()))
                ->displayUsingLabels()
                ->rules('required'),
            Text::make('Button 1 URL', 'button1_url')->required(),
            Text::make('Button 2')->required(),
            Select::make('Button 2 Type', 'button2_type')
                ->options(array_combine(SliderButtonType::getValues(), SliderButtonType::getValues()))
                ->displayUsingLabels()
                ->rules('required'),
            Text::make('Button 2 URL', 'button2_url')->required(),
            Boolean::make('Status')->default(true),
            Media::make('Slider Image', 'slider'),
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
