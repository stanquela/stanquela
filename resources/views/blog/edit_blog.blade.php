@extends('layouts/app')
@section('title', 'Edit blog post')
@section('content')
<body>

  <div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Edit Your Blog.</h2>
        </div>
      </div>
    </div>
  </div>

  @if (Session::has('message'))
  <div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <h2>{{ Session::get('message') }}</h2>
        </div>
      </div>
    </div>
  </div>
  @endif
    
  <div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Edit <em>Blog</em> Entry.</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="contact" action="{{ route('saveEditBlog', $blog->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-lg-4">
                <fieldset>
                  <label for="title">Blog Title</label>
                  <input type="title" name="title" id="title" value="{{ $blog->title }}" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <label for="description">Description</label>
                  <input type="description" name="description" id="description" value="{{ $blog->description }}" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <label for="hashtag">Hashtags</label>
                  <input type="hashtag" name="hashtag" id="hashtag" value="{{ $blog->hashtag }}" autocomplete="on">
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <label for="image">Blog image</label>
                  <input type="file" name="image" id="image" value="{{ $blog->image }}">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="royalities">Blog text</label>
                  <input type="text" name="text" id="text" value="{{ $blog->text }}" autocomplete="on" cols="100" rows="250" required>
                </fieldset>
              </div>
              
              <div class="col-lg-4">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Submit changes</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>

@endsection


