<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cookie Consent Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains all the configuration options for the GDPR cookie
    | consent banner and functionality.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Cookie Name
    |--------------------------------------------------------------------------
    |
    | The name of the cookie that stores the user's consent preferences.
    |
    */
    'cookie_name' => 'pathfinder_cookie_consent',

    /*
    |--------------------------------------------------------------------------
    | Cookie Expiry (Days)
    |--------------------------------------------------------------------------
    |
    | How long (in days) the cookie consent preference should be remembered.
    |
    */
    'cookie_expiry' => 365,

    /*
    |--------------------------------------------------------------------------
    | Cookie Types
    |--------------------------------------------------------------------------
    |
    | Define the cookie types that your application uses. These will be
    | displayed in the cookie consent banner.
    |
    */
    'cookie_types' => [
        'essential' => [
            'label' => 'Essential Cookies',
            'description' => 'Required for basic site functionality and security. These cannot be disabled.',
            'required' => true,
        ],
        'analytics' => [
            'label' => 'Analytics Cookies',
            'description' => 'Help us understand how you use our site to improve functionality and user experience.',
            'required' => false,
        ],
        'marketing' => [
            'label' => 'Marketing Cookies',
            'description' => 'Used to track your activity across websites to deliver personalized advertising.',
            'required' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Google Analytics
    |--------------------------------------------------------------------------
    |
    | Add your Google Analytics ID if you want to use analytics with
    | the cookie consent system.
    |
    */
    'google_analytics_id' => env('GOOGLE_ANALYTICS_ID', null),

    /*
    |--------------------------------------------------------------------------
    | Privacy Policy URL
    |--------------------------------------------------------------------------
    |
    | The URL to your privacy policy page. This will be displayed in the
    | cookie consent banner.
    |
    */
    'privacy_policy_url' => '/privacy',

    /*
    |--------------------------------------------------------------------------
    | Enable Cookie Consent
    |--------------------------------------------------------------------------
    |
    | Master switch to enable/disable the cookie consent banner.
    |
    */
    'enabled' => env('COOKIE_CONSENT_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | GDPR Compliance
    |--------------------------------------------------------------------------
    |
    | Settings to ensure GDPR compliance.
    |
    */
    'gdpr' => [
        'enabled' => env('GDPR_ENABLED', true),
        'data_retention_days' => 90,
        'data_deletion_on_revoke' => true,
    ],
];
