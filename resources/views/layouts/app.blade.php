@include('../componant/header')
    <div id="app">
    @include('flash-message')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@include('/componant/footer')
