@extends('layouts.app')
@section('title','Why Ibinex')

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/why-ibinex.css') }}">
@endpush


@section('content')

    <div class="ib-why-main">

        <div class="container container-custom ib-fsec-main">
            <div id="ib-why-fsec-text-wrapper">
                <p id="ib-why-fsec-text-title">We fuse innovation with accessibility as <span>blockchain technology evolves.</span></p>
                <p id="ib-why-fsec-text-content">We seek to revolutionise the way that exchange owners create<br>their platforms
                    and raise the standard of marketplace excellence<br>by incorporating our cutting-edge technology, delivered
                    with<br>practicality and a host of unique benefits, only enjoyed by<br>merging with the Ibinex ecosystem.</p>
            </div>
            <div class="ib-side-pic">
                <img src="{{asset('images/why/blockchain2.png')}}">
            </div>
        </div>
        <div class="ib-side-pic2" align="center">
            <img src="{{asset('images/why/blockchain2.png')}}">
        </div>
        <div class="ib-why-background">
            <div class="container container-custom">
                <div id="ib-why-ssec-text-wrapper">
                    <p id="ib-why-ssec-text-title">We are an ecosystem <br>with vision.</p>
                    <p id="ib-why-ssec-text-content">As the gateway to your own customisable cryptocurrency<br>
                    ecosystem, our vision is to equip you with the tools to create and<br>
                    operate your cryptocurrency exchange, your way.
                    </p>
                </div>
            </div>
        </div>
        <div class="bordered-container">        
            <div class="container container-custom">
                <div id="ib-why-tsec-text-wrapper">
                    <p id="ib-why-tsec-text-title">Why you should exchange your way <span>with Ibinex:</span></p>
                    <p id="ib-why-tsec-text-content">Our strategy is underpinned with the 4 core strengths of Ibinex:</p>
                </div>
                <div class="container container-custom">
                    <div class="row">
                        <div id="ib-why-core-innovation-wrapper" class="col-lg-6 col-xl-6 ib-core">

                            <img id="ib-why-core-innovation-logo" class="img-fluid" src="{{ asset('images/why/innovation.png') }}">
                            <p id="ib-why-core-innovation-text" class="ib-core-text">Commitment to technological innovation,<br>
                                through out patent-pending proprietary<br>
                                software, Cryptobridge&trade;</p>
                        </div>
                        <div id="ib-why-core-platform-wrapper" class="col-lg col-xl offset-lg-1 ib-core">
                            <img id="ib-why-core-platform-logo" class="img-fluid" src="{{ asset('images/why/platform.png') }}">
                            <p id="ib-why-core-platform-text" class="ib-core-text">Trailblazing of complete and<br>
                                customisable white label platform<br>
                                solutions</p>
                        </div>
                        <div id="ib-why-core-service-wrapper" class="col-lg-6 col-xl-6 ib-core">
                            <img id="ib-why-core-service-logo" class="img-fluid" src="{{ asset('images/why/service.png') }}">
                            <p id="ib-why-core-service-text" class="ib-core-text">Offering unprecedented custodian service<br>
                                with our industry's first finance transaction<br>
                                license</p>
                        </div>
                        <div id="ib-why-core-payment-wrapper" class="col-lg col-xl offset-lg-1 ib-core">
                            <img id="ib-why-core-payment-logo" class="img-fluid" src="{{ asset('images/why/payment.png') }}">
                            <p id="ib-why-core-payment-text" class="ib-core-text">Providing a full-spectrum payment<br>
                                processing infrastracture to revolutionise<br>
                                liquidity for your exchange.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-custom">
            <div class="container container-custom">
                <div class="row">
                    <div id="ib-why-vision" class="col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <p>This vision of a balanced yet pioneering approach to blockchain technology
                        software and white label platform tunkey solutions, aims to maximise liquidity
                        both within your own exchange and the wider pool of burgeoning
                        cryptocurrency markets internationally, creating a natural funnel with a
                        self-feeding ecosystem of buyers and sellers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection