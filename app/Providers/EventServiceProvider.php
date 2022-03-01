<?php

namespace App\Providers;

use App\Models\AsignarDivision;
use App\Models\Inscripcion;
use App\Observers\CalificacionesObserver;
use App\Observers\InscripcionObserver;
use App\Observers\NotasObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
       AsignarDivision::observe(CalificacionesObserver::class);
       Inscripcion::observe(InscripcionObserver::class);
    }
}
