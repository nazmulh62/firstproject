@extends('frontEnd.master')
@section('title')
Home
@endsection
@section('content')


    <div class="content_resize">
        <div class="mainbar">
            @foreach($allPublishedBlogs as $allPublishedBlog)
            <div class="article">
                <h2>{{ $allPublishedBlog->blog_title }}</h2>
                <p class="infopost">Posted <span class="date">on 29 aug 2016</span> by <a href="#">{{ $allPublishedBlog->author_name }}</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="#" class="com">Comments <span>7</span></a></p>
                <div class="clr"></div>
                <div class="img"><img src="{{ asset($allPublishedBlog->blog_image) }}" width="198" height="188" alt="" class="fl" /></div>
                <div class="post_content">
                    <p>{{ $allPublishedBlog->blog_short_description }}</p>
                    <p>{{ $allPublishedBlog->blog_long_description }}</p>
                    <p class="spec"><a href="{{ url('/blog-details/'.$allPublishedBlog->id) }}" class="rm">&raquo; Read more</a></p>
                </div>
                <div class="clr"></div>
            </div>
            @endforeach
            <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
        </div>
        <div class="sidebar">
            <div class="gadget">
                <h2 class="star"><span>Sidebar</span> Menu</h2>
                <div class="clr"></div>
                <ul class="sb_menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Archives</a></li>
                    <li><a href="#">Software</a></li>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">WebSite Development</a></li>
                </ul>
            </div>
            <div class="gadget">
                <h2 class="star"><span>Sponsors</span></h2>
                <div class="clr"></div>
                <ul class="ex_menu">
                    <li><a href="#">Renove Pharmachutical</a><br />
                         Web Design And Development</li>
                    <li><a href="#">Asia Tech Limited</a><br />
                        Web Design And Development</li>
                    <li><a href="#">i-Nasa.com</a><br />
                       Management Software and Web Apps</li>
                    <li><a href="#">Forlin Fashion Group</a><br />
                        Web Design And Development</li>
                    <li><a href="#">Code-x Group</a><br />
                        Website Builder Software &amp; Tools
                    </li>

                </ul>
            </div>
        </div>
        <div class="clr"></div>
    </div>



@endsection