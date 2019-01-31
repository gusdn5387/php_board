@extends('master')

@section('content')
    <form action="/board/store" method="post">
    {!! csrf_field() !!}
        <table>
            <tr>
                <td>제목</td>
                <td><input type="text" name="title" style="width:100%"></td>
            </tr>
            <tr>
                <td></td>
                <td>{!! $errors->first('title', '<span class="form-error">:message</span>') !!}</td>
            </tr>
            <tr>
                <td>내용</td>
                <td><textarea rows="8" cols="30" name="content"></textarea></td>
            </tr> 
            <tr>
                <td></td>
                <td>{!! $errors->first('content', '<span class="form-error">:message</span>') !!}</td>
            </tr> 
        </table>
            <input type="submit" value="작성"/>
    </form>
@stop