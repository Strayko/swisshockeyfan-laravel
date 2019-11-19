@extends('layouts.app')

@section('content')

  <!-- banner-section start -->
  <section class="breadcum-section">
    <div class="breadcum-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcum-content text-center">
              <h3 class="title">Kontakt</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner-section end -->

    <!-- contact-section start -->
    <section class="contact-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="contact-item d-flex">
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <div class="content">
              <h5 class="title">Address</h5>
              <p>Firmen Event GmbH
              </p>
              <p>
Hinterrietstrasse 1,
8317 Tagelswangen</p>
            </div>
          </div>
        </div><!-- contact-item end -->
        <div class="col-lg-6 col-md-6">
          <div class="contact-item d-flex">
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="content">
              <h5 class="title">E-Mail</h5>
              <p>info@wettgame.ch <br></p> <br>
            </div>
          </div>
        </div><!-- contact-item end -->
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="contact-form-area">
          {!! Form::open(['method'=>'POST', 'action'=>'ContactController@sendEmail', 'class'=>'cmn-form contact-form']) !!}
              <div class="row">
                <div class="col-md-6">
                  <div class="frm-group">
                    {!! Form::text('name', null, ['id'=>'name', 'class' => 'form-control', 'placeholder' => 'Vorname']) !!}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="frm-group">
                    {!! Form::email('email', null, ['id'=>'email', 'class' => 'form-control', 'placeholder' => 'E-Mail']) !!}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="frm-group">
                    {!! Form::text('subject', null, ['id'=>'subject', 'class' => 'form-control', 'placeholder' => 'Subject']) !!}
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="frm-group">
                    {!! Form::textarea('body', null, ['id'=>'body', 'placeholder' => 'Mitteilung ']) !!}
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="frm-group text-center">
                    <button type="submit" class="submit-btn">Submit</button>
                  </div>
                </div>
              </div>
              {!! Form::close() !!}
            <div class="contact-thumb">
              <img src="{{ asset('images/contact.png') }}" alt="image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact-section end -->

@endsection
