@extends('layouts.app')

@section('content')
  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Stefan Stankovic</h6>
            <h2>S T A N Q U E L A</h2>
            <p>Hello, world! (cheap, right?) Stefan - that's my name, Stanquela - that's how they call me (well, Stankela actually, but I like it this way, with <b>Q</b>).<br>First of all, I'm a human. Father, husband, brother, friend, colleague. I want to improve as a developer and a writer. And I like reading, sports and cooking. Simple as it is.<br> </p>
            <div class="buttons">
              <div class="main-button">
                <a href="{{ route('blog') }}">Explore my blog - here.</a>
              </div>
              <div class="border-button">
                <a href="https://github.com/stanquela" target="_blank">Visit my github profile here</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="owl-banner owl-carousel">
            <div class="item">
              <img src= "{{ asset('images/profileimage.jpg') }}" alt="">
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
  
@endsection
