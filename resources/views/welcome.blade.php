<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job Website Template</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <style>
      * {
  padding: 0;
  margin: 0;
  font-family: sans-serif;
}
.menu-bar {
  background-color: #2b150f;
}
.nav-link {
  font-size: 16px;
  color: #ffe484 !important;
  margin: 2px;
}
.navbar-brand {
  color: #ffe484 !important;
  font-size: 30px;
  font-style: italic;
  font-weight: bold;
}
.navbar-nav {
  text-align: right;
}
.menu-bar .navbar-toggler {
  border: none;
  outline: none;
  padding-right: 0;
}

/* ------------banner---------- */

.banner {
  height: 90vh;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url("images/banner.jpg");
  background-size: cover;
  background-position: center;
  color: #fff;
}
.banner a {
}
.banner h2 {
  padding-top: 170px;
  font-size: 50px;
  letter-spacing: 6px;
  font-weight: 600;
  text-shadow: 0 0 30px rgba(red, green, blue, alpha);
}
.zone {
  background-color: #2b150f;
  color: #fff;
  border-radius: 0%;
  padding: 5px 20px;
  border: none;
  box-shadow: none !important;
}

.search-job {
  padding: 30px 0;
  margin: -50px 6% 50px;
  background-color: #2b150f;
}
.search-job .form-control {
  display: inline-flex;
  max-width: 250px;
  border: none !important;
  box-shadow: none !important;
  border-radius: 0%;
  margin: 10px 5px;
}
.search-job .btn-primary {
  border-radius: 0%;
  margin: 5px;
  padding: 5px 20px;
  border: none;
  box-shadow: none !important;
}

/* ----------------Top recruiters ------------------*/
#recruiters {
  padding-top: 50px;
  padding-bottom: 100px;
}
#recruiters h3 {
  padding-bottom: 40px;
}
h3::before {
  content: "";
  background-image: linear-gradient(to right, #6db9ef, #7ce08a);
  width: 60px;
  height: 30px;
  position: absolute;
  z-index: -1;
  margin-top: -15px;
  border-top-left-radius: 70px;
  border-bottom-right-radius: 90px;
}
#recruiters img {
  max-width: 100%;
  margin: 10px 20px;
}

/* ---------------Recent updates------------- */

#jobs {
  padding: 50px 0;
  background-color: #f8f8fa;
}
.company-details {
  box-shadow: 0 2px 70px 0 rgba(94, 113, 190, 0.18);
  border-radius: 5px;
  margin-bottom: 20px;
}
.job-update {
  background: #fff;
  padding: 10px 20px;
  border-radius: 5px;
}
.job-update .fa {
  margin-top: 5px;
  margin-right: 10px;
  color: #77d1b1;
}
.job-update small {
  background-color: #efefef;
  padding: 1px 5px;
  margin: 0 5px;
}
.job-update p {
  margin-bottom: 0 !important;
}
.job-update a {
  text-decoration: none !important;
  color: #6db9ef;
  float: right;
}
.apply-btn {
  height: 40px;
  padding: 7px;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  background-color: #2b150f;
}
.apply-btn .btn-primary {
  padding: 0 30px;
  float: right;
  border-radius: 0;
  box-shadow: none !important;
  background: transparent;
  border: 1px solid #fff;
}
.page-link li {
  height: 25px;
  width: 25px;
  list-style: none;
  display: inline-block;
  cursor: pointer;
  padding-top: 4px;
}
.page-link li:hover,
.active {
  color: #fff;
  background-color: #2b150f;
}
.left-arrow {
  color: #999;
}
.right-arrow {
  color: brown;
}

/* -----------site-stat--------- */

#site-stats {
  padding: 100px 0;
}
#site-stats h3 {
  margin-bottom: 30px;
}
.stats-box {
  padding: 30px;
  border-radius: 10px;
  margin: 20px 0;
  box-shadow: 0 2px 40px 0 rgba(110, 130, 208, 0.18);
}
.stats-box .fas {
  font-size: 30px;
  margin-right: 10px;
  margin-bottom: 10px;
}
.stats-box .fab {
  font-size: 30px;
  margin-right: 10px;
  margin-bottom: 10px;
}

/* --------------footer----------- */
#footer {
  background: #2b150f;
  padding: 20px 10px 8px;
}
.footer-image {
  margin: 30px 0;
}
#footer p {
  color: burlywood;
}
#footer a .fab {
  font-size: 25px;
  color: #1298f6;
  margin-right: 15px;
}
  </style>
  <body>
    <section id="header">
      <div class="menu-bar">
        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light">
          <a class="navbar-brand" href="#"
            ><img src="images/job-logo.jpg" alt="Website Logo" />JOB HUNTER</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">ALL JOBS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">COMPANIES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">WALK-IN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">GOVT.JOBS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">INTERNSHIP</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="banner text-center">
        <h2>JOBS ARROUND YOU</h2>
        <p>"Subscribe Programmer Zone Youtube Channel"</p>
        <a
          href="https://www.youtube.com/channel/UCpzDr8CXFqYPLusr13bjTzA"
          target="_blank"
          ><button><div class="zone">Programmer Zone</div></button></a
        >
      </div>
    </section>
    <div class="search-job text-center">
      <input type="text" class="form-control" placeholder="Search Keyword" />
      <input type="text" class="form-control" placeholder="Company" />
      <input type="text" class="form-control" placeholder="Location" />
      <input type="button" class="btn btn-primary" value="Find job" />
    </div>
    <!-- Top Recruiters -->

    <section id="recruiters">
      <div class="container text-center">
        <h3>TOP RECRUITERS</h3>
        <div>
          <img src="images/FAmazone.jpg" alt="" />
          <img src="images/dell.jpg" alt="" />
          <img src="images/netflix.png" alt="" />
          <img src="images/eastwest.png" alt="" />
          <img src="images/cisco.png" alt="" />
          <img src="images/affect.png" alt="" />
        </div>
        <div>
          <img src="images/tech-solution.jpg" alt="" />
          <img src="images/byjus.png" alt="" />
          <img src="images/alibaba.png" alt="" />
          <img src="images/daraz.jpg" alt="" />
          <img src="images/IBM.jpg" alt="" />
          <img src="images/Microsoft.jpg" alt="" />
        </div>
      </div>
    </section>

    <!-- Recent Jobs -->

    <section id="jobs">
      <div class="container">
        <h5>Recent Updates</h5>
        <div class="company-details">
          <div class="job-update">
            <h4><b>Season Senior Python Developer (Fresher)</b></h4>
            <p>XYZ Solution Pvt. Ltd.</p>
            <i class="fa fa-briefcase"></i><span> 0-1 yrs</span><br />
            <i class="fa fa-credit-card"></i><span> 3.00 - 4.00 lacs p. a.</span
            ><br />
            <i class="fa fa-map-marker"></i><span> Dhaka</span>
            <p>
              Skills <i class="fa fa-angle-double-right"></i><small>Java</small
              ><small>Python</small><small>HTML,CSS</small><small>.Net</small>
            </p>
            <p>
              Description <i class="fa fa-angle-double-right"></i> Subscribe
              Programmer Zone Youtube Channel to Watch more videos on Web
              Desinging and Web Development. <a href="#">Read more</a>
            </p>
          </div>
          <div class="apply-btn">
            <button type="button " class="btn btn-primary">Apply</button>
          </div>
        </div>

        <div class="company-details">
          <div class="job-update">
            <h4><b>Season Senior Python Developer (Fresher)</b></h4>
            <p>XYZ Solution Pvt. Ltd.</p>
            <i class="fa fa-briefcase"></i><span> 0-1 yrs</span><br />
            <i class="fa fa-credit-card"></i><span> 3.00 - 4.00 lacs p. a.</span
            ><br />
            <i class="fa fa-map-marker"></i><span> Dhaka</span>
            <p>
              Skills <i class="fa fa-angle-double-right"></i><small>Java</small
              ><small>Python</small><small>HTML,CSS</small><small>.Net</small>
            </p>
            <p>
              Description <i class="fa fa-angle-double-right"></i> Subscribe
              Programmer Zone Youtube Channel to Watch more videos on Web
              Desinging and Web Development. <a href="#">Read more</a>
            </p>
          </div>
          <div class="apply-btn">
            <button type="button " class="btn btn-primary">Apply</button>
          </div>
        </div>

        <div class="company-details">
          <div class="job-update">
            <h4><b>Season Senior Python Developer (Fresher)</b></h4>
            <p>XYZ Solution Pvt. Ltd.</p>
            <i class="fa fa-briefcase"></i><span> 0-1 yrs</span><br />
            <i class="fa fa-credit-card"></i><span> 3.00 - 4.00 lacs p. a.</span
            ><br />
            <i class="fa fa-map-marker"></i><span> Dhaka</span>
            <p>
              Skills <i class="fa fa-angle-double-right"></i><small>Java</small
              ><small>Python</small><small>HTML,CSS</small><small>.Net</small>
            </p>
            <p>
              Description <i class="fa fa-angle-double-right"></i> Subscribe
              Programmer Zone Youtube Channel to Watch more videos on Web
              Desinging and Web Development. <a href="#">Read more</a>
            </p>
          </div>
          <div class="apply-btn">
            <button type="button " class="btn btn-primary">Apply</button>
          </div>
        </div>

        <div class="company-details">
          <div class="job-update">
            <h4><b>Season Senior Python Developer (Fresher)</b></h4>
            <p>XYZ Solution Pvt. Ltd.</p>
            <i class="fa fa-briefcase"></i><span> 0-1 yrs</span><br />
            <i class="fa fa-credit-card"></i><span> 3.00 - 4.00 lacs p. a.</span
            ><br />
            <i class="fa fa-map-marker"></i><span> Dhaka</span>
            <p>
              Skills <i class="fa fa-angle-double-right"></i><small>Java</small
              ><small>Python</small><small>HTML,CSS</small><small>.Net</small>
            </p>
            <p>
              Description <i class="fa fa-angle-double-right"></i> Subscribe
              Programmer Zone Youtube Channel to Watch more videos on Web
              Desinging and Web Development. <a href="#">Read more</a>
            </p>
          </div>
          <div class="apply-btn">
            <button type="button " class="btn btn-primary">Apply</button>
          </div>
        </div>

        <div class="company-details">
          <div class="job-update">
            <h4><b>Season Senior Python Developer (Fresher)</b></h4>
            <p>XYZ Solution Pvt. Ltd.</p>
            <i class="fa fa-briefcase"></i><span> 0-1 yrs</span><br />
            <i class="fa fa-credit-card"></i><span> 3.00 - 4.00 lacs p. a.</span
            ><br />
            <i class="fa fa-map-marker"></i><span> Dhaka</span>
            <p>
              Skills <i class="fa fa-angle-double-right"></i><small>Java</small
              ><small>Python</small><small>HTML,CSS</small><small>.Net</small>
            </p>
            <p>
              Description <i class="fa fa-angle-double-right"></i> Subscribe
              Programmer Zone Youtube Channel to Watch more videos on Web
              Desinging and Web Development. <a href="#">Read more</a>
            </p>
          </div>
          <div class="apply-btn">
            <button type="button " class="btn btn-primary">Apply</button>
          </div>
        </div>

        <div class="company-details">
          <div class="job-update">
            <h4><b>Season Senior Python Developer (Fresher)</b></h4>
            <p>XYZ Solution Pvt. Ltd.</p>
            <i class="fa fa-briefcase"></i><span> 0-1 yrs</span><br />
            <i class="fa fa-credit-card"></i><span> 3.00 - 4.00 lacs p. a.</span
            ><br />
            <i class="fa fa-map-marker"></i><span> Dhaka</span>
            <p>
              Skills <i class="fa fa-angle-double-right"></i><small>Java</small
              ><small>Python</small><small>HTML,CSS</small><small>.Net</small>
            </p>
            <p>
              Description <i class="fa fa-angle-double-right"></i> Subscribe
              Programmer Zone Youtube Channel to Watch more videos on Web
              Desinging and Web Development. <a href="#">Read more</a>
            </p>
          </div>
          <div class="apply-btn">
            <button type="button " class="btn btn-primary">Apply</button>
          </div>
        </div>
        <ul class="page-link text-center">
          <li class="left-arrow">&#8592;</li>
          <li class="active">1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li class="right-arrow">&#8594;</li>
        </ul>
      </div>
    </section>

    <!-- site state -->

    <section id="site-stats">
      <div class="container text-center">
        <h3>JOB HUNTER SITE STATS</h3>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <div class="stats-box">
                  <i class="fas fa-users"></i><span><small>100k+</small></span>
                  <p>Job Seekers</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="stats-box">
                  <i class="fab fa-slideshare"></i
                  ><span><small>500+</small></span>
                  <p>Employers</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <div class="stats-box">
                  <i class="fas fa-hand-peace"></i
                  ><span><small>10k+</small></span>
                  <p>Active Jobs</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="stats-box">
                  <i class="fas fa-building"></i
                  ><span><small>400+</small></span>
                  <p>Companies</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="footer" class="text-center footer-image">
      <img src="images/job-logo.jpg" alt="Website Logo" />
      <p>
        Subscribe Programmer Zone Youtube Channel to Watch more videos on Web
        Desinging and Web Development.<br />Press the bell icon to get
        notification of new videos
      </p>
      <a href="https://www.facebook.com/akmrana570" target="_blank"
        ><i class="fab fa-facebook-square"></i
      ></a>
      <a href="https://twitter.com/" target="_blank"
        ><i class="fab fa-twitter-square"></i
      ></a>
      <a href="https://www.linkedin.com/in/akm-rana-33b9281a0/" target="_blank"
        ><i class="fab fa-linkedin"></i
      ></a>
      <a href="https://www.instagram.com/jason_stathum/" target="_blank"
        ><i class="fab fa-instagram-square"></i
      ></a>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>