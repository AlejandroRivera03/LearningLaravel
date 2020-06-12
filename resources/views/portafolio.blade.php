@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h1>Portafolio</h1>

    @for()
    @endfor

    @while()
    @endwhile

    @switch()

    @foreach()
    @endforeach

    @if()
    @else
    @endif

    @isset()

    <ul>
        @forelse($portfolio as $item)
            <li>{{ $item['title'] }}
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>
@endsection