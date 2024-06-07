@extends('layout.app')

@section('body')
<body class="g-sidenav-show bg-gray-100">
    @include('layout.component.sidebar')
    <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
      @include('layout.component.navbar')
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        @yield('content')
        @include('layout.component.footer')
      </div>
    </main>
    @include('layout.component.theme')
    @include('layout.skeleton.script')
</body>
@endsection