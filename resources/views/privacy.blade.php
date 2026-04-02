@extends('layouts.app')

@section('title', 'Privacy Policy – Pathfinder 311')
@section('meta_description', 'Privacy Policy for Pathfinder 311')

@section('content')
<div class="container pt-60 pb-60">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="privacy-content">
                <h2>Privacy Policy – Pathfinder 311</h2>
            
                <p>Pathfinder 311 collects personal information such as name, phone number, email address, and service request details when customers submit forms on our website or contact us directly.</p>

                <p>This information is used solely to respond to service requests, schedule plumbing appointments, and provide customer support.</p>

                <h3>SMS Communications</h3>
                <p>Customers who provide their phone numbers may receive SMS messages regarding service requests, appointment confirmations, technician updates, and customer support notifications.</p>
                <p>Message frequency may vary. Message and data rates may apply.</p>
                <p>Customers can opt out of SMS messaging at any time by replying <strong>STOP</strong>. For assistance, reply <strong>HELP</strong> or contact us directly.</p>

                <h3>Data Sharing</h3>
                <p>Pathfinder 311 does not sell, rent, or share SMS opt-in data with third parties for marketing purposes.</p>
                <p><strong>No mobile information will be shared with third parties/affiliates for marketing/promotional purposes. Information sharing to subcontractors in support services, such as customer service is permitted. All other use case categories exclude text messaging originator opt-in data and consent; this information will not be shared with any third parties.</strong></p>

                <h3>Data Security</h3>
                <p>We implement reasonable security measures to protect customer information from unauthorized access.</p>

                <h3>Cookies &amp; Tracking</h3>
                <p>Our website may use cookies and tracking technologies to improve user experience and website performance.</p>

                <h3>Your Rights</h3>
                <p>Customers may request updates or deletion of their personal data by contacting us directly.</p>

                <h3>Contact Us</h3>
                <div class="contact-info">
                    <p>
                        <strong>Pathfinder 311</strong><br>
                        Email: <a href="mailto:info@pathfinder311.com">info@pathfinder311.com</a><br>
                        Phone: <a href="tel:13013375076">+1 (301) 337-5076</a><br>
                        Address: 1401 Mercantile Lane, Largo, MD 20721 Suite 531
                    </p>
                </div>
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
    .privacy-content p {
        margin-bottom: 15px;
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
        color: #1a2b4a;
        text-decoration: none;
    }
    .contact-info a:hover {
        text-decoration: underline;
    }
</style>

@endsection
