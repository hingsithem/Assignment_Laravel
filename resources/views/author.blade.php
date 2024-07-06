@extends('welcome')
@section('title', 'Author')

@section('content')
  <div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Author Details</h6>
          <h2>View Details For Author</h2>
          <span>Home > <a href="#">Author</a></span>
         
        </div>
      </div>
    </div>
  </div>

  <div class="author-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="author">
            <img src="assets/images/single-author.jpg" alt="" style="border-radius: 50%; max-width: 170px;">
            <h4>Melanie Smith <br> <a href="#">@melanie32</a></h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-info">
            <div class="row">
              <div class="col-4">
                <div class="info-item">
                  <i class="fa fa-heart"></i>
                  <h6>1238 <em>Likes</em></h6>
                </div>
              </div>
              <div class="col-4">
                <div class="info-item">
                  <i class="fa fa-hand"></i>
                  <h6>1238 <em>Likes</em></h6>
                </div>
              </div>
              <div class="col-4">
                <div class="info-item">
                  <i class="fa fa-dollar"></i>
                  <h6>1238 <em>Likes</em></h6>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <h5>559 Followers</h5>
              </div>
              <div class="col-7">
                <div class="main-button">
                  <a href="#">Follow @melanie32</a>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>

@endsection