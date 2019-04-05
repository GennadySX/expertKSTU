@include('dashboard.header')
@yield('header')
    <main class="py-4">
        @yield('section')
    </main>
@include('dashboard.footer')
@yield('footer')