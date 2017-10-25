
<div class="header_resize">
    <div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="#">
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
          </span>
            <input name="button_search" src="{{asset('front/')}}/images/search.gif" class="button_search" type="image" />
        </form>
    </div>
    <div class="logo">
        <h1><a href="{{url('/')}}">My-<span>Blog</span> <small>Amarblog.com.bd</small></a></h1>
    </div>
    <div class="clr"></div>
    <div class="menu_nav">
        <ul>
            <li class="active"><a href="{{url('/')}}"><span>Home Page</span></a></li>
            <li><a href="{{url('/about')}}"><span>About Us</span></a></li>
            <li><a href="{{url('/support')}}"><span>Support</span></a></li>
            @if($customerId = Session::get('customerId'))
            <li><a href="{{url('/logout')}}"><span>Logout</span></a></li>
            @else
            <li><a href="{{url('/user-login')}}"><span>Login</span></a></li>
            <li><a href="{{url('/customer-registration')}}"><span>Registration</span></a></li>
            @endif
            <li><a href="{{url('/contact')}}"><span>Contact Us</span></a></li>
        </ul>
    </div>
    <div class="clr"></div>
    <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="{{asset('front/')}}/images/slide1.jpg" width="920" height="360" alt="" /><span><big>Education gives sweet fruit even after being bitter in taste itself.</big><br />
         This is My First Blog Site.Where Visitor Can Know Some Important information or articles.</span></a> <a href="#"><img src="{{asset('front/')}}/images/slide2.jpg" width="920" height="360" alt="" /><span><big>Being involved in education dedicatedly is a good meditation for years.</big><br />
          This is My First Blog Site.Where Visitor Can Know Some Important information or articles.</span></a> <a href="#"><img src="{{asset('front/')}}/images/slide3.jpg" width="920" height="360" alt="" /><span><big>Education fills the empty mind with good things.</big><br />
         This is My First Blog Site.Where Visitor Can Know Some Important information or articles.Education changes your bad today into good tomorrow.</span></a> </div>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>
</div>
    