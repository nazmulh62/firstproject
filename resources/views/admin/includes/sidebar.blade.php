<aside class="main-sidebar hidden-print">

    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="{{asset('/admin')}}/images/user.png" alt="User Image"></div>
            <div class="pull-left info">
                <p>NAZMUL HASAN</p>
                <p class="designation">Frontend Developer</p>
            </div>
        </div>
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="active"><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Category Module</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/category/add')}}"><i class="fa fa-circle-o"></i>Add Category</a></li>
                    <li><a href="{{ url('/category/manage-category') }}"><i class="fa fa-circle-o"></i> Manage Category</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Blog Module</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/blog/add')}}"><i class="fa fa-circle-o"></i>Add Blog</a></li>
                    <li><a href="{{url('/blog/manage-blog')}}"><i class="fa fa-circle-o"></i> Manage Blog</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Comment Module</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/comment/manage-comment') }}"><i class="fa fa-circle-o"></i> Manage Blog</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="form-components.html"><i class="fa fa-circle-o"></i> Form Components</a></li>
                    <li><a href="form-custom.html"><i class="fa fa-circle-o"></i> Custom Components</a></li>
                    <li><a href="form-samples.html"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                    <li><a href="form-notifications.html"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="table-basic.html"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
                    <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Data Tables</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="page-login.html"><i class="fa fa-circle-o"></i> Login Page</a></li>
                    <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
                    <li><a href="page-user.html"><i class="fa fa-circle-o"></i> User Page</a></li>
                    <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
                    <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
                    <li><a href="page-mailbox.html"><i class="fa fa-circle-o"></i> Mailbox</a></li>
                    <li><a href="page-error.html"><i class="fa fa-circle-o"></i> Error Page</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Multilevel Menu</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
