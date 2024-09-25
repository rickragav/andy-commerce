<div class="col-lg-3">
    <ul class="my-account-nav">
        <li><a href="{{route('vendor.dashboard')}}" class="my-account-nav-item {{ Request::is('vendo/dashboard') ? 'active' : '' }}" >Dashboard</a></li>
        <li><a href="my-account-orders.html" class="my-account-nav-item">Orders</a></li>
        <li><a href="my-account-address.html" class="my-account-nav-item">Addresses</a></li>
        <li><a href="{{route('vendor.profile')}}" class="my-account-nav-item {{ Request::is('vendor/profile') ? 'active' : '' }}">Account Details</a></li>
        <li><a href="my-account-wishlist.html" class="my-account-nav-item">Wishlist</a></li>


        <li>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="my-account-nav-item" onclick="event.preventDefault();
                            this.closest('form').submit();"
                    href="{{ route('logout') }}"> Log out</a>
            </form>
        </li>
    </ul>
</div>
