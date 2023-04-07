<!DOCTYPE html>
<html>
<head>
  <title>project</title>
  <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
  <div class="navbar">
        <a href="home.html">HOME</a>
        <a href="about.html">ABOUT</a>
        <a class='active'>CONTACT</a>
    </div>
    <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
        </div>
        <form action='insert.php' class="screen-body-item" method="post">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" name='name' placeholder="NAME">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" name='email' placeholder="EMAIL">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" name='cont' placeholder="CONTACT NO">
            </div>
            <div class="app-form-group message">
              <input class="app-form-control" name='msg' placeholder="MESSAGE">
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">CANCEL</button>
              <button class="app-form-button" type='submit'>
                <a href="home.html" class='app-form-button'>SUBMIT</a>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="credits">
      inspired by
      <a class="credits-link" href= "">
        <svg class="dribbble" viewBox="0 0 200 200">
          <g stroke="#ffffff" fill="none">
            
          </g>
        </svg>
        Dillikrish
      </a>
    </div>
  </div>
</div>
</body>