@extends('layouts.app')
@section('title','Contact Us')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <div id="contact-us-content">
        <section class='first-fold' id='getStarted'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 get-started-text">
                        <h1>Get Started</h1>
                        <p>
                            We invite you to first experience the Ibinex demo here, which will help you to conceptualise the possibilities of personalisation for your own exchange.
                        </p>
                        <p>
                            The next step is to contact us to discuss on-boarding. It is a simple process which you can learn about in more detail on the Pricing page, but essentially consists of 3 steps:
                        </p>
                        <ul>
                            <li>Local Escrow deposit (reserve only, no payment)</li>
                            <li>Letter of Intent</li>
                            <li>Proof of Escrow deposit</li>
                        </ul>
                        <p>Please note that, due to high demand, the current on-boarding timeframe is 4 months.</p>
                    </div>
                </div>
            </div>
        </section> <!-- getStarted -->

        <section class='second-fold' id='support'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 support-div">
                        <h1>Support</h1>
                        <p>
                            Contact and feedback are integral to the Ibinex way, enabling us to cater to your needs and requirements effectively and efficiently.
                        </p>
                        <p>
                            For support regarding any aspect of the Ibinex platform, your use of this website or your own exchange integration, please contact us with your enquiry for personalised customer service.
                        </p>
                        <p>
                            We will endeavour to respond to you as promptly as possible.
                        </p>
                        <form class="form-mobile">
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" required="">
                            </div>
                            <div class="form-group">
                                <label for="emailAdd">Email Address</label>
                                <input type="text" class="form-control" id="emailAdd" required="">
                            </div>
                            <div class="form-group">
                                <label for="emailSubject">Subject</label>
                                <input type="text" class="form-control" id="emailSubject" required="">
                            </div>
                            <div class="form-group">
                                <label for="emailMessage">Message</label>
                                <textarea class="form-control" id="emailMessage" required=""></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg">SEND</button>
                        </form>
                    </div>
                    <div class="box-floated not-mobile">
                        <form class="">
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" required="">
                            </div>
                            <div class="form-group">
                                <label for="emailAdd">Email Address</label>
                                <input type="text" class="form-control" id="emailAdd" required="">
                            </div>
                            <div class="form-group">
                                <label for="emailSubject">Subject</label>
                                <input type="text" class="form-control" id="emailSubject" required="">
                            </div>
                            <div class="form-group">
                                <label for="emailMessage">Message</label>
                                <textarea class="form-control" id="emailMessage" required=""></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </section> <!-- support -->
    </div>
@endsection