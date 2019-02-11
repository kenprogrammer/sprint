<li class="dropdown user user-menu">
<!-- Menu Toggle Button -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <!-- The user image in the navbar-->
    <img src="{{ asset('img/no_image.jpg') }}" class="user-image" alt="User Image">
    <!-- hidden-xs hides the username on small devices so only the image appears. -->
    <span class="hidden-xs">{{ Auth::user()->name }}</span>
</a>
<ul class="dropdown-menu">
    <!-- The user image in the menu -->
    <li class="user-header">
    <img src="{{ asset('img/no_image.jpg') }}" class="img-circle" alt="User Image">

    <p>
        {{ Auth::user()->name }} - Admin
        <small>Member since Sep. 2018</small>
    </p>
    </li>
    <!-- Menu Body -->
    <li class="user-body">
    <div class="row">
        <div class="col-xs-4 text-center">
        <a href="#">Followers</a>
        </div>
        <div class="col-xs-4 text-center">
        <a href="#">Sales</a>
        </div>
        <div class="col-xs-4 text-center">
        <a href="#">Friends</a>
        </div>
    </div>
    <!-- /.row -->
    </li>
    <!-- Menu Footer-->
    <li class="user-footer">
    <div class="pull-left">
        <a href="#" class="btn btn-default btn-flat">Profile</a>
    </div>
    <div class="pull-right">
        <a href="{{ route('logout') }}" class="btn btn-default btn-flat"  
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    </div>
    </li>
</ul>
</li>