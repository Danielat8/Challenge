<!DOCTYPE html>
<html lang="en">

<!-- head -->
@include('layouts.head')

<body>
    <!-- navbar -->
    @include('layouts.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    <!-- footer -->
    @include('layouts.footer')

</body>

</html>