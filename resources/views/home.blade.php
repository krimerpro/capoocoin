@extends('layouts.default')
@section('content')

<!-- BANNER AREA START -->
<section id="banner">
    <div class="design-layer"></div>
    <div class="backtotop">
        <a href="#banner"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    </div>
    <div class="container zindex">
        <div class="row">
            <div class="col-lg-7 banner-txt">
                <h3 style="color:white">Capoo Coin</h3>
                <p style="color:white">Invest in $CAPOO, the most hype and safu project on BSC.</p>
                <a href="https://t.me/CapooCoinBsc" style="background:#91CA1C">Join Us</a>
                <a href="https://pancakeswap.finance/swap?outputCurrency=0x972eaF277B5423906bF505318b9b10fC2Fa114b1" style="background:#91CA1C">BUY $CAPOO</a>
            </div>
            <div class="col-lg-5">
                <div class="banner-img">
                    <img src="{{ asset('images/logo.png') }}" alt="banner-img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER AREA ENDS -->

<!-- FEATURE AREA START -->
<section id="overview">
    <div class="container">
        <div class="row header-text text-center">
            <div class="col-lg-12">
                <h3><span>F</span>E<span>A</span>T<span>U</span>R<span>E</span></h3>
            </div>
        </div>
        <div class="row over-pa">
            <div class="col-lg-9 col-sm-12 m-auto">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-right unique-style3" style="background:#91CA1C">
                            <i class="fa fa-book over-i" aria-hidden="true"></i>
                            <div class="break"></div>
                            <h3>5% TAXES</h3>
                            <div class="over-btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-left unique-style" style="background:#91CA1C">
                            <i class="fa fa-video-camera over-i" aria-hidden="true"></i>
                            <div class="break"></div>
                            <h3>LP LOCKED</h3>
                            <div class="over-btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-right unique-style2" style="background:#91CA1C">
                            <i class="fa fa-star over-i" aria-hidden="true"></i>
                            <div class="break"></div>
                            <h3>OWNERSHIP RENOUNCED</h3>
                            <div class="over-btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-left unique-style4" style="background:#91CA1C">
                            <i class="fa fa-lock over-i" aria-hidden="true"></i>
                            <div class="break"></div>
                            <h3>MOONSHOT PROJECT</h3>
                            <div class="over-btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FEATURE AREA ENDS -->

<!-- ABOUT AREA START -->
<section id="aboutus">
    <div class="container">
        <div class="row header-text text-center about-header">
            <div class="col-lg-12">
                <h3><span>A</span>B<span>O</span>U<span>T</span></h3>
            </div>
        </div>
        <div class="row about-pa">
            <div class="col-lg-10 col-md-12 m-auto about-item">
                <div class="row">
                    <div class="col-lg-4 col-sm-8 m-sm-auto col-md-5 text-center">
                        <div class="about-img ai-one">
                            <img src="{{ asset('images/capoo.png') }}" alt="about-img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-7 col-md-6">
                        <div class="about-txt">
                            <span class="separet-span" style="color:white">About Us</span>
                            <h3>Capoo Coin</h3>
                            <p style="color:white">Bugcat Capoo (貓貓蟲咖波 Māo māo chóng kā bō), sometimes abbreviated to Capoo, is a cartoon character resembling a chubby blue cat with six legs. He is the namesake and main subject of a webcomic strip on Facebook and Instagram, cartoon clips on YouTube, and stickers on LINE and other social media. He was created by the Taiwanese artist Yara (亞拉 Yala) in 2014.</p>
                            <p class="separate-p tab-hider" style="color:white">Capoo is described as "a little monster like a cat and like a bug, both violent and cute, who loves to eat meat".[1] The comic depicts him as a cute house pet with an endless hunger for meat and a disdain for vegetables, living together with his owner Lala and the seemingly immortal Dogdog—a large dog possessing uncanny skills in every field—in Lala's house. Much of the comic revolves around everyday situations which explode into absurdity, and often end with Capoo either eating whatever frustrates him, or being comically punished by Lala for his antics.</p>
                            <a href="#" style="background:#91CA1C">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 m-auto about-item col-md-12" id="tokenomics">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about-txt sm-reduce-pa">
                            <span class="separet-span" style="color:white">Tokenomics</span>
                            <div class="p-bars">
                                <div class="col-lg-12 p-bar">
                                    <span style="color:white">Pancakeswap LP</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-bar">
                                    <span style="color:white">R&D</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-bar">
                                    <span style="color:white">Marketing</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row counter-main">
                            <div class="counter-1 col-4 col-lg-4 col-sm-3 col-md-4">
                                <div class="chart" data-percent="75">
                                </div>
                                <h5 style="color:white">2</h5>
                                <span style="color:white">2 BNB Initial LP</span>
                            </div>
                            <div class="counter-1 col-4 col-lg-4  col-sm-3 col-md-4">
                                <div class="chart" data-percent="65">
                                </div>
                                <h5 style="color:white">5%</h5>
                                <span style="color:white">Tax</span>
                            </div>
                            <div class="counter-1 col-4 col-lg-4 col-sm-3 col-md-4">
                                <div class="chart" data-percent="55">
                                </div>
                                <h5 style="color:white">2%</h5>
                                <span style="color:white">Max Tx & Wallet</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-4 text-center mob-hide sm-hide col-md-5">
                        <div class="about-img ai-two">
                            <img src="{{ asset('images/capoo.png') }}" alt="about-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT AREA ENDS -->

<!-- SUBSCRIBE AREA START -->
<section id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="sub-main" style="background:#91CA1C">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <h3>Join Our Official Telegram Group</h3>
                        </div>
                        <div class="col-lg-3 col-md-5 subscripe-btn">
                            <a href="https://t.me/CapooCoinBsc" >JOIN US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SUBSCRIBE AREA END -->
@stop
