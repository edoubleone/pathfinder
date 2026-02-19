@extends('layouts.app')

@section('title', 'Privacy Policy - Pathfinder311')
@section('meta_description', 'Privacy Policy for Pathfinder311')

@section('content')
<!-- privacy-area-end -->
<div class="container pt-30 pb-60">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="privacy-content">
                <h2>Privacy Policy</h2>
                <p class="created-date"><strong>Last Updated:</strong> {{ now()->format('F j, Y') }}</p>

                <h3>1. Introduction</h3>
                <p>Pathfinder311 ("we," "us," "our," or "Company") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website and use our services.</p>

                <h3>2. Information We Collect</h3>
                <p>We may collect information about you in a variety of ways. The information we may collect on our site includes:</p>
                <ul>
                    <li><strong>Personal Data:</strong> Name, email address, phone number, and other contact information you provide directly to us.</li>
                    <li><strong>Browsing Data:</strong> Information about your interactions with our website, such as pages visited, time spent on pages, and referral sources.</li>
                    <li><strong>Technical Data:</strong> IP address, browser type, operating system, and device information.</li>
                    <li><strong>Cookie Data:</strong> Information stored through cookies and similar tracking technologies.</li>
                </ul>

                <h3>3. Cookies and Tracking Technologies</h3>
                <p>We use cookies and similar tracking technologies to enhance your browsing experience. Cookies are small data files stored on your device that help us:</p>
                <ul>
                    <li>Remember your preferences and settings</li>
                    <li>Analyze site traffic and usage patterns</li>
                    <li>Deliver personalized content and advertisements</li>
                    <li>Improve our website functionality</li>
                </ul>

                <h4>Types of Cookies We Use:</h4>
                <ul>
                    <li><strong>Essential Cookies:</strong> Required for basic site functionality. These cannot be disabled.</li>
                    <li><strong>Analytics Cookies:</strong> Help us understand how visitors interact with our site.</li>
                    <li><strong>Marketing Cookies:</strong> Used to track activity across websites for personalized advertising.</li>
                </ul>

                <h3>4. How We Use Your Information</h3>
                <p>We use the information we collect for the following purposes:</p>
                <ul>
                    <li>To provide, maintain, and improve our services</li>
                    <li>To respond to your inquiries and requests</li>
                    <li>To send you promotional materials and marketing communications (with your consent)</li>
                    <li>To analyze website usage and improve user experience</li>
                    <li>To comply with legal obligations</li>
                    <li>To prevent fraud and enhance security</li>
                </ul>

                <h3>5. Sharing Your Information</h3>
                <p>We do not sell, trade, or rent your personal information to third parties. However, we may share your information with:</p>
                <ul>
                    <li>Service providers who assist us in operating our website and conducting our business</li>
                    <li>Legal authorities when required by law</li>
                    <li>Third parties with your explicit consent</li>
                </ul>

                <h3>6. Data Security</h3>
                <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the Internet is 100% secure.</p>

                <h3>7. GDPR Compliance</h3>
                <p>If you are a resident of the European Union or European Economic Area, you have the following rights under the General Data Protection Regulation (GDPR):</p>
                <ul>
                    <li>The right to access your personal data</li>
                    <li>The right to request correction of inaccurate data</li>
                    <li>The right to request deletion of your data</li>
                    <li>The right to restrict processing of your data</li>
                    <li>The right to data portability</li>
                    <li>The right to object to processing</li>
                    <li>The right to withdraw consent at any time</li>
                </ul>

                <h3>8. Cookie Consent Management</h3>
                <p>You can manage your cookie preferences at any time by:</p>
                <ul>
                    <li>Using the cookie consent banner on our website</li>
                    <li>Adjusting your browser settings to reject cookies</li>
                    <li>Contacting us directly at info@pathfinder311.com</li>
                </ul>

                <h3>9. Third-Party Links</h3>
                <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. Please review their privacy policies before providing any personal information.</p>

                <h3>10. Children's Privacy</h3>
                <p>Our website is not intended for children under 13 years of age. We do not knowingly collect personal information from children under 13. If we become aware that a child has provided us with personal information, we will take steps to delete such information.</p>

                <h3>11. Changes to This Policy</h3>
                <p>We may update this Privacy Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will notify you of any material changes by updating the "Last Updated" date on this page.</p>

                <h3>12. Contact Us</h3>
                <p>If you have questions about this Privacy Policy or our privacy practices, please contact us at:</p>
                <div class="contact-info">
                    <p>
                        <strong>Pathfinder311</strong><br>
                        Email: <a href="mailto:info@pathfinder311.com">info@pathfinder311.com</a><br>
                        Phone: <a href="tel:2402647547">240-264-7547</a><br>
                        Address: 1401 Mercantile Lane, Largo, MD 20721 Suite 531
                    </p>
                </div>

                <h3>13. Cookie Consent</h3>
                <p>By using our website, you consent to our use of cookies as described in this Privacy Policy. You can withdraw this consent at any time by updating your cookie preferences or contacting us directly. <a href="javascript:void(0)" onclick="window.CookieConsent && window.CookieConsent.revokeConsent()">Manage your cookie preferences</a></p>
            </div>
        </div>
    </div>
</div>

<style>
    .privacy-content {
        line-height: 1.8;
        color: #333;
    }
    .privacy-content h2 {
        margin-top: 40px;
        margin-bottom: 20px;
        font-size: 28px;
        font-weight: 700;
        color: #1a1a1a;
    }
    .privacy-content h3 {
        margin-top: 30px;
        margin-bottom: 15px;
        font-size: 20px;
        font-weight: 600;
        color: #1a1a1a;
    }
    .privacy-content h4 {
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 16px;
        font-weight: 600;
        color: #333;
    }
    .privacy-content p {
        margin-bottom: 15px;
        font-size: 15px;
    }
    .privacy-content ul {
        margin-left: 20px;
        margin-bottom: 15px;
    }
    .privacy-content ul li {
        margin-bottom: 8px;
        font-size: 15px;
    }
    .created-date {
        color: #666;
        font-size: 14px;
        margin-bottom: 30px;
    }
    .contact-info {
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 5px;
        margin: 20px 0;
    }
    .contact-info p {
        margin-bottom: 0;
    }
    .contact-info a {
        color: #007bff;
        text-decoration: none;
    }
    .contact-info a:hover {
        text-decoration: underline;
    }
</style>

@endsection
