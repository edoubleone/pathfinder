// GDPR Cookie Consent Handler
(function() {
    'use strict';

    const COOKIE_NAME = 'pathfinder_cookie_consent';
    const COOKIE_EXPIRY_DAYS = 365;

    class CookieConsent {
        constructor() {
            this.banner = document.getElementById('cookie-consent-banner');
            this.acceptBtn = document.getElementById('cookie-accept-btn');
            this.rejectBtn = document.getElementById('cookie-reject-btn');
            this.saveBtn = document.getElementById('cookie-save-btn');
            this.analyticsCheckbox = document.getElementById('analytics-cookies');
            this.marketingCheckbox = document.getElementById('marketing-cookies');
            
            if (this.banner) {
                this.init();
            }
        }

        init() {
            // Check if user has already made a choice
            if (!this.getCookie(COOKIE_NAME)) {
                this.showBanner();
            }

            // Attach event listeners
            if (this.acceptBtn) {
                this.acceptBtn.addEventListener('click', () => this.acceptAll());
            }
            if (this.rejectBtn) {
                this.rejectBtn.addEventListener('click', () => this.rejectAll());
            }
            if (this.saveBtn) {
                this.saveBtn.addEventListener('click', () => this.saveSettings());
            }

            // Load saved preferences
            this.loadPreferences();
        }

        showBanner() {
            if (this.banner) {
                this.banner.style.display = 'block';
            }
        }

        hideBanner() {
            if (this.banner) {
                this.banner.classList.add('closing');
                setTimeout(() => {
                    this.banner.style.display = 'none';
                    this.banner.classList.remove('closing');
                }, 400);
            }
        }

        acceptAll() {
            const preferences = {
                essential: true,
                analytics: true,
                marketing: true,
                timestamp: new Date().getTime()
            };

            this.saveCookie(COOKIE_NAME, JSON.stringify(preferences), COOKIE_EXPIRY_DAYS);
            this.loadGoogleAnalytics();
            this.loadMarketingScripts();
            this.hideBanner();
        }

        rejectAll() {
            const preferences = {
                essential: true,
                analytics: false,
                marketing: false,
                timestamp: new Date().getTime()
            };

            this.saveCookie(COOKIE_NAME, JSON.stringify(preferences), COOKIE_EXPIRY_DAYS);
            this.hideBanner();
        }

        saveSettings() {
            const preferences = {
                essential: true,
                analytics: this.analyticsCheckbox ? this.analyticsCheckbox.checked : false,
                marketing: this.marketingCheckbox ? this.marketingCheckbox.checked : false,
                timestamp: new Date().getTime()
            };

            this.saveCookie(COOKIE_NAME, JSON.stringify(preferences), COOKIE_EXPIRY_DAYS);

            if (preferences.analytics) {
                this.loadGoogleAnalytics();
            }
            if (preferences.marketing) {
                this.loadMarketingScripts();
            }

            this.hideBanner();
        }

        loadPreferences() {
            const cookieValue = this.getCookie(COOKIE_NAME);
            if (cookieValue) {
                try {
                    const preferences = JSON.parse(cookieValue);
                    if (this.analyticsCheckbox) {
                        this.analyticsCheckbox.checked = preferences.analytics || false;
                    }
                    if (this.marketingCheckbox) {
                        this.marketingCheckbox.checked = preferences.marketing || false;
                    }

                    // Load scripts based on saved preferences
                    if (preferences.analytics) {
                        this.loadGoogleAnalytics();
                    }
                    if (preferences.marketing) {
                        this.loadMarketingScripts();
                    }
                } catch (e) {
                    console.error('Error parsing cookie preferences:', e);
                }
            }
        }

        loadGoogleAnalytics() {
            // Google Analytics implementation
            // Uncomment and add your Google Analytics ID
            /*
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'YOUR_GA_ID');

            const script = document.createElement('script');
            script.async = true;
            script.src = 'https://www.googletagmanager.com/gtag/js?id=YOUR_GA_ID';
            document.head.appendChild(script);
            */
            console.log('Analytics enabled');
        }

        loadMarketingScripts() {
            // Add your marketing scripts here
            // Example: Facebook Pixel, LinkedIn, etc.
            console.log('Marketing scripts enabled');
        }

        saveCookie(name, value, days) {
            let expires = '';
            if (days) {
                const date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = '; expires=' + date.toUTCString();
            }
            document.cookie = name + '=' + encodeURIComponent(value) + expires + '; path=/; SameSite=Strict';
        }

        getCookie(name) {
            const nameEQ = name + '=';
            const cookies = document.cookie.split(';');
            for (let i = 0; i < cookies.length; i++) {
                let cookie = cookies[i].trim();
                if (cookie.indexOf(nameEQ) === 0) {
                    return decodeURIComponent(cookie.substring(nameEQ.length));
                }
            }
            return null;
        }

        // Method to revoke consent
        revokeConsent() {
            document.cookie = COOKIE_NAME + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            this.showBanner();
        }

        // Method to get current preferences
        getPreferences() {
            const cookieValue = this.getCookie(COOKIE_NAME);
            if (cookieValue) {
                try {
                    return JSON.parse(cookieValue);
                } catch (e) {
                    return null;
                }
            }
            return null;
        }
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            window.CookieConsent = new CookieConsent();
        });
    } else {
        window.CookieConsent = new CookieConsent();
    }

})();
