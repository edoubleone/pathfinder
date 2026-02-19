<div x-data="{
        showBanner: false,
        showPanel: false,
        preferences: {
            essential: true,
            analytics: false,
            preferences: false,
            marketing: false,
        },
        init() {
            const consent = this.getCookie('pathfinder_cookie_consent');
            if (!consent) {
                setTimeout(() => this.showBanner = true, 1500);
            } else {
                try {
                    const saved = JSON.parse(consent);
                    this.preferences = saved;
                } catch (e) {
                    console.error('Error parsing cookie consent:', e);
                }
            }
        },
        acceptAll() {
            this.preferences.analytics = true;
            this.preferences.preferences = true;
            this.preferences.marketing = true;
            this.savePreferences();
        },
        declineAll() {
            this.preferences.analytics = false;
            this.preferences.preferences = false;
            this.preferences.marketing = false;
            this.savePreferences();
        },
        savePreferences() {
            this.setCookie('pathfinder_cookie_consent', JSON.stringify(this.preferences), 365);
            this.showBanner = false;
            this.showPanel = false;
        },
        openPanel() {
            this.showPanel = true;
            this.showBanner = false;
        },
        closePanel() {
            this.showPanel = false;
            if (!this.getCookie('pathfinder_cookie_consent')) {
                this.showBanner = true;
            }
        },
        getCookie(name) {
            const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
            return match ? decodeURIComponent(match[2]) : null;
        },
        setCookie(name, value, days) {
            const expires = new Date(Date.now() + days * 864e5).toUTCString();
            document.cookie = name + '=' + encodeURIComponent(value) + '; expires=' + expires + '; path=/; SameSite=Lax';
        }
    }"
    @keydown.escape.window="showPanel = false"
    x-cloak>

    {{-- ==================== BANNER ==================== --}}
    <div x-show="showBanner && !showPanel"
         x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="opacity-0 translate-y-8"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-8"
         class="cookie-banner-container">
        <div class="cookie-banner">
            <div class="cookie-banner-content">
                <div class="cookie-banner-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2a10 10 0 1 0 10 10 4 4 0 0 1-5-1 4 4 0 0 1-1-5 10.06 10.06 0 0 0-4-4Z"/>
                        <circle cx="8" cy="11" r="1"/>
                        <circle cx="12" cy="15" r="1"/>
                        <circle cx="15" cy="10" r="1"/>
                    </svg>
                </div>
                <div class="cookie-banner-text">
                    <h3 class="cookie-banner-title">We Value Your Privacy</h3>
                    <p class="cookie-banner-description">
                        We use cookies to improve your experience, analyze traffic, and personalize content. You can choose to accept all cookies, customize your preferences, or decline non-essential cookies. Learn more in our
                        <a href="{{ route('privacy') }}" class="cookie-banner-link">Privacy Policy</a>.
                    </p>
                </div>
            </div>

            <div class="cookie-banner-buttons">
                <button @click="openPanel()"
                        class="cookie-btn cookie-btn-tertiary">
                    Customize Settings
                </button>
                <button @click="declineAll()"
                        class="cookie-btn cookie-btn-secondary">
                    Decline All
                </button>
                <button @click="acceptAll()"
                        class="cookie-btn cookie-btn-primary">
                    Accept All
                </button>
            </div>
        </div>
    </div>

    {{-- ==================== BACKDROP ==================== --}}
    <div x-show="showPanel"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="closePanel()"
         class="cookie-backdrop">
    </div>

    {{-- ==================== PREFERENCES PANEL ==================== --}}
    <div x-show="showPanel"
         x-transition:enter="transition ease-out duration-400"
         x-transition:enter-start="opacity-0 translate-x-full"
         x-transition:enter-end="opacity-100 translate-x-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-x-0"
         x-transition:leave-end="opacity-0 translate-x-full"
         class="cookie-panel">

        {{-- Panel header --}}
        <div class="cookie-panel-header">
            <div class="cookie-panel-title-wrapper">
                <div class="cookie-panel-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z"/>
                        <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                </div>
                <h3 class="cookie-panel-title">Cookie Settings</h3>
            </div>
            <button @click="closePanel()" class="cookie-panel-close">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Panel body --}}
        <div class="cookie-panel-body">
            <p class="cookie-panel-description">
                Choose which cookies you'd like to allow. Essential cookies are always active as they are necessary for the website to function. Learn more in our
                <a href="{{ route('privacy') }}" class="cookie-panel-link">Privacy Policy</a>.
            </p>

            {{-- Essential --}}
            <div class="cookie-panel-item cookie-panel-essential">
                <div class="cookie-panel-item-header">
                    <h4 class="cookie-panel-item-title">Essential Cookies</h4>
                    <span class="cookie-panel-badge">Always Active</span>
                </div>
                <p class="cookie-panel-item-description">
                    Required for core website functionality including security, session management, and accessibility. These cannot be disabled.
                </p>
            </div>

            {{-- Analytics --}}
            <div class="cookie-panel-item">
                <div class="cookie-panel-item-header">
                    <h4 class="cookie-panel-item-title">Analytics Cookies</h4>
                    <button @click="preferences.analytics = !preferences.analytics"
                            :class="preferences.analytics ? 'cookie-toggle-on' : 'cookie-toggle-off'"
                            class="cookie-toggle"
                            role="switch"
                            :aria-checked="preferences.analytics.toString()">
                        <span class="cookie-toggle-knob"></span>
                    </button>
                </div>
                <p class="cookie-panel-item-description">
                    Help us understand how visitors interact with our website by collecting anonymous usage data. This allows us to improve our content and services.
                </p>
            </div>

            {{-- Preferences --}}
            <div class="cookie-panel-item">
                <div class="cookie-panel-item-header">
                    <h4 class="cookie-panel-item-title">Preference Cookies</h4>
                    <button @click="preferences.preferences = !preferences.preferences"
                            :class="preferences.preferences ? 'cookie-toggle-on' : 'cookie-toggle-off'"
                            class="cookie-toggle"
                            role="switch"
                            :aria-checked="preferences.preferences.toString()">
                        <span class="cookie-toggle-knob"></span>
                    </button>
                </div>
                <p class="cookie-panel-item-description">
                    Remember your settings and choices to provide a more personalized browsing experience, such as language and display preferences.
                </p>
            </div>

            {{-- Marketing --}}
            <div class="cookie-panel-item">
                <div class="cookie-panel-item-header">
                    <h4 class="cookie-panel-item-title">Marketing Cookies</h4>
                    <button @click="preferences.marketing = !preferences.marketing"
                            :class="preferences.marketing ? 'cookie-toggle-on' : 'cookie-toggle-off'"
                            class="cookie-toggle"
                            role="switch"
                            :aria-checked="preferences.marketing.toString()">
                        <span class="cookie-toggle-knob"></span>
                    </button>
                </div>
                <p class="cookie-panel-item-description">
                    Used to deliver relevant advertisements and track the effectiveness of marketing campaigns across websites you visit.
                </p>
            </div>
        </div>

        {{-- Panel footer --}}
        <div class="cookie-panel-footer">
            <div class="cookie-panel-buttons">
                <button @click="declineAll()"
                        class="cookie-btn cookie-btn-secondary">
                    Decline All
                </button>
                <button @click="acceptAll()"
                        class="cookie-btn cookie-btn-primary">
                    Accept All
                </button>
                <button @click="savePreferences()"
                        class="cookie-btn cookie-btn-primary">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
