<div class="uni-author-profile-details uk-card uk-card-small@m uk-flex-column uk-flex-middle">
                                    <div class="uk-panel">
                                        <div class="uk-padding-2xsmall uk-radius-circle uk-background-white dark:uk-background-gray-100">
                                            <div class="uk-panel uk-overflow-hidden uk-radius-circle">
                                                <canvas class="uk-visible@m" width="100" height="100"></canvas>
                                                <canvas class="uk-hidden@m" width="90" height="90"></canvas>
                                                <img src="{{asset('/folder/images/'.Auth::user()->image)}}" alt="Thesalvare" class="uk-cover" data-uk-cover="" loading="lazy" style="height: 100px; width: 100px;">
                                            </div>
                                        </div>
                                        <span class="uni-user-verified uk-position-bottom-right" style="line-height: 10px; transform: translate(-5px, -5px)">
                                            <i class="material-icons uk-icon-xsmall uk-icon-small@m uk-radius-circle uk-background-white uk-text-info dark:uk-background-gray-100" style="padding: 2px">verified</i>
                                        </span>
                                    </div>
                                    <h4 class="uk-h5 uk-h4@m uk-margin-xsmall-top uk-margin-top@m uk-margin-remove-bottom">{{ Auth::user()->name }}</h4>
                                    
                                    <p class="uk-margin-xsmall uk-margin@m">
                                    
                                            <a type="submit" class="uk-button uk-button-medium uk-button-primary uk-width-1-1 uk-margin-small-top@m" href="/user/profile/{{ Auth::user()->id }}">Edit Profile</a>
                                    </p>
                                    <div class="uk-card uk-card-xsmall uk-radius uk-width-1-1 uk-margin-xsmall-top">
                                        <div class="uk-grid-small uk-grid-divider uk-grid-match uk-child-width-1-3 uk-grid" data-uk-grid="">
                                            <div class="uk-first-column">
                                                <div class="uk-panel">
                                                    <h5 class="uk-h5 uk-margin-remove">0</h5>
                                                    <p class="uk-text-xsmall uk-text-small@m uk-text-muted uk-margin-remove uk-margin-2xsmall-top@m">Challenges</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-panel">
                                                    <h5 class="uk-h5 uk-margin-remove">0 </h5>
                                                    <p class="uk-text-xsmall uk-text-small@m uk-text-muted uk-margin-remove uk-margin-2xsmall-top@m">Competitions</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-panel">
                                                    <h5 class="uk-h5 uk-margin-remove">1</h5>
                                                    <p class="uk-text-xsmall uk-text-small@m uk-text-muted uk-margin-remove uk-margin-2xsmall-top@m">Views</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>I make art with the simple goal of giving you something pleasing to look at for a few seconds.</p>
                                    
                              
                                </div>