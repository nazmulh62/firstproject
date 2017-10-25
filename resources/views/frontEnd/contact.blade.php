@extends('frontEnd.master')
@section('title')
    contact
@endsection
@section('content')

    <div class="content">
    <div class="content_resize">
        <div class="mainbar">
            <div class="article">
                <h2><span>Contact</span></h2>
                <div class="clr"></div>
                <p>Nullapede laorem velit curabitudin enim in nibh ero leo in pede. Semperpurus nibh elit et convallis eu trices congue males monterdum elit.</p>
            </div>
            <div class="article">
                <h2><span>Send us</span> mail</h2>
                <div class="clr"></div>
                <form action="#" method="post" id="sendemail">
                    <ol>
                        <li>
                            <label for="name">Name (required)</label>
                            <input id="name" name="name" class="text" />
                        </li>
                        <li>
                            <label for="email">Email Address (required)</label>
                            <input id="email" name="email" class="text" />
                        </li>
                        <li>
                            <label for="website">Website</label>
                            <input id="website" name="website" class="text" />
                        </li>
                        <li>
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" rows="8" cols="50"></textarea>
                        </li>
                        <li>
                            <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                            <div class="clr"></div>
                        </li>
                    </ol>
                </form>
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

@endsection