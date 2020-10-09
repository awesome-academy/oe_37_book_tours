<!DOCTYPE html>
<html>
@include('book_tour/layout/head')
    <body>
        <!-- navbar-->
        <header class="header mb-5">
        @include('book_tour/layout/top')
        @include('book_tour/layout/menu')

        </header>
        @section('content')
        @show

        @include('book_tour/layout/footer')
        @include('book_tour/layout/js')
    </body>
</html>
