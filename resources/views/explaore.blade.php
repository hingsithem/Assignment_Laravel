@extends('welcome')
@section('title', 'Explaore')

@section('content')

  <div class="discover-items">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
             
            <h2>Discover Some Of Our <em>Items</em>.</h2>
          </div>
        </div>
        <div class="col-lg-7">
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
        </div>
        
       <div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2><em>Items</em> Currently In The Market.</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="filters">
            <ul>
              <li data-filter="*"  class="active">All Books</li>
              <li data-filter=".msc">Popular</li>
              <li data-filter=".dig">Latest</li>
              
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row grid">
            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/book1.webp" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Sarah Maas</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Robert T Kiyosaki</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>10</strong><br> 
                  </span>
                  <span class="ends">
                    Total<br><strong>20</strong><br>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            

            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/book2.webp" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Broken Blade</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Robert T Kiyosaki</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>10</strong><br> 
                  </span>
                  <span class="ends">
                    Total<br><strong>20</strong><br>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>



            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/book3.webp" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Dwarves</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Robert T Kiyosaki</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>10</strong><br> 
                  </span>
                  <span class="ends">
                    Total<br><strong>20</strong><br>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>



            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/book4.webp" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Steven Erikson</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Robert T Kiyosaki</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>10</strong><br> 
                  </span>
                  <span class="ends">
                    Total<br><strong>20</strong><br>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
  
        
      </div>
    </div>
  </div>

@endsection