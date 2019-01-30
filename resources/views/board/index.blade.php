@extends('master')

@section('content')
    <!-- <table border="1">
        @forelse($boards as $board)
        <tr>
            <td>{{$board->no}}</td>
            <td>{{$board->title}}</td>
            <td>{{$board->uid}}</td>
            <td>{{$board->created_at}}</td>
        </tr>
        @empty
        <tr>
            <td><p class="text-center text-danger">{{ trans('errors.not_found_description') }}</p></td>
        </tr>
        @endforelse
    </table> -->
    <input type="button" onclick='location.href="/board/create"' value="작성"/>
@stop