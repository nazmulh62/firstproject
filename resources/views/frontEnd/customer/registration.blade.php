@extends('frontEnd.master')
@section('title')
    Registration
@endsection
@section('content')

    <div class="content">
        <div class="content_resize">
            <div class="mainbar">
                <!--customer login Form here-->
                <div class="article">
                    <h2><span>Customer Registration</span> Here</h2>
                    <div class="clr"></div>
                    <form action="{{ url('/customer-registration') }}" method="post">
                        {{ csrf_field() }}
                        <ol>
                            <li>
                                <label for="email">Name (required)</label>
                                <input type="text" id="name" name="fullName" class="text" />
                            </li>

                            <li>
                                <label for="email">Email Address (required)</label>
                                <input type="text" id="email" name="email" class="text" />
                            </li>

                            <li>
                                <label for="name">Password (required)</label>
                                <input type="password" id="password" name="password" class="text" />
                            </li>
                            <li>
                                <label for="name">Image (required)</label>
                                <input type="file" name="customer_image" accept="image/*" />
                            </li>
                            <br>
                            <li>
                                <input type="submit" name="btn" id="imageField" src="images/submit.gif" value="Registration" style="background:#000000;color:white"/>
                                <div class="clr"></div>
                            </li>
                        </ol>
                    </form>
                </div>

                <!--customer login Form End here-->


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