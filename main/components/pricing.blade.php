<div class="" style="padding-top: 100px">
    <div class="page-section border-bottom-2 mt-n5">
        <div class="container-fluid page__container">

            <div class="row justify-content-center mb-2">
                <div class="col-auto">
                    <nav class="nav btn-group">
                        <div class="col-auto">
                            <a href="#monthly" data-toggle="tab" role="tab" aria-selected="true" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                Monthly billing
                            </a>
                        </div>
                        
                        <div class="col-auto border-left border-right">
                            <a href="#annual" data-toggle="tab" role="tab" aria-selected="false" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                Annual billing
                            </a>
                        </div>
                    </nav>
                </div>

            </div>
            
            @include('errors.error_message')
            <div class="tab-content">
                <div class="tab-pane active text-70" id="monthly">
                    <div class="row card-group-row mb-16pt mb-lg-40pt">
                        @forelse ($subscriptions as $subscription)
                        <div class="col-lg-4 col-sm-6 card-group-row__col">
                            <div class="card card-group-row__card text-center o-hidden {{$subscription->slug=="premium"?'card--raised':'' }} ">
                                @if ($subscription->slug=="premium")
                                <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">Start</span>  
                                                        
                                @endif
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow mb-16pt">
                                        <span class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt">
                                            <i class="material-icons">
                                                @switch($subscription->slug)
                                                    @case('professional')
                                                        group
                                                        @break
                                                    @case('premium')
                                                        business_center
                                                        @break
                                                    @case('business')
                                                        business
                                                        @break
                                                
                                                    @default
                                                        person
                                                @endswitch
                                            </i>
                                        </span>
                                        <h4 class="mb-8pt">{{$subscription->name }}</h4>
                                        <p class="text-70 text-left mb-0">
                                            <ul class="list-unstyled">
                                                @foreach ($subscription->description as $description )
                                                <li class="">{!! $description !!}</li>
                                                @endforeach
                                            </ul>
                                        </p>
                                    </div>
                                    <p class="d-flex justify-content-center align-items-center m-0">
                                        <span class="h4 m-0 font-weight-normal">&dollar;</span>
                                        <span class="h1 m-0 font-weight-normal">{{ json_decode($subscription->price)->monthly }}</span>
                                        <span class="h4 m-0 font-weight-normal">/ month</span>
                                    </p>
                                    <p class="lh-1 text-muted mb-0"><small></small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" id="subscribe-to-monthly" class="btn subscribe-to-monthly {{$subscription->slug=="premium"?'btn-accent':'btn-outline-secondary' }}" data-meta='{"period":"monthly","subscription":"{{$subscription->slug}}","plan":{{$subscription->id}},"price":{{json_decode($subscription->price)->monthly}}}'>Get started</a>
                                </div>
                            </div>

                        </div>
                        @empty

                        @endforelse
                    
                    </div>
                </div>

                <div class="tab-pane text-70" id="annual">
                    <div class="row card-group-row mb-16pt mb-lg-40pt">
                        @forelse ($subscriptions as $subscription)
                        <div class="col-lg-4 col-sm-6 card-group-row__col">
                            <div class="card card-group-row__card text-center o-hidden {{$subscription->slug=="premium"?'card--raised':'' }} ">
                                @if ($subscription->slug=="premium")
                                    <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">Start</span>                                                                          
                                @endif
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow mb-16pt">
                                        <span class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt">
                                            <i class="material-icons">
                                                @switch($subscription->slug)
                                                    @case('professional')
                                                        group
                                                        @break
                                                    @case('premium')
                                                        business_center
                                                        @break
                                                    @case('business')
                                                        business
                                                        @break
                                                
                                                    @default
                                                        person
                                                @endswitch
                                            </i>
                                        </span>
                                        <h4 class="mb-8pt">{{$subscription->name }}</h4>
                                        <p class="text-70 text-left mb-0">
                                            <ul class="list-unstyled">
                                                @foreach ($subscription->description as $description )
                                                <li class="">{!! $description !!}</li>
                                                @endforeach
                                            </ul>
                                        </p>
                                    </div>
                                    <p class="d-flex justify-content-center align-items-center m-0">
                                        <span class="h4 m-0 font-weight-normal">&dollar;</span>
                                        <span class="h1 m-0 font-weight-normal">{{ json_decode($subscription->price)->yearly }}</span>
                                        <span class="h4 m-0 font-weight-normal">/ month</span>
                                    </p>
                                    <p class="lh-1 text-muted mb-0"><small>You saved 20%</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" id="subscribe-to-monthly" class="btn subscribe-to-monthly {{$subscription->slug=="premium"?'btn-accent':'btn-outline-secondary' }}" data-meta='{"period":"yearly","subscription":"{{$subscription->slug}}","plan":{{$subscription->id}},"price":{{json_decode($subscription->price)->yearly}}}'>Get started</a>
                                </div>
                            </div>

                        </div>
                        @empty

                        @endforelse
                    </div>
                </div>
            </div>
        
            <div class="page-headline page-headline--title text-center">
                <h2>All plans include</h2>
            </div>
        
            <div class="col-lg-8 mx-auto">
                <div class="row">
                    <div class="col-sm-6 mb-24pt mb-sm-0">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-8pt">
                                <span class="material-icons mr-8pt">check</span>
                                <span>24h Access to support</span>
                            </li>
                            <li class="d-flex align-items-center mb-8pt">
                                <span class="material-icons mr-8pt">check</span>
                                <span>Story automation and scheduling</span>
                            </li>
                            <li class="d-flex align-items-center mb-8pt">
                                <span class="material-icons mr-8pt">check</span>
                                <span>Email tracking and analytics</span>
                            </li>
                            <li class="d-flex align-items-center mb-8pt">
                                <span class="material-icons mr-8pt">check</span>
                                <span>Send time optimization</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="material-icons mr-8pt">check</span>
                                <span>Activities tracking</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-8pt">
                                <span class="material-icons mr-8pt">check</span>
                                <span>Phone support</span>
                            </li>
                            <li class="d-flex align-items-center mb-8pt">
                                <span class="material-icons mr-8pt">check</span>
                                <span>Join 2000+ Community Members</span>
                            </li>
                            <li class="d-flex align-items-center mb-8pt">
                                <span class="material-icons mr-8pt">check</span>
                                <span>99.99% guarantee uptime</span>
                            </li>
                            <li class="d-flex align-items-center mb-8pt">
                                <span class="material-icons mr-8pt">check</span>
                                <span>Newsletter subscription pages</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="material-icons mr-8pt">check</span>
                                <span>Duplicate checker</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="page-section border-bottom-2">
        <div class="container-fluid page__container">
            <div class="page-headline text-center">
                <h2>Feedback</h2>
                <p class="lead measure-lead mx-auto text-70">What other solopreneurs, business owners and individuals have to say about us after using our platform in reaching their goals.</p>
            </div>

            <div class="position-relative carousel-card">
                <div class="row d-block js-mdk-carousel"
                    id="carousel-feedback">
                    <a class="carousel-control-next js-mdk-carousel-control mt-n24pt"
                    href="#carousel-feedback"
                    role="button"
                    data-slide="next">
                        <span class="carousel-control-icon material-icons"
                            aria-hidden="true">keyboard_arrow_right</span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="mdk-carousel__content">

                        <div class="col-12 col-md-6">
                            <div class="card card--elevated card-body">
                                <blockquote class="mb-0">
                                    <p class="text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia distinctio reiciendis iusto id, doloribus optio soluta laborum nobis dolor tempore velit porro maiores eveniet voluptas officia ipsa magnam aliquam. Perferendis?</p>

                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset('assets/assets-new/images/people/110/guy-1.jpg')}}"
                                                width="40"
                                                alt="avatar"
                                                class="rounded-circle">
                                        </div>
                                        <div class="media-body media-middle">
                                            <p class="mb-0"><a href=""
                                                class="text-body"><strong>Umberto Kass</strong></a></p>
                                            <div class="rating">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card card--elevated card-body">
                                <blockquote class="mb-0">
                                    <p class="text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia distinctio reiciendis iusto id, doloribus optio soluta laborum nobis dolor tempore velit porro maiores eveniet voluptas officia ipsa magnam aliquam. Perferendis?</p>

                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset('assets/assets-new/images/people/110/guy-2.jpg')}}"
                                                width="40"
                                                alt="avatar"
                                                class="rounded-circle">
                                        </div>
                                        <div class="media-body media-middle">
                                            <p class="mb-0"><a href=""
                                                class="text-body"><strong>Umberto Kass</strong></a></p>
                                            <div class="rating">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card card--elevated card-body">
                                <blockquote class="mb-0">
                                    <p class="text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia distinctio reiciendis iusto id, doloribus optio soluta laborum nobis dolor tempore velit porro maiores eveniet voluptas officia ipsa magnam aliquam. Perferendis?</p>

                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset('assets/assets-new/images/people/110/guy-2.jpg')}}"
                                                width="40"
                                                alt="avatar"
                                                class="rounded-circle">
                                        </div>
                                        <div class="media-body media-middle">
                                            <p class="mb-0"><a href=""
                                                class="text-body"><strong>Umberto Kass</strong></a></p>
                                            <div class="rating">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-top-1 page-section">
        <div class="container-fluid page__container">
            <div class="page-headline text-center">
                <h2>FAQ</h2>
                <p class="lead measure-lead mx-auto text-70">Frequently Asked Questions</p>
            </div>
            <div class="row card-group-row">
                <div class="col-md-6 card-group-row__col">

                    <div class="card card--elevated card-group-row__card">
                        <div class="card-body d-flex">
                            <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                                <i class="material-icons">question_answer</i>
                            </span>
                            <div class="flex">
                                <a class="card-title mb-4pt"
                                href="">Do you offer a free trial?</a>
                                <p class="text-70 mb-0">We offer everyone a 7 day free trial! You can take advantage of it by visiting our sign-up page! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, ab!</p>
                            </div>
                        </div>
                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                            <div class="flex text-muted"><small>7 people found this useful</small></div>
                            <a href="#"
                            class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 card-group-row__col">

                    <div class="card card--elevated card-group-row__card">
                        <div class="card-body d-flex">
                            <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                                <i class="material-icons">question_answer</i>
                            </span>
                            <div class="flex">
                                <a class="card-title mb-4pt"
                                href="">Can I gift a subscription to someone?</a>
                                <p class="text-70 mb-0">Yes! We do offer certificates. Please email us for more information. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, ad!</p>
                            </div>
                        </div>
                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                            <div class="flex text-muted"><small>7 people found this useful</small></div>
                            <a href="#"
                            class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 card-group-row__col">

                    <div class="card card--elevated card-group-row__card">
                        <div class="card-body d-flex">
                            <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                                <i class="material-icons">question_answer</i>
                            </span>
                            <div class="flex">
                                <a class="card-title mb-4pt"
                                href="">I have a great idea for an application or website, but need help on where to begin. Can you guys help me?</a>
                                <p class="text-70 mb-0">We advise posting personal requests in our Community Forum Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                            <div class="flex text-muted"><small>7 people found this useful</small></div>
                            <a href="#"
                            class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 card-group-row__col">

                    <div class="card card--elevated card-group-row__card">
                        <div class="card-body d-flex">
                            <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                                <i class="material-icons">question_answer</i>
                            </span>
                            <div class="flex">
                                <a class="card-title mb-4pt"
                                href="">I found a bug. Where can I report that?</a>
                                <p class="text-70 mb-0">In the unlikely situation you stumble across a bug, go ahead and shoot us an email. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                            <div class="flex text-muted"><small>7 people found this useful</small></div>
                            <a href="#"
                            class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>