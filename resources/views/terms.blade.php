@extends('layouts.app')

@section('title', 'Terms of Service – Pathfinder 311')
@section('meta_description', 'Terms of Service for Pathfinder 311')

@section('content')
<div class="container pt-60 pb-60">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="privacy-content">
                <h2>Terms of Service – Pathfinder 311</h2>
            
                <p>By submitting your information through our website or contacting Pathfinder 311, you agree to receive communications related to your plumbing service requests.</p>

                <p>These communications may include phone calls, emails, or SMS messages for appointment confirmations, service updates, and customer support notifications.</p>

                <h3>SMS Messaging</h3>
                <p>Message frequency may vary. Message and data rates may apply.</p>
                <p>Customers may opt out of SMS messages at any time by replying <strong>STOP</strong>.</p>
                <p>For assistance, reply <strong>HELP</strong> or contact Pathfinder 311 directly.</p>
                <p>Pathfinder 311 is not responsible for delays in message delivery caused by mobile carriers.</p>
                <p>SMS services are available only to individuals aged 18 years or older.</p>

                <h3>Contact Us</h3>
                <div class="contact-info">
                    <p>
                        <strong>Pathfinder 311</strong><br>
                        Email: <a href="mailto:info@pathfinder311.com">info@pathfinder311.com</a><br>
                        Phone: <a href="tel:2402647547">240-264-7547</a><br>
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
