@extends('layouts.app')

@section('title', 'Enjoy the read!')

@section('content')

            <div class="">
              <img src="{{ asset('storage/'.$blog->image) }}" alt="">
            </div>

  <div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>{{ $blog->hashtag }}</h6>
          <h2>{{ $blog->title }}</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>{{ $blog->description }}</h2>
          </div>
        </div>
        <div class="line-dec"></div>
        <div class="col-lg-12 align-self-center">
          <p>{!! $blog->text !!}</p>
        </div>
      </div>
    </div>
  </div>

<!-- THIS IS GOING TO BE 'READ OTHER BLOG POSTS SECTIOIN'
  <div class="create-nft">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Create Your NFT & Put It On The Market.</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="create.html">Create Your NFT Now</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item first-item">
            <div class="number">
              <h6>1</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-02.png" alt="">
            </div>
            <h4>Set Up Your Wallet</h4>
            <p>There are 5 different HTML pages included in this NFT <a href="https://templatemo.com/page/1" target="_blank" rel="nofollow">website template</a>. You can edit or modify any section on any page as you required.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <div class="number">
              <h6>2</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>Add Your Digital NFT</h4>
            <p>If you would like to support our TemplateMo website, please visit <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">our contact page</a> to make a PayPal contribution. Thank you.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-06.png" alt="">
            </div>
            <h4>Sell Your NFT &amp; Make Profit</h4>
            <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
-->

<!--VISIBLE ONLY TO ADMIN-->
@if(Auth::user())
  <div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-info" href="{{ route('editBlog', $blog->id) }}">Edit post</a>
            <form action=" {{ route('deleteBlog', $blog->id) }} " method="POST">          
                @csrf
                @method('DELETE')                
                <input type="submit" class="btn btn-danger" value="Delete post">
            </form>
        </div>
      </div>
    </div>
  </div>
@endif
@endsection

