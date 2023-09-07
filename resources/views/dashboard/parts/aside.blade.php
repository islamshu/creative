<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        {{-- @if (auth()->user()->type != 'famous' || auth()->user()->famous == null) --}}
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item  ">
                <a href="{{ route('get_setting') }}">
                    <i class="fa fa-cog"></i>
                    <span class="menu-title"> الاعدادات  </span></a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('first.index') }}">
                    <i class="fa fa-puzzle-piece"></i>
                    <span class="menu-title"> القسم الاول  </span></a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('services.index') }}">
                    <i class="fa fa-grav"></i>
                    <span class="menu-title"> الخدمات  </span></a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('about.index') }}">
                    <i class="fa fa-info-circle"></i>
                    <span class="menu-title"> من نحن  </span></a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('projects.index') }}">
                    <i class="fa fa-briefcase"></i>
                    <span class="menu-title"> أعمالنا   </span></a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('HowItWork.index') }}">
                    <i class="fa fa-eercast"></i>
                    <span class="menu-title"> أسلوبنا   </span></a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('clients.index') }}">
                    <i class="fa fa-users"></i>
                    <span class="menu-title"> عملائنا   </span></a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('packages.index') }}">
                    <i class="fa fa-bars"></i>
                    <span class="menu-title"> الباقات   </span></a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('reviews.index') }}">
                    <i class="fa fa-comments"></i>
                    <span class="menu-title"> الآراء   </span></a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('social') }}">
                    <i class="fa fa-share-square"></i>
                    <span class="menu-title"> السوشل ميديا   </span></a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('contactus.index') }}">
                    <i class="fa fa-phone"></i>
                    <span class="menu-title"> تواصل معنا    </span></a>
            </li>


            
        </ul>
    </div>
</div>
