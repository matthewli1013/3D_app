<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assignment/application/css/bootstrap.css" crossorigin="anonymous">
    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='../assignment/application/css/x3dom.css'>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assignment/application/css/custom.css" crossorigin="anonymous">
      <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- fancyBox3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <title>Coca Cola 3D App</title>
  </head>

  <body id="bodyColor">
      <!-- Logo and navigation bar -->
      <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      
            <!-- Brand -->
            <div class="logo">
              <a class="navbar-brand" href="#">
                <h1>1oca</h1>
                <h2>Cola</h2>
                <h3>Journey</h3>
                <p>Chill time is not a waste of time</p>
              </a>
            </div>
            <!-- Collapsible Navbar Menu icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Link Menu item button to the links class navbar-collapse selector -->
            <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto"> <!-- mx-auto to align center, default to left or ml-auto to pull right -->
                  <li class="nav-item">
                    <a id="navHome" class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>
              
                  <!-- Replace Dropdown from lab 5 with single nav lnk to models -->
                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
                  </li>
                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="3D Application" data-content="This is a 3D Application">About</a>
                  </li>
                </ul>
            </div>
      </nav>
      
      <div class="container-fluid"> <!-- Start SPA Content -->
          <!-- Main body -->
          <div id="home" class="main_contents">
            <div class="row"> <!-- Main 3D image or Carousel -->
              <div class="col-sm-12">
                  <div id="main_3d_image">
                      <div id="main_text" class="col-xs-12 col-sm-4">
                        <div id="title_home"></div>
                        <div id="subTitle_home"></div>
                        <div id="description_home"></div>
                      </div> 
                    </div>
              </div>
            </div>  
            <!-- Row of cards on the grid -->
            <div class="row">
                <!-- Fanta Column -->
                  <div class="col-sm-4">
                      <div class="card img-narrow h-100">
                          <a href="../application/assets/images/render_images/fanta.jpg" data-fancybox data-caption="3D Fanta Bottle Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/site_images/fanta.png" alt="Fanta">
                          </a>
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>   
                            <a href="https://www.coca-cola.co.uk/brands/fanta" class="btn btn-primary btn-responsive">Find out more ...</a>                 
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card h-100">
                          <a href="../application/assets/images/render_images/coke.jpg" data-fancybox data-caption="3D Coke Can Render" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/site_images/coca_cola.jpg" alt="Coke">
                          </a>
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                          
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card img-narrow h-100">
                          <a href="../application/assets/images/render_images/pepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/site_images/dr_pepper.jpg" alt="Dr Pepper">
                          </a>
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                      </div>
                  </div>
            </div>
          </div>  <!-- End of home page -->
          <div id="about" style="display:none;">
              <p>This is a 3D Application showcasing a variety of 3D models</p>
          </div>  
          <!-- Start X3D models and 3D Image Gallery -->
          <div id="models" class="main_contents" style="display:none;">
            <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
            <div class="row">
              <!-- X3D Model -->
              <div class="col-sm-8">
                <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a id="navFanta" class="nav-link active" href="#">Fanta</a>
                        </li>
                        <li class="nav-item">
                            <a id="navCoke" class="nav-link" href="#">Coke</a>
                        </li>
                        <li class="nav-item">
                            <a id="navPepper" class="nav-link" href="#">Pepper</a>
                        </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- X3D Models -->
                    <div>
                        <div id="x3dModelTitle_fanta" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="fantaScene(); fantaDescription();">Fanta</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Pepper</button>
                        
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                          <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/fanta_animation.x3d" > </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/coke_animation.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/pepper_animation.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <div id="x3dCreationMethod_fanta" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 3D image gallery -->
              <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Gallery</a>
                        </li>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div> <!-- End gallery card -->
              </div> <!-- End gallery column -->
            </div> <!-- End row for X3D Model and Gallery -->
          </div> <!-- End X3D Models and Gallery -->

          <!-- Start interaction row -->
          <div id="interaction" class="row" style="display:none;">
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>Dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                          <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>X3D animation options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireFrame();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="headLight();">Default</a>
                                <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
                                <a class="dropdown-item" href="#" onclick="targetLight();">Target On/Off</a>
                                <a class="dropdown-item" href="#" onclick="headLight();">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>Dropdown menu for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
          </div> <!-- End of interaction row -->

          <!-- Row to hold one card to hold the coke descriptive text, etc.-->
          <div id="fantaDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_fanta" class="card-title drinksText"></div>
                          <div id="subTitle_fanta" class="card-subtitle drinksText"></div>
                          <div id="description_fanta" class="card-text drinksText"></div>   
                        <a href="https://www.coca-cola.co.uk/brands/fanta" class="btn btn-primary btn-responsive">Visit Fanta</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End fanta description contents -->
          <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
          <div id="cokeDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_coke" class="card-title drinksText"></div>
                          <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                          <div id="description_coke" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End coke description contents -->

          <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
          <div id="pepperDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End pepper description contents -->
      </div> <!-- End 3D App SPA Contents -->
      
      <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">These web pages are submitted as part requirement for the degree of Computer Science at the University of Sussex. They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
              </div>
              <div class="navbar-text float-right social">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-square fa-2x" style="font-size: 20px; color: red;"></i></a>
                <a href="https://twitter.com/"><i class="fab fa-twitter fa-2x" style="font-size: 20px; color: green;"></i></a>
                <a href="https://myaccount.google.com/profile"><i class="fab fa-google-plus fa-2x" style="font-size: 20px; color: blue;"></i></a>
                <a href="https://github.com/"><i class="fab fa-github-square fa-2x" style="font-size: 20px; color: yellow;"></i></a>
                <a href="https://discord.com/"><i class="fab fa-discord fa-2x" style="font-size: 20px; color: lightblue;"></i></a>
              </div>
          </div>
      </nav> 
      <!-- My 3D App modals -->
      <!-- Contact modal -->
      <!-- The Modal -->
      <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Hon Ho Matthew Li</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p>hl474@sussex.ac.uk</p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
          </div>
      </div>
      <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../assignment/application/js/jquery-3.6.0.min.js"></script>
      <script src="../assignment/application/js/popper.min.js"></script>
      <script src="../assignment/application/js/bootstrap.js"></script>
      <!-- Custom JavaScript code for your 3d App -->
      <script src="../assignment/application/js/custom.js"></script>
      <!-- JavaScript to swap for SPA and restyle -->
      <script src="../assignment/application/js/swap_restyle.js"></script>
      <!-- Include the x3dom JavaScript -->
      <script type='text/javascript' src='../application/js/x3dom.js'></script>
      <!-- JavaScript and PHP based Gallery generator  -->
      <script type="text/javascript" src="../application/js/gallery_generator.js"></script>
      <!-- JQuery code to get content data from a backend JSON file -->
      <script src="../assignment/application/js/getJsonData.js"></script>
      <!-- JavaScript model interactions -->
      <script src="../assignment/application/js/modelInteractions.js"></script>
      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  </body>
</html>