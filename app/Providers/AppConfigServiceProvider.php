<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use App\Models\Settings;

class AppConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Retrieve dynamic key-value pairs from the database
        $settings = Settings::all();

        // Set the dynamic configuration values
        $dynamicConfig = $this->processSettings($settings);
        config(['app_config' => $dynamicConfig]);
    }

    protected function processSettings($settings)
    {
        $dynamicConfig = [];

        foreach ($settings as $setting) {
            $key = $setting->key;
            $value = $setting->value;

            // Check if serialization is required
            if ($setting->serialize) {
                $value = unserialize($value);
            }

            $dynamicConfig[$key] = $value;
        }

        return $dynamicConfig;
    }
}
