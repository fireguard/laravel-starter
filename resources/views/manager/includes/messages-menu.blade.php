<!-- Messages: style can be found in dropdown.less-->
<li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-envelope-o"></i>
        <span class="label label-success">1</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have 1 messages</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <li><!-- start message -->
                    <a href="#">
                        <div class="pull-left">
                            <img src="{{ Auth::user()->avatar }}" class="img-circle bg-active" alt="User Image">
                        </div>
                        <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <!-- end message -->
            </ul>
        </li>
        <li class="footer"><a href="#">See All Messages</a></li>
    </ul>
</li>
