<!-- Header Start -->
    <section class="header-bg-home align-items-center position-relative d-flex" id="top" >
        <div class="container-fluid" style="width: 100%;">
            <div class="row align-items-center">

            	  <div class="col-lg-5 offset-lg-2">
                    <div class="mt-5 mt-lg-0">
                        <img src="{{URL::asset('/myassets/images/Shalina Health Champions Desktop_Model Image.png')}}" alt="" class="img-fluid mx-auto d-block align-top side-image">

                    </div>
                </div>


                <div class="col-lg-5">
                    <div class="header-title mt-5">
                        <img src="{{URL::asset('/myassets/images/Shalina Health Champions Desktop_Title Text.png')}}" alt="" class="img-fluid mx-auto d-block align-top ">
                                                

                        <p class="text-sub ml-2 mb-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        

                    </div>

                    
                    <div class="buttons_ul mt-3">
                        <a href="" class="mr-3 shares"><span class="ml-2 right-icon"><i class="fas fa-eye"></i></span>  134K VIEWS </a>

                        <a href="" class="mr-3 shares"> <span class="ml-2 right-icon"><i class="fas fa-heart"></i></span>  25K LIKES </a>

                        <a href="" class="mr-3 shares"> <span class="ml-2 right-icon"><i class="fas fa-comments"></i></span>  3.2K COMMENTS </a>

                        <a href="" class="mr-3 shares"> <span class="ml-2 right-icon"><i class="fas fa-share"></i></span>  407 SHARES </a>

                    </div>

                    <div class="btnsList mt-5">
                        <a href="" class="btn btn-primary ml-2 vote_now">Vote Now </a>

                        <a href="" class="btn btn-primary ml-2 enter_competition">Enter Competition </a>

                        <a href="" class="btn btn-primary ml-2 enter_competition blue"> </a>

                        <a href="" class="btn btn-primary ml-2 enter_competition purple"> </a>


                        
                    </div>


                </div>
              
            </div>
        </div>
    </section>
    <!-- Header End -->


    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center">
                        <div class="text-center ">
                        <h1 class="challenge_heading mb-5 ">Current Challenges</h1>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($challenges as $challenge)


                <div class="col-lg-3 col-md-6 col-sm-6">
          
                    <div class="testimonial-five">
                    <div class="author-image">
                                            <img src="{{asset('/folder/images/'.$challenge->image)}}" alt="">
                                        </div>
                    </div>

                </div>
                @endforeach
                
                

            </div>
        </div>
    </section>

       <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center mb-5">
                        <div class="text-center mb-5">
                        <h1 class="challenge_heading mb-5 ">Previous Challenges</h1>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($challenges as $challenge)


                <div class="col-lg-3 col-md-6 col-sm-6">
                
                    <div class="testimonial-five">
                    <div class="author-image">
                                            <img src="{{asset('/folder/images/'.$challenge->image)}}" alt="">
                                        </div>
                    </div>

                </div>
                @endforeach
                
                

            </div>
        </div>
    </section>

    <section class="section" >
        <div class="container-large">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center mb-5">
                        <div class="text-center mb-5">
                        <h1 class="challenge_heading mb-5">How it works</h1>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" >
                    <div class="services-container pr-4 pl-4" style="background: #293990; border-top-right-radius: 100px; border-bottom-right-radius: 100px; ">
                       <div class="holder">
                           <h4 class="mb-4 mt-4 services-title  text-white">1. Create an account</h4>

                        <p class="text-white">Create an account and stay updated </br> on any current competitions.</p>
                       </div>
                        
        
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6" >
                    <div class="services-container pr-4 pl-4  text-white" style="background: #EB42A9; border-radius: 100px; ">
                
                         <div class="holder">
                          
                        <h4 class="mb-4 mt-4 services-title text-white">2. Create your profile</h4>

                        <p class="text-white">Create your profile and connect </br>to Shalina social media pages.</p>
                       </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6" >
                    <div class="services-container pr-4 pl-4" style="background: #672D93; border-top-left-radius: 100px; border-bottom-left-radius: 100px; ">
                    
                       <div class="holder">
                          
                         <h4 class="mb-4 mt-4 services-title  text-white">3. Enter Challenges</h4>
                        <p class="text-white">Enter challenge and get your <br>freinds vote for you  and earn badges.</p>
                       </div>


                    </div>
                </div>

                

            </div>
        </div>
    </section>




    <!-- <section class="section accomplished-counter-bg" id="footer" >
       <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
    </section> -->