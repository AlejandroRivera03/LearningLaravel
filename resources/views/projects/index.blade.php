@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h1>Portafolio</h1>

    {{-- @for()
    @endfor

    @while()
    @endwhile

    @switch()

    @foreach()
    @endforeach

    @if()
    @else
    @endif

    @isset() --}}

    <ul>
        @forelse($projects as $item)
            <li>
                <a href="{{route('projects.show', $item)}}">{{ $item['title'] }}</a>
                {{-- <br><small>{{ $item['description'] }}</small> --}}
            </li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse

        {{ $projects->links() }}
    </ul>
@endsection