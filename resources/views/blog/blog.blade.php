@extends('layouts.app')

@section('title', "Stanquela's blog")

@section('content')

  <div class="discover-items">

  @if(Session::has('message'))
            <div class="alert alert-info"><h2>{{ Session::get('message') }}</h2></div>
  @endif

    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Feel free to explore the <em>blog</em>.</h2>
          </div>
        </div>

        <div class="col-lg-7">
          <!--SEARCH option to be implemented
          <form id="search-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-4">
                <fieldset>
                    <input type="text" name="keyword" class="searchText" placeholder="Type Something..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-3">
                <fieldset>
                    <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                        <option selected>All Categories</option>
                        <option type="checkbox" name="option1" value="Music">Music</option>
                        <option value="Digital">Digital</option>
                        <option value="Blockchain">Blockchain</option>
                        <option value="Virtual">Virtual</option>
                    </select>
                </fieldset>
              </div>
              <div class="col-lg-3">
                <fieldset>
                    <select name="Price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                        <option selected>Available</option>
                        <option value="Ending-Soon">Ending Soon</option>
                        <option value="Coming-Soon">Coming Soon</option>
                        <option value="Closed">Closed</option>
                    </select>
                </fieldset>
              </div>
              <div class="col-lg-2">                        
                <fieldset>
                    <button class="main-button">Search</button>
                </fieldset>
              </div>
            </div>
          </form>
        
            -->
          </div>

        @foreach($blog['data'] as $blog_post)
        <div class="col-lg-4">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="{{ asset('storage/'.$blog_post['image']) }}" alt="" style="border-radius: 20px;">
                <h4>{{ $blog_post['title'] }}</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>{{ $blog_post['description'] }}</span>
                  </div>
                  <div class="col-6">
                    <span><strong>{{ $blog_post['hashtag'] }}</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="{{ route('showBlog', $blog_post['id']) }}">Read more...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach 

      </div>
    </div>
  </div>
  

@endsection
