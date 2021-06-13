<!--Header-->
<header>
    <div class="container">
        <div class="img">
            <img src="{{ asset('img/dc-logo.png')}}" alt="Logo DC">
        </div>
        <nav class="menu">
            <ul> 
                <li><a class="@if (request()->route()->getName() == 'home') {{ 'active'}}
                @endif"
                href="{{ route('home') }}">Comics</a></li>


                <li><a class="@if (request()->route()->getName() == 'news') {{ 'active'}}
                    @endif"
                href="{{ route('news') }}">News</a></li>

    
            </ul>
        </nav>
    </div>
</header>