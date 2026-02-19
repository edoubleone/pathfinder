<?php

use App\Services\CookieConsentService;

if (!function_exists('cookieConsent')) {
    /**
     * Get the CookieConsentService instance
     * 
     * Usage in Blade:
     *   @if(cookieConsent()->hasAnalyticsConsent())
     *       <!-- Load analytics -->
     *   @endif
     * 
     * Usage in PHP:
     *   if (cookieConsent()->hasMarketingConsent()) {
     *       // Do something
     *   }
     */
    function cookieConsent(): CookieConsentService
    {
        return app(CookieConsentService::class);
    }
}

if (!function_exists('hasAnalyticsConsent')) {
    /**
     * Quick helper to check if analytics consent is given
     */
    function hasAnalyticsConsent(): bool
    {
        return cookieConsent()->hasAnalyticsConsent();
    }
}

if (!function_exists('hasMarketingConsent')) {
    /**
     * Quick helper to check if marketing consent is given
     */
    function hasMarketingConsent(): bool
    {
        return cookieConsent()->hasMarketingConsent();
    }
}

if (!function_exists('hasConsentChoice')) {
    /**
     * Quick helper to check if user has made a consent choice
     */
    function hasConsentChoice(): bool
    {
        return cookieConsent()->hasConsentChoice();
    }
}
