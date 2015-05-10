<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li @if(Route::getCurrentRoute()->getName() == 'adminHome') class="active" @endif>
                    <a href="{{ URL::route('adminHome') }}">Sākums</a>
                </li>
                <li @if(Route::getCurrentRoute()->getName() == 'adminImages') class="active" @endif>
                    <a href="{{ URL::route('adminImages') }}">Foto</a>
                </li>
                <li @if(Route::getCurrentRoute()->getName() == 'adminComments') class="active" @endif>
                    <a href="{{ URL::route('adminComments') }}">Komentāri</span></a>
                </li>
                <li @if(Route::getCurrentRoute()->getName() == 'adminSections') class="active" @endif>
                    <a href="{{ URL::route('adminSections') }}">Sadaļas</span></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown @if(Route::getCurrentRoute()->getName() == 'adminProfile') active @endif">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ URL::route('adminProfile') }}">Profils</a></li>
                        <li><a href="#">Iziet</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>