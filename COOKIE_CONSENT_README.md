# GDPR Cookie Consent Implementation Guide

This document explains how to use the GDPR cookie consent system that has been integrated into your Pathfinder311 application.

## Overview

The cookie consent system includes:
- **Visual Banner**: A GDPR-compliant cookie consent banner displayed to first-time visitors
- **JavaScript Handler**: Manages user preferences and cookie compliance
- **Backend Service**: PHP service to check user preferences from the backend
- **Configuration**: Centralized configuration for cookie types and settings
- **Privacy Policy**: Dedicated privacy policy page

## Files Created/Modified

### New Files:
- `resources/views/components/cookie-consent.blade.php` - Cookie consent banner component
- `public/assets/css/cookie-consent.css` - Banner styling
- `public/assets/js/cookie-consent.js` - Banner JavaScript functionality
- `resources/views/privacy.blade.php` - Privacy policy page
- `config/cookie-consent.php` - Configuration file
- `app/Services/CookieConsentService.php` - Backend service class
- `app/Helpers/CookieConsentHelper.php` - Helper functions

### Modified Files:
- `resources/views/layouts/app.blade.php` - Added cookie consent component and assets
- `routes/web.php` - Added privacy policy route
- `composer.json` - Added helper file to autoload

## Configuration

Edit `config/cookie-consent.php` to customize:
- Cookie name and expiry time
- Cookie types and descriptions
- Google Analytics ID (optional)
- GDPR compliance settings

## Usage

### In Blade Templates

Check if user has consented to analytics:

```blade
@if(cookieConsent()->hasAnalyticsConsent())
    <!-- Load analytics scripts -->
    @include('partials.google-analytics')
@endif
```

Quick helpers:

```blade
@if(hasAnalyticsConsent())
    <!-- Load analytics -->
@endif

@if(hasMarketingConsent())
    <!-- Load marketing pixels -->
@endif

@if(hasConsentChoice())
    <!-- User has made a choice -->
@endif
```

### In PHP Controllers/Services

```php
<?php

namespace App\Http\Controllers;

use App\Services\CookieConsentService;

class YourController extends Controller
{
    public function yourMethod(CookieConsentService $cookieConsent)
    {
        if ($cookieConsent->hasAnalyticsConsent()) {
            // User has consented to analytics
        }

        if ($cookieConsent->hasMarketingConsent()) {
            // User has consented to marketing
        }

        // Get all preferences
        $preferences = $cookieConsent->getPreferences();

        // Save consent programmatically
        $cookieConsent->saveConsent([
            'essential' => true,
            'analytics' => true,
            'marketing' => false,
        ]);
    }
}
```

### In JavaScript

Access the cookie consent instance:

```javascript
// Check preferences
if (window.CookieConsent) {
    const prefs = window.CookieConsent.getPreferences();
    
    if (prefs && prefs.analytics) {
        // Load analytics
    }

    // Revoke consent and show banner again
    window.CookieConsent.revokeConsent();
}
```

## Cookie Types

### Essential Cookies
- **Default**: Always enabled
- **Description**: Required for basic site functionality and security
- **Cannot be disabled**

### Analytics Cookies
- **Default**: Disabled unless consented
- **Description**: Help understand user behavior and improve the site
- **Services**: Google Analytics, Mixpanel, etc.

### Marketing Cookies
- **Default**: Disabled unless consented
- **Description**: Used for personalized advertising and tracking
- **Services**: Facebook Pixel, LinkedIn, Google Ads, etc.

## Loading Third-Party Scripts

### Google Analytics

Uncomment and add your GA ID to `public/assets/js/cookie-consent.js`:

```javascript
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'YOUR_GA_ID');

const script = document.createElement('script');
script.async = true;
script.src = 'https://www.googletagmanager.com/gtag/js?id=YOUR_GA_ID';
document.head.appendChild(script);
```

### Facebook Pixel

Add to `loadMarketingScripts()` method:

```javascript
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
...
```

### Custom Tracking Scripts

Add to the appropriate loader method in `cookie-consent.js`:

```javascript
loadMarketingScripts() {
    // Load custom script
    const script = document.createElement('script');
    script.src = '/assets/js/your-script.js';
    document.head.appendChild(script);
}
```

## GDPR Compliance

The implementation includes:

✅ **User Consent**: Clear opt-in mechanism for non-essential cookies
✅ **Right to Access**: Users can view their preferences
✅ **Right to Withdraw**: Users can revoke consent anytime
✅ **Granular Control**: Users can choose specific cookie types
✅ **Transparency**: Clear descriptions of each cookie type
✅ **Privacy Policy**: Dedicated privacy policy page
✅ **Data Security**: HttpOnly cookies prevent XSS attacks
✅ **Minimal Data**: Only essential data collected by default

### User Rights (GDPR Article 21-22)

Users have the right to:
- Access their personal data
- Request deletion of data
- Opt-out of processing
- Revoke consent at any time

Implement these by:

1. Creating a user dashboard where they can manage preferences
2. Adding a "Manage Preferences" page
3. Providing email-based consent revocation

Example link in footer:

```blade
<a href="javascript:void(0)" onclick="window.CookieConsent.revokeConsent()">
    Manage Cookie Preferences
</a>
```

## Customization

### Styling

Edit `public/assets/css/cookie-consent.css` to match your brand:

```css
.cookie-btn-accept {
    background-color: #your-color;
}
```

### Banner Text

Edit `resources/views/components/cookie-consent.blade.php` to customize messages:

```blade
<p>Your custom cookie policy text here...</p>
```

### Cookie Types

Add new cookie type in `config/cookie-consent.php`:

```php
'cookie_types' => [
    'essential' => [...],
    'analytics' => [...],
    'marketing' => [...],
    'performance' => [
        'label' => 'Performance Cookies',
        'description' => 'Custom description...',
        'required' => false,
    ],
],
```

Then update the banner and JavaScript to handle the new type.

## Testing

### Manual Testing

1. Open your site in private/incognito window
2. Verify banner appears on first visit
3. Test each button (Accept All, Reject All, Save Settings)
4. Verify cookie is saved in browser DevTools
5. Reload page - banner should not reappear
6. Test preference links in cookie banner

### Browser DevTools

Check saved cookies:
1. Open DevTools (F12)
2. Go to Application > Cookies > Your Domain
3. Look for `pathfinder_cookie_consent` cookie
4. It contains JSON with user preferences

### Cookie Value Example

```json
{
  "essential": true,
  "analytics": true,
  "marketing": false,
  "timestamp": 1629876543
}
```

## Environment Variables

Add to `.env` for optional features:

```env
COOKIE_CONSENT_ENABLED=true
GDPR_ENABLED=true
GOOGLE_ANALYTICS_ID=UA-XXXXX-XX
```

## Troubleshooting

### Banner Not Appearing

1. Check if `COOKIE_CONSENT_ENABLED=true` in environment
2. Verify banner CSS is loaded
3. Open DevTools console for JavaScript errors
4. Check if cookie already exists in browser

### Preferences Not Saving

1. Check browser allow cookies
2. Verify JavaScript is enabled
3. Check browser console for errors
4. Ensure SameSite cookie policy is compatible

### Analytics Not Loading

1. Confirm analytics consent is true
2. Add Google Analytics ID to `cookie-consent.js`
3. Test in private window (fresh session)
4. Check if GA script is blocked

## Performance Impact

- **Banner CSS**: ~8KB (includes responsive media queries)
- **Banner JS**: ~6KB (minified)
- **No performance impact** when consent is saved (minimal storage)

## Browser Support

✅ Chrome 90+
✅ Firefox 88+
✅ Safari 14+
✅ Edge 90+
✅ Mobile browsers (iOS 14+, Android 10+)

## Support & Maintenance

### Best Practices

1. **Update Privacy Policy**: Keep it in sync with actual data practices
2. **Monitor Consent Rates**: Track how many users accept different cookie types
3. **Regular Audits**: Review third-party scripts quarterly
4. **User Feedback**: Allow users to update preferences anytime

### Future Enhancements

Consider implementing:
- Consent analytics dashboard
- A/B testing banner designs
- Preference manager page
- Multi-language support
- Organization controls and SSO

## Resources

- [GDPR Official Guidance](https://ec.europa.eu/commission/priorities/justice-and-fundamental-rights/european-digital-rights/gdpr_en)
- [ICO Cookie Guide](https://ico.org.uk/for-organisations/guide-to-data-protection/key-data-protection-themes/consent-and-cookies/)
- [EDPB Cookie Guidelines](https://edpb.ec.europa.eu/our-work_en)

---

**Last Updated**: February 19, 2026
