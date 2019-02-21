        @extends('layouts.app')
        @section('title', 'Contact')
        @section('navbar')
            @parent
            <p>This is appended to the master sidebar.</p>
        @endsection
        @section('content')
            <div class="content">
                <div class="title m-b-md">
                    Contact
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        @endsection
