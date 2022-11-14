@extends('layouts.main')

@section('content')
    <div class="container">
        <section>
            <h1>Hello World</h1>
            {{--      Название роута можно посмотреть в /routes/web.php ->name('тут будет адрес на который надо ссылкаться')      --}}
            <a href="{{ route('cpa') }}">Вот так делаются ссылки на другие страницы</a>
        </section>
    </div>
@endsection
