@extends('layouts.app')
@section('title', 'Morpion')
@section('content')

<style>

.board { 
    display: grid; 
    gap: 4px;
    grid-template-columns: repeat(3, 80px); 
}

.case {
    height: 80px; 
    font-size: 2.5em; 
    Width: 80px;
}
</style>

<body>
    <h1>Morpion</h1>
    <div class="board">
        @for ($i=0; $i < 9; $i++)
            @php $case = $board[$i]; @endphp
            <form method="POST" action="/">
                <input type="hidden" name="position" value="{{ $i }}">
                <button class="case {{ $case }}">
                    @if ($case !== '-')
                         {{ $case }}
                    @endif
                </button>
            </form>

        @endfor
    </div>
</body>

@endsection