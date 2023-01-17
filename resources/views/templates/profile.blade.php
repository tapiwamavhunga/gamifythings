<div class="uni-author-profile uk-panel uk-overflow-hidden">
                <div class="uk-section uk-section-medium@m uk-padding-remove-top">
                    <div class="uk-container uk-container-large">
                        <div class="uni-author-profile-cover uk-panel uk-overflow-hidden uk-background-primary-30 uk-radius-large">
                            <canvas class="uk-visible@m" height="250"></canvas>
                            <canvas class="uk-hidden@m" height="170"></canvas>
                            <img src="{{asset('/images/banner-orange-clean.jpg')}}" alt="Thesalvare" class="uk-cover" data-uk-cover="" loading="lazy" style="height: 250px; width: 1387px;">
                        </div>
                    </div>
                    <div class="uk-container">
                        <div class="uk-grid-small uk-grid-large@m uk-grid" data-uk-grid="">
                            <div class="uk-width-1-3@m uk-text-center uk-first-column">
                                @include('templates/snapshot')

                            </div>
                            <div class="uk-width-expand">
                                <div class="uni-author-profile-content uk-padding-medium-top@m">
                                   
                            <form action="{{ route('user.updateProfile',$user->id) }}" method="post" class="personal_validate" enctype="multipart/form-data">
        @csrf
        @method('put')


 



                                        <div class="uk-panel">
                                                <div class="uk-grid uk-grid-small uk-child-width-1-1 uk-grid-stack" data-uk-grid="">
                                                    <div>
                                                        <h3 class="uk-h5">Edit profile</h3>
                                                    </div>
                                                   
                                                    <div class="">
                                                        <div class="uk-form-controls">
                                                            <div class="uk-panel uk-card-small uk-card-border uk-flex-column uk-flex-middle uk-text-center uk-radius" style="border-style: dashed">
                                                                <p class="uk-text-bold uk-text-xsmall uk-text-muted uk-text-middle uk-margin-small"> PNG, GIF, WEBP or JPG. Max 5 MB.</p>
                                                                <div data-uk-form-custom="" class="uk-form-custom">
                                                        <input type="file" style="cursor: pointer" type="file" name="image" value="{{ isset($user->image) ? $user->image : ''}}">
                                                                    <span class="uk-button uk-button-small uk-button-primary uk-button-alt">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud icon uk-icon-xsmall uk-margin-2xsmall-right"><polyline points="16 16 12 12 8 16"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
                                                                        <span>Upload Profile Pic</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div >
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" type="text" placeholder="First Name" id="name" value="{{ isset($user->name) ? $user->name : ''}}" name="name">
                                                        </div>
                                                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}

                                                    </div>
                                                     <div >
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" type="text" placeholder="Last Name" id="lastname" value="{{ isset($user->lastname) ? $user->lastname : ''}}" name="lastname">
                                                        </div>
                                                            {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}

                                                    </div>
                                                    <div >
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" type="text" placeholder="Email" id="email" value="{{ isset($user->email) ? $user->email : ''}}" name="email">
                                                        </div>
                                                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}

                                                    </div>
                                                    
                                                    <div>
                                                       <div >
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" type="text" placeholder="Phone" id="phone" value="{{ isset($user->phone) ? $user->phone : ''}}"  name="phone">
                                                        </div>
                                                            {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}

                                                    </div>
                                                    </div>

                                                    <div>
                                                        <h3 class="uk-h5 uk-margin-top">Socials </h3>
                                                    </div>

                                                     <div >
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" type="text" placeholder="Instagram" id="instagram" value="{{ isset($user->instagram) ? $user->instagram : ''}}" name="instagram">
                                                        </div>
                                                            {!! $errors->first('instagram', '<p class="help-block">:message</p>') !!}

                                                    </div>

                                                        <div >
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" type="text" placeholder="Facebook" id="facebook" value="{{ isset($user->facebook) ? $user->facebook : ''}}" name="facebook">
                                                        </div>
                                                            {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}

                                                    </div>

                                                            <div >
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" type="text" placeholder="Twitter" id="twitter" value="{{ isset($user->twitter) ? $user->twitter : ''}}" name="twitter">
                                                        </div>
                                                            {!! $errors->first('twitter', '<p class="help-block">:message</p>') !!}

                                                    </div>

                                                      <div >
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input" type="text" placeholder="Tik Tok" id="tiktok" value="{{ isset($user->tiktok) ? $user->tiktok : ''}}" name="tiktok" >
                                                        </div>
                                                            {!! $errors->first('tiktok', '<p class="help-block">:message</p>') !!}

                                                    </div>



                                                    

                                                    


                                                    <div>
                                                        <div class="uk-form-controls">
                                                            <button type="submit" class="uk-button uk-button-medium uk-button-primary uk-width-1-1 uk-margin-small-top@m">Save changes</button>

                                                            


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>