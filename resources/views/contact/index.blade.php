@extends('layouts.app')
@section('title','Contact Us')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    

    <div class="mobile-tools">
        
    </div>

    <div  id="getStarted">

            <div class="container">
                    <div class="row">
                
                <div class="col-md-6">
                    




        <h1 class="get-started-title title-heading">Get Started</h1>

            <p class="p1">We invite you to first experience the Ibinex demo here, which will help you to conceptualise the possibilities of personalisation for your own exchange.</p>

            <p class="p2">The next step is to contact us to discuss on-boarding. It is a simple process which you can learn about in more detail on the Pricing page, but essentially consists of 3 steps:</p>


            <ul class="check-items">
                <li><span>Local Escrow deposit (reserve only, no payment)</span></li>
                <li><span>Letter of Intent</span></li>
                <li><span>Proof of Escrow deposit</span></li>
            </ul>

            <p class="note">Please note that, due to high demand, the current on-boarding timeframe is 4 months.</p>

                </div>
        </div>
            
            </div>
 
    </div>


    <div id="support" class="container-fluid">
        <div class="container" >
            
            <div class="row ">
            <div class="col-md-6" id="support-description">
                    

                <h1 class="support-title title-heading">Support</h1>


                <p class="p3">Contact and feedback are integral to the Ibinex way, enabling us to cater to your needs and requirements effectively and efficiently.</p>

                <p class="p4">For support regarding any aspect of the Ibinex platform, your use of this website or your own exchange integration, please contact us with your enquiry for personalised customer service.</p>


                <p class="p5">We will endeavour to respond to you as promptly as possible.</p>
            
                

            </div>

            <div class="col-md-6" id="support-right">
                

                <form >
                  <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" >
                  
                  </div>

                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="password" class="form-control" >
                  </div>

                   <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" >
                  </div>

                    <div class="form-group">

                    <label for="message">Message</label>
                    <textarea class="form-control" rows="10"></textarea>

                  </div>
                
                  <button type="submit" class="btn-primary" >SEND</button>
                </form>


            </div>

        </div>

        </div>
        

    </div>




@endsection