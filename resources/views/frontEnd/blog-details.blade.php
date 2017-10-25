@extends('frontEnd.master')

@section('title')
    Bolg Details
@endsection
@section('content')
    <div class="content">
        <div class="content_resize">
            <div class="mainbar">
                <div class="article">
                    <h2>{{ $blogById->blog_title }}</h2>
                    <div class="clr"></div>
                    <p>Posted by <a href="#">{{ $blogById->author_name }}</a></p>
                    <img src="{{ asset($blogById->blog_image) }}" width="450" height="250" alt="" class="fl" />
                    <p>{{ $blogById->blog_short_description }}</p>
                    <p>{{ $blogById->blog_long_description }}</p>
                    <p><a href="#"><strong>Comments (3)</strong></a> <span>&nbsp;&bull;&nbsp;</span> {{ $blogById->created_at }} <span>&nbsp;&bull;&nbsp;</span> <a href="#"><strong>Edit</strong></a></p>
                    </div>
                <div class="clr"></div>

                @foreach($allPublishedComments as $allPublishedComment)

                <div class="article">
                    <h2><span>3</span> Responses</h2>
                    <div class="clr"></div>
                    <div class="comment"> <a href="#"><img src="{{asset('front/')}}/images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
                        <p><a href="#">{{ $allPublishedComment->fullName }}</a> Says:<br />
                            {{ $allPublishedComment->created_at }}</p>

                        <p>{{ $allPublishedComment->customer_comment }}</p>


                    </div>

                </div>

                @endforeach

                <div class="clr"></div>

                <div class="article">
                    <h2><span>Leave a</span> Reply</h2>
                    @if($customerId = Session::get('customerId'))
                        <div class="clr"></div>

                        <form action="{{ url('/new-comment') }}" method="post">
                            {{ csrf_field() }}
                        <ol>
                            <li>
                                <input type="hidden" name="customer_id" value="{{$customerID = Session::get('customerId')}}"/>
                            </li>

                           <li>
                                <label for="message">Your Message</label>
                                <textarea name="customer_comment" value="replay" rows="8" cols="50"></textarea>
                            </li>
                            <li>
                                <input type="hidden" name="publication_status" value="0">

                            </li>
                            <br/>
                            <li>
                                <input type="submit" name="btn" value="Submit" style="background:#000000;color:white"/>
                            </li>
                        </ol>
                    </form>
                        @else
                        <div class="clr"></div>
                        <h2>Please Login To Comments......</h2>
                        <a href="{{ url('/user-login') }}">Login Here</a>
                        @endif
                </div>
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
    </div>

@endsection