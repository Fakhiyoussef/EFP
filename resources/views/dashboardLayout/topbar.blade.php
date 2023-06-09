    <div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>
    <div class="search">
        <form action="{{route('search')}}" method="GET">

            <input type="text" placeholder="Search here" name="search_name"/>
            <ion-icon name="search-outline"></ion-icon>

        <button type="submit" class="btn btn-primary"> Search </button></form>
    </div>
    <div class="dark-user-combu">
        <div class="dark">
            <img src="{{ asset('images/moon.png') }}" class="dark-toggle" data-sun="{{ asset('images/sun.png') }}" data-moon="{{ asset('images/moon.png') }}" />
          </div>
    </div>
      
    <div class="user">
        <img src="{{ asset('images/customer01.jpg') }}" />
    </div>
</div>
