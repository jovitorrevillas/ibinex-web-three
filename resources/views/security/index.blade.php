@extends('layouts.app')
@section('title','Security')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <div id="security" class="container-fluid">
        <section id="security-section">
            <div class="row">
                <div id="bg-blue" class="col-lg-12 col-12">

                    <div class="text-content">

                        <h2>Security</h2>

                        <p>
                        <span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.
                        </span>
                        </p>

                    </div>

                </div>
            </div>
        </section>

        <section id="pof-eat-section">
            <!--    POF -protection of funds
                    EAT - Encryption and Technologies -->
            
            <div class="text-content">

                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h3>Protection of Funds</h3>

                        <p>
                    <span>
                    <span id="span-pixel-perfect">The protection of your</span> crypto-funds is of paramount importance to us. For this reason, we take the ultimate lengths to ensure your funds remain safe at all times.
                    </span>
                        </p>

                        <p>
                    <span>
                    As an indication of the high protective standards we hold, <span id="span-pixel-perfect-2">Ibinex has been granted the status of fully-licensed, fully-compliant and as a regulated custodian and account processor.</span>
                    </span>
                        </p>

                        <p>
                    <span>
                    We are the first cryptocurrency exchange platform to hold this <span id="span-pixel-perfect-3">mantle and offer exclusive</span> <span id="span-pixel-perfect-4">payment solutions. As such, we must demonstrate a consistent level of regulatory compliance in order to retain this professional distinction; a title of which we are immensely proud.</span>
                    </span>
                        </p>
                    </div>


                    <div class="col-lg-6 col-12">
                        <h3>Encryption and Technologies</h3>

                        <p>
                            A successful cryptocurrency exchange suite is only as strong as its weakest link. Ibinex has left no encryption technology stone unturned, and has implemented the highest level of SSL security into the platform, complete with the most solid and secure technologies.
                        </p>

                        <p>
                            We ensure that no weak links exist to threaten the stability and core security of Ibinex for our customers. Threats are neutralised before they present themselves — we take no chances, and anticipate potential breaches before they arise, entirely removing their potential before they ever eventuate.
                        </p>

                    </div>
                </div>
            </div>

        </section>

        
        <section id="InfoSec-Priv-Section">
             <div class="row" id="bg-gray">
                <div class="text-content">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h3>Information Security</h3>

                            <p>
                                <span>
                                    Our platform is a 24/7 guarded operation, with all crypto-based funds held in cold-wallets, <span id="span-pixel-perfect-5">shielded by our team of cyber security experts who work around the clock to ensure all funds are safe and untouchable by unauthorised seekers.</span>
                                </span>
                            </p>

                        </div>

                        <div class="col-lg-6 col-12">
                            <h3>Privacy</h3>

                            <p>
                                <span>
                                    Security and confidentiality are of the utmost importance for our clients, and you can learn more about our completely transparent Regulations and Privacy Policy, to have complete peace of mind and confidence in Ibinex.
                                </span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
       

    </div>
@endsection