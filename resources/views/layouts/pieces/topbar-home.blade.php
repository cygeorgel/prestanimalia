<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">

                <img src="{{ asset('img/logo.jpg') }}">

            </a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                @guest
<?php
                // I desactivate this for now
                // we are not ready for registration and dashboard
//                <li>
//                    <a href="{{ route('register') }}">
//                        <i class="material-icons">person_add</i>
//                        S'inscrire
//                    </a>
//                </li>
//                <li>
//                    <a href="{{ route('login') }}">
//                        <i class="material-icons">person_outline</i>
//                        Se connecter
//                    </a>
//                </li>
?>
                @else
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="material-icons">person</i>
                        {{ auth()->user()->nickname }} <span class="caret hidden-sm hidden-xs"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('dashboard') }}">
                                Dashboard
                                <i class="material-icons pull-right">dashboard</i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                                <i class="material-icons pull-right">input</i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest

                <li>
                    <a href="/centre-formation" class="btn btn-simple btn-white ">
                            Le centre de formation
                    </a>
                </li>


                <li>
                    <a href="https://www.facebook.com/tpformateur/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
<?php
//                <li>
//                    <a href="https://www.instagram.com/#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
//                        <i class="fa fa-instagram"></i>
//                    </a>
//                </li>
//                <li>
//                    <a href="https://twitter.com/#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
//                        <i class="fa fa-twitter"></i>
//                    </a>
//                </li>
?>
            </ul>
        </div>
    </div>
</nav>
