<?php

namespace App\Providers;

use App\Nova\AboutUs;
use App\Nova\FoodStay;
use App\Nova\FoodStayTitle;
use App\Nova\Founder;
use App\Nova\ImageSlider;
use App\Nova\MissionVision;
use App\Nova\OurPhilosophy;
use App\Nova\OurTeams;
use App\Nova\Retreat;
use App\Nova\RetreatSchedule;
use App\Nova\Reviews;
use App\Nova\Slider;
use App\Nova\Stays;
use App\Nova\StaysAmenities;
use App\Nova\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        $this->customMenu();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function customMenu()
    {
        return Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::make('Home Section', [
                    MenuItem::resource(Slider::class),
                    MenuItem::resource(ImageSlider::class),
                    MenuItem::resource(WhyChooseUs::class),
                    MenuItem::resource(Reviews::class),
                    MenuItem::resource(Stays::class),
                    MenuItem::resource(StaysAmenities::class),
                ])->icon('shield-check')->collapsable(),

                MenuSection::make('About Us', [
                    MenuItem::resource(AboutUs::class),
                    MenuItem::resource(Founder::class),
                    MenuItem::resource(MissionVision::class),
                    MenuItem::resource(OurPhilosophy::class),
                ])->icon('shield-check')->collapsable(),

                MenuSection::make('Our Teachers & Team', [
                    MenuItem::resource(OurTeams::class),
                ])->icon('shield-check')->collapsable(),

                MenuSection::make('Retreats', [
                    MenuItem::resource(Retreat::class),
                    MenuItem::resource(RetreatSchedule::class),
                ])->icon('shield-check')->collapsable(),

                MenuSection::make('Food & Accommodation', [
                    MenuItem::resource(FoodStayTitle::class),
                    MenuItem::resource(FoodStay::class),
                ])->icon('shield-check')->collapsable(),
            ];
        });
    }
}
