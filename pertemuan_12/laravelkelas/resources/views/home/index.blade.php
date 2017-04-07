@extends('default')

@section('title')
    Home - Laravel Kelas
@endsection

@section('body')
    <div class="container">
        <h1>LARAVEL KELAS 2 </h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae sed quia a neque aperiam nostrum sint aliquid corporis repudiandae harum. Minus earum sapiente beatae reiciendis eaque, expedita quod maxime accusantium.</p>        
        
        <ul>
            @foreach($students as $student)
                <li>{{ $student }}</li>
            @endforeach
        </ul>

        @for($i = 0; $i < 10; $i++)
            {{ $i }} 
        @endfor

        @include('layouts.partials._footer')
    </div>
@endsection