<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Media;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class ContactUs extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ContactUs>
     */
    public static $model = \App\Models\ContactUs::class;

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
            ID::make()->sortable(),

            Text::make('Banner Title')->rules('required', 'max:255'),
            Text::make('Banner Heading')->rules('required', 'max:255'),
            Trix::make('Banner Short Description')->rules('nullable'),

            Text::make('Title')->rules('required', 'max:255'),
            Trix::make('Short Description')->rules('nullable'),

            Text::make('Phone')->rules('required', 'max:20'),
            Text::make('Email')->rules('required', 'email', 'max:255'),

            Trix::make('Google Map Embed Code', 'google_map')->alwaysShow(),

            Text::make('Facebook')->rules('nullable', 'url'),
            Text::make('Instagram')->rules('nullable', 'url'),
            Text::make('YouTube')->rules('nullable', 'url'),
            Text::make('LinkedIn', 'linkdedin')->rules('nullable', 'url'),
            Text::make('X (Twitter)', 'x')->rules('nullable', 'url'),

            Media::make('Banner Image', 'banner')
                ->disk('public')
                ->path('contact-us')
                ->rules('nullable', 'image', 'max:2048'),
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
