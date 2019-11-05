@extends('layouts.master')
@section('content')

    <section class="site-cover" style="background-image: url('{{asset('images/bg.jpg')}}' );" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center site-vh-100" id="aboutVh">

            </div>
        </div>
    </section>
    <!-- END section -->


    <section class="site-section bg-light" id="section-contact">
        <div class="container">
            <div class="row">

                <div class="col-md-12  mb-5 site-animate">
                    <h2 class="display-4" id="display4" style="padding-top: 1em; margin-left : 470px">System</h2>
                </div>
            </div>

            <div class="col-md-12 site-animate" style="text-align: justify;margin-left: 20px ;">
                <p class="lead" > <span style="padding-left: 50px;padding-bottom: 15px;">his system is a digital archive for Mandalay Technological Uniersity It is an integrated design project comprising many fields: information security, machine learning, natural language processing and networking. This system aims for the convenience of students from Mandalay Technological Uniersity to review the previous reseraches on a user friendly web application. It provides features like: Uploading research papers and thesis books by a registered user in the system, Adding digital watermark for every uploaded document to protect copy right, downloading the documents by every user visiting the website, Sending notifications to respective head of department in MTU for approval of uploaded document.</span></p>
            </div>
        </div>
    </section>



    <section class="site-section bg-light" id="section-contact">
        <div class="container">
            <div class="row">

                <div class="col-md-12 mb-5 site-animate">
                    <h2 class="display-4" id="display5" style="padding-top: 1em;margin-left : 350px">Terms & Conditions</h2>
                </div>
            </div>

            <div class="col-md-12 site-animate" style=" text-align: justify;margin-left: 20px ;">
                <p class="lead"><span style="padding-left: 50px; padding-bottom: 15px"> This system can only be used for non-profit education purpose. A reserch paper or a thesis book can be uploaded only by a reserach student of MTU who is registered to the system.</span></p>
            </div>
        </div>
    </section>

    <section class="site-section bg-light" id="section-contact">
        <div class="container">
            <div class="row">

                <div class="col-md-12 mb-5 site-animate">
                    <h2 class="display-4" id="display6" style="padding-top: 1em;margin-left : 350px">Development Team</h2>
                </div>
            </div>

            <div class="col-md-12 site-animate" style=" text-align: justify;margin-left: 20px ;">
                <p class="lead"><span style="padding-left: 50px; padding-bottom: 15px"> This system is developed by CEIT 2nd batch students for the partial fulfilment of Bachelor of Engineering in 2019. Apart from the application, server configuration and port forwarding are also worked by the team members.</span></p>
            </div>
        </div>
    </section>

    @endsection
