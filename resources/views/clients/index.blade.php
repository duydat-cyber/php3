{{-- extends quy dịnh master layout kế thừa --}}
@extends('layouts.client')
{{-- session dung de dinh nghia noi dung cua section --}}

@section('title')
    {{-- hien thi du lieu trong blade --}}
    {{ $title }}
    {{-- Trang chu --}}
@endsection

@section('css')
    {{-- <style>
        .content {
            background-color: blue;
        }
    </style> --}}
    {{-- noi de cac duong dan file css va thu vien css dung chung cho ca trang layout --}}
    {{-- ham asset dung de tro duong dan trong laravel --}}
    <link rel="stylesheet" href="{{ asset('assets/clients/css/index.css') }}">
@endsection


@section('content')
    {{-- <h1>day la trang client</h1> --}}
    <button class="btn btn-success" onclick="oncc()">Submit</button>
    <h1>{{ $content }}</h1>
    {{-- hien thi ma html --}}
    <h1>{!! $text !!}</h1>
    {{-- viet ma php --}}
    @PHP
    $flag = true;
    @ENDPHP


    {{-- vong lap for --}}

    @for ($i = 0; $i <= 10; $i++)
        <p>
            index: {{ $i }}
        </p>
    @endfor

    {{-- forech --}}
    @foreach ($dataArr as $item)
        <p>Phan tu: {{ $item }}</p>
    @endforeach
@endsection

{{-- vong lap forelse --}}

@forelse ($dataArr as $item)
    <p>Phan tu: {{ $item }}</p>
@empty
    <p>kong co pgan tu nao trong mang</p>
@endforelse


{{-- while;if;if-else;if-elseif;switch-case --}}

@if ($dataArr = 1)
    <p>day {{ $dataArr }}</p>
@endif

@section('js')
    <script>
        function oncc() {
            alert('Hlelo!');
        }
    </script>

    {{-- noi de cac duong dan file js va thu vien js dung chung cho ca trang layout --}}
@endsection
