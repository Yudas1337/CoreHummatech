<ul class="nav-menus">
    <li class="onhover-dropdown">
        <div class="notification-box">
            <svg>
                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-Bell') }}"></use>
            </svg>
        </div>
        <div class="onhover-show-div notification-dropdown">
            <h6 class="f-18 mb-0 dropdown-title">Notitications </h6>
            <ul>
                <li class="b-l-primary bg-light-primary border-4 mt-3">
                    <p class="font-primary">Delivery processing <span class="font-primary">10 min.</span></p>
                </li>
                <li class="b-l-secondary bg-light-secondary border-4 mt-3">
                    <p class="font-secondary">Order Complete<span class="font-secondary">1 hr</span></p>
                </li>
                <li class="b-l-success bg-light-success border-4 mt-3">
                    <p class="font-success">Tickets Generated<span class="font-success">3 hr</span></p>
                </li>
                <li class="b-l-info bg-light-info border-4 mt-3">
                    <p class="font-info">Delivery Complete<span class="font-info">6 hr</span></p>
                </li>
                <li><a class="f-w-700" href="private-chat.html">Check all</a></li>
            </ul>
        </div>
    </li>
    <li class="onhover-dropdown">
        <svg>
            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-star') }}"></use>
        </svg>
        <div class="onhover-show-div bookmark-flip">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="front">
                        <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                        <ul class="bookmark-dropdown">
                            <li>
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <div class="bookmark-content">
                                            <div class="bookmark-icon"><i data-feather="file-text"></i></div>
                                            <span>Forms</span>
                                        </div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="bookmark-content">
                                            <div class="bookmark-icon"><i data-feather="user"></i></div>
                                            <span>Profile</span>
                                        </div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="bookmark-content">
                                            <div class="bookmark-icon"><i data-feather="server"></i></div>
                                            <span>Tables</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn"
                                    href="javascript:void(0)">Add New Bookmark</a></li>
                        </ul>
                    </div>
                    <div class="back">
                        <ul>
                            <li>
                                <div class="bookmark-dropdown flip-back-content">
                                    <input type="text" placeholder="search...">
                                </div>
                            </li>
                            <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="cart-nav onhover-dropdown">
        <div class="cart-box">
            <svg>
                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-Buy') }}"></use>
            </svg>
        </div>
        <div class="cart-dropdown onhover-show-div">
            <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
            <ul>
                <li>
                    <div class="d-flex"><img class="img-fluid b-r-5 img-60" src="../assets/images/ecommerce/06.jpg"
                            alt="">
                        <div class="flex-grow-1"><span>Winter T-shirt</span>
                            <h6>1 X $ 299.00</h6>
                        </div>
                        <div class="close-circle"><a href="#"><i class="fa fa-times"></i></a></div>
                    </div>
                </li>
                <li>
                    <div class="d-flex"><img class="img-fluid b-r-5 img-60" src="../assets/images/ecommerce/02.jpg"
                            alt="">
                        <div class="flex-grow-1"><span>Men Shirt</span>
                            <h6>1 X $ 299.00</h6>
                        </div>
                        <div class="close-circle"><a href="#"><i class="fa fa-times"></i></a></div>
                    </div>
                </li>
                <li class="total">
                    <h5 class="mb-0">Subtotal :<span class="f-right">$299.00</span></h5>
                </li>
                <li><a class="view-cart" href="cart.html">View Cart</a><a class="view-checkout f-right"
                        href="checkout.html">Checkout</a></li>
            </ul>
        </div>
    </li>
    <li class="onhover-dropdown">
        <div class="message">
            <svg>
                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-message') }}"></use>
            </svg><span class="rounded-pill badge-secondary"> </span>
        </div>
        <div class="onhover-show-div message-dropdown">
            <h6 class="f-18 mb-0 dropdown-title">Message </h6>
            <ul>
                <li>
                    <div class="d-flex align-items-start">
                        <div class="message-img bg-light-primary"><img src="../assets/images/user/3.jpg" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1"><a href="email_inbox.html">Helen Walter</a></h5>
                            <p>Do you want to go see movie?</p>
                        </div>
                        <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                </li>
                <li>
                    <div class="d-flex align-items-start">
                        <div class="message-img bg-light-primary"><img src="../assets/images/user/6.jpg" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1"><a href="email_inbox.html">Jason Borne</a></h5>
                            <p>Thank you for rating us.</p>
                        </div>
                        <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                </li>
                <li>
                    <div class="d-flex align-items-start">
                        <div class="message-img bg-light-primary"><img src="../assets/images/user/10.jpg"
                                alt=""></div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1"><a href="email_inbox.html">Sarah Loren</a></h5>
                            <p>What`s the project report update?</p>
                        </div>
                        <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                </li>
                <li><a class="f-w-700" href="email-application.html">Check all</a></li>
            </ul>
        </div>
    </li>
    <li>
        <div class="mode">
            <svg>
                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-dark') }}"></use>
            </svg>
        </div>
    </li>
    <li class="profile-nav onhover-dropdown p-0">
        <div class="d-flex align-items-center profile-media"><img class="b-r-10 img-40"
                src="../assets/images/dashboard/profile.png" alt="">
            <div class="flex-grow-1"><span>Helen Walter</span>
                <p class="mb-0">Admin <i class="middle fa-solid fa-chevron-down"></i></p>
            </div>
        </div>
        <ul class="profile-dropdown onhover-show-div">
            <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
            <li><a href="email-application.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
            <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
            <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
            <li><a href="login.html"><i data-feather="log-in"> </i><span>Log in</span></a></li>
        </ul>
    </li>
</ul>
