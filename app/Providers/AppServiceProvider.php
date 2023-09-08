<?php

namespace App\Providers;

use App\Mail\GmailMailer;
use Illuminate\Support\ServiceProvider;
use Google_Client;
use Google_Service_Gmail;
use Illuminate\Mail\MailManager;
use Illuminate\Support\Facades\File;
use Spatie\Permission\PermissionServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
