@include('home.layout.header')
@include('home.layout.top')
<div class="container">
    <div class="">
        <ul class="bread">
            <h4>
                <li><a href="#" class="icon-home"> 首页</a> </li>
                <li><a href="#">@yield('title')</li></a>
            </h4>
        </ul>
    </div>
    <div class="line-big">
        @yield('body')
        @include('home.layout.right')
    </div>
</div>
@include('home.layout.footer')