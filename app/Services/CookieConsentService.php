<?php

namespace App\Services;

use Illuminate\Support\Facades\Cookie;

/**
 * CookieConsentService
 * 
 * Helper service to manage GDPR cookie consent preferences.
 * This class provides methods to check, store, and manage user cookie preferences.
 */
class CookieConsentService
{
    private $cookieName;
    private $cookieExpiry;

    public function __construct()
    {
        $this->cookieName = config('cookie-consent.cookie_name', 'pathfinder_cookie_consent');
        $this->cookieExpiry = config('cookie-consent.cookie_expiry', 365);
    }

    /**
     * Get the stored cookie consent preferences
     */
    public function getPreferences(): ?array
    {
        $cookie = request()->cookie($this->cookieName);
        
        if ($cookie) {
            return json_decode($cookie, true);
        }
        
        return null;
    }

    /**
     * Check if a specific cookie type has been consented to
     */
    public function hasConsent(string $type): bool
    {
        $preferences = $this->getPreferences();
        
        if (!$preferences) {
            return false;
        }
        
        // Essential cookies are always true
        if ($type === 'essential') {
            return true;
        }
        
        return $preferences[$type] ?? false;
    }

    /**
     * Check if analytics cookies have been consented to
     */
    public function hasAnalyticsConsent(): bool
    {
        return $this->hasConsent('analytics');
    }

    /**
     * Check if marketing cookies have been consented to
     */
    public function hasMarketingConsent(): bool
    {
        return $this->hasConsent('marketing');
    }

    /**
     * Check if the user has made a consent choice
     */
    public function hasConsentChoice(): bool
    {
        return $this->getPreferences() !== null;
    }

    /**
     * Save consent preferences
     */
    public function saveConsent(array $preferences): void
    {
        $preferences['timestamp'] = now()->timestamp;
        
        Cookie::queue(
            $this->cookieName,
            json_encode($preferences),
            $this->cookieExpiry * 24 * 60,
            null,
            null,
            false,
            true // httpOnly
        );
    }

    /**
     * Accept all cookies
     */
    public function acceptAll(): void
    {
        $this->saveConsent([
            'essential' => true,
            'analytics' => true,
            'marketing' => true,
        ]);
    }

    /**
     * Reject all non-essential cookies
     */
    public function rejectAll(): void
    {
        $this->saveConsent([
            'essential' => true,
            'analytics' => false,
            'marketing' => false,
        ]);
    }

    /**
     * Revoke all consent
     */
    public function revokeConsent(): void
    {
        Cookie::queue(Cookie::forget($this->cookieName));
    }

    /**
     * Get all available cookie types
     */
    public function getCookieTypes(): array
    {
        return config('cookie-consent.cookie_types', []);
    }

    /**
     * Check if cookie consent is enabled
     */
    public function isEnabled(): bool
    {
        return config('cookie-consent.enabled', true);
    }

    /**
     * Check if GDPR compliance is enabled
     */
    public function isGdprEnabled(): bool
    {
        return config('cookie-consent.gdpr.enabled', true);
    }
}
