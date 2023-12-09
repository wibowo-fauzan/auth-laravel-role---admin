<style>
    #header.menu-absolute .dima-navbar {
        border: none !important;
        box-shadow: none !important;
        position: fixed !important;
    }   
</style>

<header id="header" class="menu-absolute clearfix" style="position: fixed;">
    <div class="dima-navbar-wrap desk-nav fixed">
        <div class="dima-navbar fix-two dima-navbar-transparent dima-navbar-line animated fadeInDown">
            <div class="dima-navbar-global full-wrapper">
                <div class="logo">
                    <p class="site-title">
                        <a class="dima-brand">
                            <span class="no-sticky-logo">
                                <img src="management/asset/LOGO1.png" alt="Tidak Muncul">
                            </span>
                        </a>
                    </p>
                </div>
                <nav class="dima-nav-tag dima-tag-primary-menu text-end clearfix">
                    <ul id="menu-glenn-menu-no-merchandise" class="dima-nav nav-primary">
                        <li id="nav-menu-item-15319 home" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"> 
                            <a href="#home"><span style="color: white; font-family: 'Almarai', sans-serif; font-family: 'David Libre', serif; font-family: 'Rubik', sans-serif; font-size: 20px;" class="dima-menu-span">Home</span></a> 
                        </li>
                        <li id="nav-menu-item-15646 about" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#about" class="scroll-to"><span class="dima-menu-span" style="color: white; font-family: 'Almarai', sans-serif; font-family: 'David Libre', serif; font-family: 'Rubik', sans-serif; font-size: 20px;">About</span></a>
                        </li>                        
                        <li id="nav-menu-item-15320 contact" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"> 
                            <a href="#contact"><span class=" dima-menu-span" style="color: white; font-family: 'Almarai', sans-serif; font-family: 'David Libre', serif; font-family: 'Rubik', sans-serif; font-size: 20px;">Contact</span></a> 
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="dima-navbar-wrap mobile-nav">
        <div class="dima-navbar fix-two dima-navbar-transparent dima-navbar-line fix_nav animated fadeInDown">
            <div class="full-wrapper">
                <div>
                    <a class="dima-btn-nav dima-open-menu" aria-label="Menu" href="#" on="tap:AMP.setState({btnActive: !btnActive, noScrollState: !noScrollState})" [class]="'dima-btn-nav dima-open-menu ' + (btnActive ? 'btnActive ' : '')">
                        <span class="menu_icon_item"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"  viewBox="0 0 48 48"> <path d="M6 36h36v-4H6v4zm0-10h36v-4H6v4zm0-14v4h36v-4H6z"></path> </svg></span>
                        <span class="menu_icon_item sort_ic"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <path d="M38 12.83L35.17 10 24 21.17 12.83 10 10 12.83 21.17 24 10 35.17 12.83 38 24 26.83 35.17 38 38 35.17 26.83 24z"> </path> </svg></span>
                    </a>
                    {{-- <div class="logo">
                        <p class="site-titl">
                            <a class="dima-brand" href="#home" >
                                <img src="management/asset/LOGO1.png" alt="Tidak Muncul">
                            </a>
                        </p>
                    </div> --}}
                </div>
                <nav class="dima-nav-tag dima-tag-primary-menu text-end clearfix">
                    <ul id="menu-glenn-menu-no-merchandise" class="dima-nav nav-primary">
                        <li id="nav-menu-item-15319 home" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"> 
                            <a href="#home" class="dima-menu-span"><span style="color: black;">Home</span></a> 
                        </li>
                        <li id="nav-menu-item-15646 about" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="#about" class="scroll-to" class="dima-menu-span"><span  style="color: black;">About</span></a>
                        </li>                        
                        <li id="nav-menu-item-15320 contact" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"> 
                            <a href="#contact" class="dima-menu-span"><span  style="color: black;">Contact</span></a> 
                        </li>
                    </ul>
                </nav>
            </ul>
        </nav>
    </div>
    <!-- container -->
</div>
</header>
