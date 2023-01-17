

<section class="header-bg">
        <div class="container">
            

            <div class="row align-items-right">
               
                <div class="col-lg-12 align-right mt-5">
                    <div class="text-sub mt-5 mt-lg-0">
                        <h1 class="titleR font-weight-medium mb-4" style="text-align: right;">Your Profile</h1>
                        
                
                    </div>

                    <div class="buttons_ul mt-3 ">
                      <div class="align-right" style="float: right;">
                        <a href="" class="mr-3 shares"><span class="ml-2 right-icon"><i class="fas fa-eye"></i></span>  134K VIEWS </a>

                        <a href="" class="mr-3 shares"> <span class="ml-2 right-icon"><i class="fas fa-heart"></i></span>  25K LIKES </a>

                        <a href="" class="mr-3 shares"> <span class="ml-2 right-icon"><i class="fas fa-comments"></i></span>  3.2K COMMENTS </a>

                        <a href="" class="mr-3 shares"> <span class="ml-2 right-icon"><i class="fas fa-share"></i></span>  407 SHARES </a>
                        </div>
                    </div>

                     
                 


                </div>
            </div>
        </div>
    </section>



@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    
<div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="{{asset('/folder/images/'.Auth::user()->image)}}" width="90"><span class="font-weight-bold">{{Auth::user()->name}} </span><span class="text-black-50 font-weight-bold">{{Auth::user()->email}}</span></div>

                

                 <div class="d-flex">
                  <div class="col-4 text-center">
                    <a href="#" class="h4 font-bolder mb-0 font-weight-bold">2</a>
                    <span class="d-block text-sm font-weight-bold">Challenges</span>
                  </div>
                  <div class="col-4 text-center">
                    <a href="#" class="h4 font-bolder mb-0 font-weight-bold">0</a>
                    <span class="d-block text-sm font-weight-bold">Cometitions</span>
                  </div>
                  <div class="col-4 text-center">
                    <a href="#" class="h4 font-bolder mb-0 font-weight-bold">1</a>
                    <span class="d-block text-sm font-weight-bold">Views</span>
                  </div>
                </div>

                <div class=" text-center mt-4"><button class="btn btn-primary profile-button" type="button">Edit Profile</button></div>


                 <div class="text-center mt-5">
                        <h4 class="text-center font-weight-bold">Badges and Awards</h4>
                    </div>


                <div class="mt-3">

                  <div class="row">

                  <?php

                  foreach($user->badges as $badge) { ?>

                    <div class="col-md-4 text-center mb-3">
                        <div class=" card" style="border-radius: 0px;">
                                <img src="/images/badges/<?php echo $badge->icon;?>.svg">
                                
                            </div>
                            <span class="small_text"> <?php echo $badge->name; ?></span>
                    </div>
                    

                    <?php } 
                    ?>
                  </div>

                      
                       
                  
                            
   </div>



            </div>
            <div class="col-md-8">
                <div class="ml-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right font-weight-bold">Edit your profile</h4>
                    </div>

               <form action="{{ route('user.updateProfile',$user->id) }}" method="post" class="personal_validate" enctype="multipart/form-data">
        @csrf
        @method('put')
                    

                    <div class="row mt-2">
                      <input type="file" style="cursor: pointer" type="file" name="image" value="{{ isset($user->image) ? $user->image : ''}}">
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6">
                          <label class="labels font-weight-bold">Name</label>
                          <input class="form-control" type="text" placeholder="First Name" id="name" value="{{ isset($user->name) ? $user->name : ''}}" name="name">
                        </div>

                        <div class="col-md-6"><label class="labels font-weight-bold">Surname</label><input class="form-control" type="text" placeholder="Last Name" id="lastname" value="{{ isset($user->lastname) ? $user->lastname : ''}}" name="lastname"></div>
                    </div>


                     <div class="row mt-2">
                        <div class="col-md-6">
                          <label class="labels font-weight-bold">Email</label>
                          <input class="form-control" type="text" placeholder="Email" id="email" value="{{ isset($user->email) ? $user->email : ''}}" name="email">
                        </div>

                        <div class="col-md-6"><label class="labels font-weight-bold">Phone</label><input class="form-control" type="text" placeholder="Phone" id="phone" value="{{ isset($user->phone) ? $user->phone : ''}}" name="phone"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
                        <h4 class="text-right font-weight-bold">Socials</h4>
                    </div>


                    <div class="row mt-3">
                        <div class="col-md-12">
                          <label class="labels font-weight-bold">Instagram</label>
                          <input class="form-control" type="text" placeholder="Instagram" id="instagram" value="{{ isset($user->instagram) ? $user->instagram : ''}}" name="instagram">
                        </div>

                        <div class="col-md-12">
                          <label class="labels font-weight-bold">Facebook</label>
                          <input class="form-control" type="text" placeholder="Facebook" id="facebook" value="{{ isset($user->facebook) ? $user->facebook : ''}}" name="facebook">

                        </div>


                        <div class="col-md-12">
                          <label class="labels font-weight-bold">Twitter</label>
                         <input class="form-control" type="text" placeholder="Twitter" id="twitter" value="{{ isset($user->twitter) ? $user->twitter : ''}}" name="twitter"></div>

                      <div class="col-md-12">
                          <label class="labels font-weight-bold">TikTok</label>
                          <input class="form-control" type="text" placeholder="Tik Tok" id="tiktok" value="{{ isset($user->tiktok) ? $user->tiktok : ''}}" name="tiktok" ></div>

                    </div>
                   
                    <div class="mt-5 text-left"><button class="btn btn-primary profile-button btn-block" type="submit">Save Profile</button></div>


                     </form>

                </div>
            </div>
          
        </div>
    </div>
