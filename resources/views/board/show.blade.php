@extends('master')

@section('content')
        @if($board) 
        <table>
            <tr>
                <td>이름(ID)</td>
                <td>김OO({{$board->no}}) / </td>
                <td>작성일</td>
                <td>{{$board->created_at}}</td>
            </tr>
            <tr>
                <td>제목</td>
                <td colspan="3">{{$board->title}}</td>
            </tr>
            <tr>
                <td>내용</td>
                <td colspan="3">{{$board->text}}</td>
            </tr>  
        </table>
        <div class="text-center">
    <form action="{{ route('board.destroy', $board->id) }}" method="post">
      {!! csrf_field() !!}
      {!! method_field('DELETE') !!}
      <button type="submit" class="btn btn-danger">삭제</button>
      <a href="{{route('board.edit', $board->id)}}" class="btn btn-info">수정</a>
    </form>
  </div>
        @endif
@stop
