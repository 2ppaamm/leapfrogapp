<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LeapFrogger</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 

    <!-- Custom Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
   
    <!-- Advanced CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="js/lib/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/lib/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/lib/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="js/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="js/lib/video/YTPlayer.css" rel="stylesheet">
    <link href="js/lib/flipclock/flipclock.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top wp1" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand navbar-left" href="#page-top">
                    <img style="max-width:40px; margin-top: -7px;"
                    src="img/leapfrogger.png">Leap<span class="font-light">Frogger</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!--li class="page-scroll">
                        <a href="#gallery">Documentaries</a>
                    </li-->
                    <li class="page-scroll">
                        <a href="#about">About Us</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <a href="blog.html">Production Blog</a>
                    </li>
                    <li>
                        <a href="#" onclick="window.signin();">SignIn</a>
                    </li>
                    @if(Auth::check())
                      <!-- Table -->
                      <table class="table">
                          <tr>
                              <th>Character</th>
                              <th>Real Name</th>
                          </tr>
                          @foreach($characters as $key => $value)
                            <tr>
                              <td></td><td></td>
                            </tr>
                          @endforeach
                      </table>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   
    <!-- Intro Section -->
    <section id="intro">
        <div class="video-content">  
            <video autoplay loop id="video-background" muted plays-inline controls>
              <source src="https://player.vimeo.com/external/225763613.hd.mp4?s=34a319c3476dd8ba43ab7473accb86f845d0fda3&profile_id=174" type="video/mp4">
            </video>
            
            <div class="overlay">
                <div class="container-wrapper">
                    <div class="container">
                        <div class="col-md-12 wp1 delay-05s"> 
                            <div class="intro-info-wrapper">
                                <h1 class="text-center">LeapFrogger  <span class="text-color font-light">Documentaries</span></h1>
                                <div id="owl-intro" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <p class="font-similar">Unfolding radical social solutions<br> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.intro-info-wrapper -->

                    <div class="media-btns buttons page-scroll">
                        <a class="btn btn-default about-btn" href="#about">About Us<i class="fa fa-chevron-right"></i></a>
                        <!--a class="btn btn-default about-btn" href="#gallery">Documentaries<i class="fa fa-chevron-right"></i></a-->
                        <div class="btn btn-default play-btn" id="play-button">Unmute Video<i class="fa fa-play animated"></i></div>
                        <div class="btn btn-default pause-btn" id="pause-button">Mute Video<i class="fa fa-pause animated"></i></div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /#intro --> 

    <!-- Gallery Section -->
    <!--section id="gallery">
    <div class="overlay"></div>
    
    <div class="section-wrapper wp8 delay-05s">
    <div class="row">
      <div class="col-sm-12 col-md-6 no-padding">
        <div class="video-background">
            <video height="auto" poster="img/video-img.jpg" controls="controls" preload="none" onclick="this.play()">
                <source src="https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&profile_id=119&oauth2_token_id=57447761" type="video/mp4">
            </video>
            <div class="actor-info">
                <h4 class="heading">Clash of the Titans</h4>
                <h5 class="sub-heading">Synopsis</h5>
            </div--> <!-- /.actor-info -->        
        <!--/div>
      </div>
      <div class="col-sm-12 col-md-6 no-padding">
        <div class="video-background">
            <video height="auto" poster="img/video-img.jpg" controls="controls" preload="none" onclick="this.play()">
                <source src="https://player.vimeo.com/external/19816776.hd.mp4?s=4500615818e69953e6bc9a436c59e982da2608cd&profile_id=113" type="video/mp4">
            </video>
            <div class="actor-info">
                <h4 class="heading">The Adventures of Bot Bot</h4>
                <h5 class="sub-heading">Synopsis</h5>
            </div> <!-- /.actor-info -->        
        <!--/div>
      </div>
    </div>
    </div>
    </section><!-- /#gallery -->    

    <!-- About Section -->
    <section id="about">
            <div class="more page-scroll" id="more">
            <a href="#about"><i class="fa fa-angle-down"></i></a>
            </div>

            
    <div class="container wp2">
    <h1 class="section-title">About Us</h1>
    <p>LeapFrogger is in the businesss of creating, distributing and licensing media contents and documentaries that tell stories about human's innovations in solving social issues.</p>

        <!-- Advantages -->
        <div class="advantages">
            <!--div class="section-sub-title">
                Our innovations
            </div>
            <div class="colored-line"></div>
            
            <div class="container">
                <div class="col-md-4 advantages-item wp7 delay-05s">
                    <div class="advantages-item-icon"><i class="fa fa-star-o"></i></div>
                    <h3>USP 1</h3>
                    <p>
                    Say something here, Nick.
                    </p> 
                </div--><!-- /.col-md-4 -->        
        
                <!--div class="col-md-4 advantages-item wp7">
                    <div class="advantages-item-icon"><i class="fa fa-flag-o"></i></div>
                    <h3>USP2</h3>
                    <p>
                    Doesn't have to be 3 USP. Can be any number. Help me here.<span class="text-light"><i class="fa fa-user"></i>- 2062 Actors. </span> Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p> 
                </div--><!-- /.col-md-4 -->   
                
                <!--div class="col-md-4 advantages-item wp7 delay-05s">
                    <div class="advantages-item-icon"><i class="fa fa-thumbs-o-up"></i></div>
                    <h3>USP3</h3>
                    <p>
                    And here.
                    </p> 
                </div--><!-- /.col-md-4 -->
            <!--/div>           
       </div><!-- /.advantages -->  
        <hr> 
        <div class="section-sub-title">
            Our Team
        </div>
        <div class="row">
            <div class="col-lg-6 wp2 delay-05s">   
              <div class="movie-disc">
              <div class="movie-avatar">
                      <div class="movie-avatar-img">
                            <img src="img/nickmanley.png" alt="Nick Manley">
                      </div><!-- /.movie-avatar-img --> 
                  </div><!-- /.movie-disc --> 
              </div><!-- /.movie-avatar --> 

            </div><!-- /.col-lg-6 -->
            
            <div class="col-lg-6 wp2 delay-1s">  
            <h2>Nick <span class="text-color">Manley</span></h2>
            <h4 class="sub-text">Co-Founder, Creative</h4>         
            <br>
            
            <p>Nick Manley is a Texas based director, cinematographer, and producer with a background in Art History and Operations Management. His passion is in cultural exploration through immersive documentary filmmaking.
            </p>
            <p>His work has screened at film festivals in the US, UK, Greece, Argentina, Mexico, Lebanon, Venezuela, Portugal, Italy, France, Spain, Poland, Israel, and Romania.</p>
            <p>He teaches Cinematography and Film Production at Texas A&M University and Harvard.</p> 
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-6 wp2 delay-05s">   
              <div class="movie-disc">
              <div class="movie-avatar">
                      <div class="movie-avatar-img">
                            <img src="img/pamelalim.jpg" alt="Pamela Lim">
                      </div><!-- /.movie-avatar-img --> 
                  </div><!-- /.movie-disc --> 
              </div><!-- /.movie-avatar --> 

            </div><!-- /.col-lg-6 -->
            
            <div class="col-lg-6 wp2 delay-1s">  
            <h2>Pamela <span class="text-color">Lim</span></h2>
            <h4 class="sub-text">Co-Founder, Business<br>
            </h4>
            <br>

            <p>Pamela Lim was a well-known entrepreneur in Asia 10 years ago. Her passion and drive as an entrepreneur helped her excel in the fast-paced, dog-eat-dog world of business where so few succeed. She has won numerous entrepreneur awards in Singapore and the rest of Asia, including Top 10 Woman entrepreneur in 1999, The Most Promising Woman Entrepreneur in 2000 and Netrepreneur of the Year in 2001.
            <p>Pamela started a company with just three employees which grew into one that has business and operations in 7 countries. The company managed to get approved for dual-listing in NASDAQ and SGX, a commendable feat as it’s the first ever Singapore company to achieve a first level listing approval.</p>
            <p>She selflessly gave up the entrepreneurial and business world in 2004 with the passing of her father-in-law to raise her 5 young children. She started teaching and took to it with zealous dedication since 2004.</p>
            <p>LeapFrogger is her new initiative to launch into a media content world.  ... I don't know... anyhow write for now.</p>

            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
            <div class="section-sub-title">
                How we started
            </div>
            <div class="col-lg-12 delay-1s">  
                <p>"I had to travel to Harvard to complete a course on campus in order to fulfil the residency requirement for a degree I was taking. I could not graduate unless I made it to campus by Summer 2017, and so I wasn't choosy. I just picked the only digital media course the university offered that summer: Video Field Production.
                </p>
                <p>Prior to this, I’ve never held a DSLR camera in my life, much less produce a video of any quality worth mentioning. In three weeks, from an illiterate with cameras, I could actually shoot and put together movies. Over the last two years, it was clear to me that the written word and still photography are losing their charms in this social media world. Audience demand moving images and the large social media companies are pouring resources to tap on this market. I had to wait this long to do something about it, and unintentionally so.
                </p>
                <p>In the midst of trying to absorb all I could in the three weeks about video making, my impulse for talent hunting entrepreneurs in order to nurture them was not put on the back burner. So when our professor asked me about how I teach entrepreneurship, I found myself looking at him and thinking if I could bring out the businessman in him. He has a wonderful personality and is ready to create a great venture.
                </p>
                <p>So, I told him what I saw: that he has the relevant skills and there is a right window of market opportunity to create something. And so the venture began, a Harvard student who talent-spotted her professor, and under her tutelage, he will become a successful entrepreneur.
                </p>
                <p>An unbelievable story and totally true. Going forward, only time can tell if I am right about the market, the problem we can solve together and the talent I discovered in young Professor Manley, who is now my co-founder, Nick."
                </p>
                <p>~ Pamela Lim</p>

                <p>"This initiative began with a conversation at Harvard about innovation. My partner Pamela and I were discussing the nature of radical social advancements. It's interesting to think about what catalyzes these movements. If necessity is the mother of all invention, we thought about opportunities to capture the spark that sets change in motion. </p>
                <p>Pamela and I have built Leapfrogger as a platform for sharing these stories of social change, innovation, and entrepreneurship. A place where the stagnancy of old rules and systems are replaced by nimble adaptation as a way to inspire the next generation of leapfroggers.</p>
                <p>If you can't join them, beat them."</p>
                <p>~ Nick Manley</p>
            </div>

    </div><!-- /.container --> 
    </section><!-- /#about -->     
         
    <!-- About-Sub Section -->
    <!--section id="about-sub">              
    <div class="container">       
            <div class="row">
            <div class="col-lg-9 col-md-9 wp3 delay-05s">
            <h2 class="sub-title">Best Film of the Year</h2>  
            <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.  
            </p>
            <ul class="feature-list">
                <li><i class="fa fa-star"></i> Reliable and Secure Platform</li>
                <li><i class="fa fa-history"></i> Everything is perfectly orgainized for future</li>
                <li><i class="fa fa-users"></i> Attach large file easily</li>
                <li><i class="fa fa-paper-plane"></i> Tons of features and easy to use and customize</li>
            </ul>
            <p>
            <span class="text-color">//</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum.
            </p>
            
            
            
            </div--><!-- /.col-lg-9 -->
            
            <!--div class="col-lg-3 col-md-3" id="counters">
                        <ul class="counters wp3">
                        <li>
                            <span id="counter-1">0</span>
                            <h5>Best Film Actors</h5>
                        </li>
                        
                        <li>
                            <span id="counter-2">0</span>
                            <h5>You Tube Trailers</h5>
                        </li>
                        
                        <li>
                            <span id="counter-3">0</span>
                            <h5>Professional Reviews</h5>
                        </li>                        
                        </ul>
            </div--><!-- /.col-lg-3 -->
            
            
            
        <!--/div--><!-- /.row -->
    <!--/div--><!-- /.container --> 
    <!--/section--><!-- /#about-sub -->     




  <!-- Features Section -->
  <!--section id="features">
  <div class="container">
  <div class="row">
            
                    
            <div id="expand-counters" class="col-md-6 features wp4">
                <h2 class="sub-title">Rating by professionals</h2>
                <ul class="features-wrap">
                    <li>
                        <h6>IMDb</h6>
                        <div><span class="expand expand-1"><em><b id="expand-counter-1"></b>%</em></span></div>
                    </li>
                    <li>
                        <h6>Hot-top</h6>
                        <div><span class="expand expand-2"><em><b id="expand-counter-2"></b>%</em></span></div>
                    </li>
                    <li>
                        <h6>Movie Rate</h6>
                        <div><span class="expand expand-3"><em><b id="expand-counter-3"></b>%</em></span></div>
                    </li>
                    <li>
                        <h6>Hollywood</h6>
                        <div><span class="expand expand-4"><em><b id="expand-counter-4"></b>%</em></span></div>
                    </li>
                </ul>
            </div>
        
        
        
            <div class="col-md-6 wp4 delay-05s">

                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                          <span class="glyphicon glyphicon-minus"></span>
                          Reviews by: Mila Linela
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Suspendisse pulvinar, augue ac venenatis condimentum, fringilla vel, aliquet nec, vulputate eget, arcu. sem libero vue velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus.Nullam dictum. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          <span class="glyphicon glyphicon-plus"></span>
                          Reviews by: Olivia Milavitsa
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                      Maecenas nec odio et ante tincidunt tempus. Fusce fringilla mauris sit vulputate eleifend sapien. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim  ut, mollis sed, nonummy id, metus justo, viverra rhoncus pederhoncus ut, imperdiet a. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sedumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          <span class="glyphicon glyphicon-plus"></span>
                          Reviews by: Vilena Monserat
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui magna, posuere eget, umsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla vestibulum et, tempor auctor, justo. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero vue velit pede quis nunc. In ac felis quis tortor malesuada pretium. Pellentesque auctor neque nec urna. Vestibulum ante ipsum primis in faucibus orci luctus. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra rhoncus pede. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                      </div>
                    </div>
                  </div>
                </div>

            </div>         
        </div>
        </div--><!-- /.container --> 
  <!--/section--><!--/.features -->

  
  
  
    <!-- Actors Section -->
    <!--section id="actors">
        <div class="container"> 
            <div class="row">      
                <div class="col-lg-12">
                <h1 class="section-title">Our Topics</h1>
                
                    <div class="owl-actors owl-carousel owl-theme">
                        
                        <div class="item" >
                            <div class="col-md-12 wp6">
                                <div class="actor">
                                    <div class="avatar">
                                    <img alt="img" src="img/actors/01.png">
                                    </div>
                                    <div class="details">
                                          <ul class="social">
                                            <li><a href="#"><i class="fa fa-money"></i><h5>Finance</h5></a></li>
                                            <li><p>Transactions either build or strip wealth</p></li>
                                          </ul>
                                    </div>
                                </div--><!-- /.actor -->
                            <!--/div>
                        </div--><!-- /.item -->
                        <!--div class="item" >
                            <div class="col-md-12 wp6">
                                <div class="actor">
                                    <div class="avatar">
                                    <img alt="img" src="img/actors/01.png">
                                    </div>
                                    <div class="details">
                                          <ul class="social">
                                            <li><a href="#"><i class="fa fa-graduation-cap"></i><h5>Education</h5></a></li>
                                            <li><p>"The most effective weapon in which we can use to change the world" ~ Nelson Mendela</p></li>
                                          </ul>
                                    </div>
                                </div--><!-- /.actor -->
                            <!--/div>
                        </div--><!-- /.item -->
                        <!--div class="item" >
                            <div class="col-md-12 wp6">
                                <div class="actor">
                                    <div class="avatar">
                                    <img alt="img" src="img/actors/01.png">
                                    </div>
                                    <div class="details">
                                      <ul class="social">
                                        <li><a href="#"><i class="fa fa-home"></i><h5>Housing</h5></a></li>
                                        <li><p>Everybody has a dream to own a home</p></li>                                         
                                      </ul>
                                </div>
                                </div--><!-- /.actor -->
                            <!--/div>
                        </div--><!-- /.item -->
                        <!--div class="item" >
                            <div class="col-md-12 wp6">
                                <div class="actor">
                                    <div class="avatar">
                                    <img alt="img" src="img/actors/01.png">
                                    </div>
                                    <div class="details">
                                          <ul class="social">
                                            <li><a href="#"><i class="fa fa-cutlery"></i><h5>Food</h5></a></li>
                                            <li><p>"Food is not rationale. It is culture, habit, craving and identity." ~ Jonathan Safran Foer</p></li>                                         
                                          </ul>
                                    </div>
                                </div--><!-- /.actor -->
                            <!--/div>
                        </div--><!-- /.item -->
                        <!--div class="item" >
                            <div class="col-md-12 wp6">
                                <div class="actor">
                                    <div class="avatar">
                                    <img alt="img" src="img/actors/01.png">
                                    </div>
                                    <div class="details">
                                          <ul class="social">
                                              <li><a href="#"><i class="fa fa-subway"></i><h5>Transportation</h5></a></li>
                                              <li><p>Whether you own a car or take a bus, in the end, everyone is a pedestrain.</p></li>
                                          </ul>
                                    </div>
                                </div--><!-- /.actor -->
                            <!--/div>
                        </div--><!-- /.item -->
                        <!--div class="item" >
                            <div class="col-md-12 wp6">
                                <div class="actor">
                                    <div class="avatar">
                                    <img alt="img" src="img/actors/01.png">
                                    </div>
                                    <div class="details">
                                          <ul class="social">
                                            <li><a href="#"><i class="fa fa-female"></i><h5>Women in Societies</h5></a></li>
                                            <li><p>Many women do noble things, but you surpass them all.</p></li>
                                          </ul>
                                    </div>
                                </div--><!-- /.actor -->
                            <!--/div>
                        </div--><!-- /.item -->
                    
                <!--/div--><!-- /.col-lg-12 -->
            <!--/div--><!-- /.row -->  
        <!--/div--><!-- /.container -->          
        <!--div class="container"> 
            <div class="row">      
                <div class="col-lg-12">
                <h1 class="section-title">The Places</h1>
                
                    <div class="owl-actors owl-carousel owl-theme">
                        
                        <div class="item" >
                            <div class="col-md-12 wp6">
                                <div class="actor">
                                    <div class="avatar">
                                    <img alt="img" src="img/actors/01.png">
                                    </div>
                                    <div class="details">
                                          <ul class="social">
                                            <li><a href="#"><i class="fa fa-money"></i><h5>Cambodia</h5></a></li>
                                            <li><p>Hidden Truth</p></li>
                                          </ul>
                                    </div>
                                </div--><!-- /.actor -->
                            <!--/div>
                        </div--><!-- /.item -->
                    
                <!--/div--><!-- /.col-lg-12 -->
            <!--/div--><!-- /.row -->  
        <!--/div--><!-- /.container -->          
    <!--/section--><!-- /#actors --> 
    

    <!-- Blog Section -->
    <!--section id="blog">
    <div class="container"> 
        <div class="row">      
        <div class="col-lg-12 wp9 delay-05s">
        <h1 class="section-title">Production Blog<i class="fa fa-calendar-o"></i></h1>

           <div id="owl-blog"-->
                  
               <!-- 01 -->
               <!--div class="item">
               <div class="prev-blog-item">
                    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                    <a href="blog-page.html">View blog post</a>
               </div--><!-- /.prev-blog-item -->   

               <!--div class="blog-item">
                    <div class="blog-item-img"><img src="img/blog/01.jpg" alt=""></div>
                    
                    <div class="blog-item-info page-scroll">
                    <span>08</span>
                    <small>Feb</small>
                    <a href="blog-page.html#comments-area"><i class="fa fa-comments-o"></i><small>145</small></a>
                    </div--><!-- /.blog-item-info --> 
                    
                    <!--div class="blog-item-text">
                    <h3><a href="blog-page.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                    </div--><!-- /.blog-item-text --> 
                    
                <!--/div>

                <div class="next-blog-item">
                    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                    <a href="blog-page.html">View blog post</a>
                </div--><!-- /.prev-blog-item --> 
                <!--/div--><!-- /.item --> 
           
                <!-- 02 -->
                <!--div class="item">
                <div class="prev-blog-item">
                    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                    <a href="blog-page.html">View blog post</a>
                </div--><!-- /.prev-blog-item -->   

                <!--div class="blog-item">
                    <div class="blog-item-img"><img src="img/blog/02.jpg" alt=""></div>
                    
                    <div class="blog-item-info page-scroll">
                    <span>08</span>
                    <small>Feb</small>
                    <a href="blog-page.html#comments-area"><i class="fa fa-comments-o"></i><small>145</small></a>
                    </div--><!-- /.blog-item-info --> 
                    
                    <!--div class="blog-item-text">
                    <h3><a href="blog-page.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                    </div--><!-- /.blog-item-text --> 
                 <!--/div>

                 <div class="next-blog-item">
                    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                    <a href="blog-page.html">View blog post</a>
                 </div--><!-- /.prev-blog-item --> 
                <!--/div--><!-- /.item -->           
           
                <!-- 03 -->
                <!--div class="item">
                <div class="prev-blog-item">
                    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                    <a href="blog-page.html">View blog post</a>
                </div--><!-- /.prev-blog-item -->   

                <!--div class="blog-item">
                    <div class="blog-item-img"><img src="img/blog/03.jpg" alt=""></div>
                    
                    <div class="blog-item-info page-scroll">
                    <span>08</span>
                    <small>Feb</small>
                    <a href="blog-page.html#comments-area"><i class="fa fa-comments-o"></i><small>145</small></a>
                    </div--><!-- /.blog-item-info --> 
                    
                    <!--div class="blog-item-text">
                    <h3><a href="blog-page.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                    </div--><!-- /.blog-item-text -->
                 <!--/div> 

                 <div class="next-blog-item">
                    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                    <a href="blog-page.html">View blog post</a>
                 </div--><!-- /.prev-blog-item --> 
                 <!--/div--><!-- /.item --> 
           <!--/div--><!-- /.owl-blog --> 
              
        <!--/div--><!-- /.col-lg-12 --> 
    <!--/div--><!-- /.row -->           
    <!--/div--><!-- /.container --> 
    <!--/section--><!-- /#blog -->  

    <!-- Contact Section -->
    <section id="contact">
            <div class="row">      
                <div class="col-lg-12">
                    <h4 class="section-title">LeapFrogger Instagram</h4>
                    <iframe src="http://lightwidget.com/widgets/cb100889e2a15931a18a9c88578dd200.html" width="100%" height="500"></iframe>
                </div>
            </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12 wp11">
                    
                    <ul class="social-buttons">
                        <li><a href="https://instagram.com/nickjmanley"><i class="fa fa-instagram fa-fw"></i> <span>Instagram</span></a></li>
                        <li><a href="https://www.facebook.com/LeapFrogger-2009616019254641/"><i class="fa fa-facebook fa-fw"></i> <span>Facebook</span></a></li>
                        <li><a href="https://vimeo.com/user5998830"><i class="fa fa-vimeo fa-fw"></i> <span>Vimeo</span></a></li>
                        <li><a href="https://www.linkedin.com/company-beta/11201308/"><i class="fa fa-linkedin fa-fw"></i> <span>LinkedIn</span></a></li>
                        <li><a href="https://youtube.com/"><i class="fa fa-youtube fa-fw"></i> <span>You Tube</span></a></li>
                    </ul>
                    
                </div><!-- /.col-lg-12 --> 
                
            </div><!-- /.row --> 
            <div class="row">
        
        <div class="copyright">
        © Created With <i class="fa fa-heart"></i> by <a href="http://www.leap-frogger.com"> - LeapFrogger</a>
        <br>
        2017 Year
        </div>
        <div class="footer-line">All rights reserved</div>
        </div><!-- /.row --> 
    </div><!-- /.container -->        
    </section><!-- /#contact --> 


    <!-- Core JavaScript Files -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <!-- JavaScript -->
    <script src="js/lib/jquery.appear.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/lib/video/jquery.mb.YTPlayer.js"></script>      
    <script src="js/lib/flipclock/flipclock.js"></script>
    <script src="js/lib/jquery.animateNumber.js"></script>
    <script src="js/lib/waypoints.min.js"></script>
    <script src="js/lib/instafeed.min.js"></script>
      
    <!-- Custom Theme JavaScript -->
    <script src="js/main.js"></script>
    <!-- Auth0 scripts -->
    <script src="//cdn.auth0.com/js/lock/10.0/lock.min.js"></script>
    <script type="text/javascript">

      var lock = new Auth0Lock('O9B4LZwvQzAaNRib00vLahCrQdcm2swE', 'pamelalim.auth0.com');


      function signin() {
        lock.show({
           callbackURL: 'http://localhost/auth0/callback',            
           responseType: 'code',
           authParams: {
            scope: 'openid email'  // Learn about scopes: https://auth0.com/docs/scopes
          }
        });
      }
    </script>

</body>

</html>
