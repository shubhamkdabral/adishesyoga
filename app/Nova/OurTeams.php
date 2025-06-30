<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Media;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class OurTeams extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\OurTeams>
     */
    public static $model = \App\Models\OurTeam::class;

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
        'name',
        'designation',
        'title_1',
        'title_2',
        'title_3'
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
            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Designation')
                ->rules('required', 'max:255'),

            Textarea::make('Description')
                ->rules('required'),

            Text::make('Experience')
                ->rules('required', 'max:255'),

            Text::make('Title 1', 'title_1')
                ->nullable()
                ->hideFromIndex(),

            Text::make('Title 2', 'title_2')
                ->nullable()
                ->hideFromIndex(),

            Text::make('Title 3', 'title_3')
                ->nullable()
                ->hideFromIndex(),

            Text::make('Facebook')
                ->nullable()
                ->hideFromIndex(),

            Text::make('Twitter')
                ->nullable()
                ->hideFromIndex(),

            Text::make('Instagram')
                ->nullable()
                ->hideFromIndex(),

            Text::make('LinkedIn')
                ->nullable()
                ->hideFromIndex(),

            Media::make('Banner Image', 'banner'),

            Media::make('Image', 'team'),
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
