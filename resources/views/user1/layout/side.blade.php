<a href="">
<div class="menu-w menu-activated-on-click">
                <div class="logo-w">
                    <a class="logo" href="{{URL::route('dashboard')}}"><img src="{{URL::asset('img/kglogo.png')}}"><span>N-Power Database</span></a>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="{{URL::asset('img/avatar1.jpg')}}"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">{{ e($user->fname) }}</div>
                            <div class="logged-user-role">{{ e($user->position) }}</div>
                        </div>
                    </div>
                    <ul class="main-menu">
                        <li>
                            <a href="{{URL::route('dashboard')}}">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-window-content"></div>
                                </div><span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{URL::route('add-applicant')}}">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-newspaper"></div>
                                </div><span>Long Insertion</span></a>
                        </li>
                        <li>
                            <a href="{{URL::route('input')}}">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-newspaper"></div>
                                </div><span>Short Insertion</span></a>
                        </li>
                        <li>
                            <a href="{{URL::route('list-applicant')}}">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-delivery-box-2"></div>
                                </div><span>Applicants</span></a>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-user-male-circle"></div>
                                </div><span>Queries</span></a>
                            <ul class="sub-menu">
                                <li><a href="invoice.html">By Job</a></li>
                                <li><a href="login.html">By Location</a></li>
                                <li><a href="register.html">By Gender</a></li>
                                <li><a href="lock.html">By Skills</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{URL::route('calendar')}}">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-newspaper"></div>
                                </div><span>Calendar</span></a>
                        </li>
                        <li>
                            <a href="{{URL::route('logout')}}">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-newspaper"></div>
                                </div><span>Log Out</span></a>
                        </li>
                    </ul>
                </div>
            </div>