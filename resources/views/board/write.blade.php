@extends('master')

@section('content')
    <form action="/writing" method="post">
        <table>
            <tr>
                <td>제목</td>
                <td><input type="text" name="title" style="width:98.5%"></td>
            </tr>
            <tr>
                <td>내용</td>
                <td><textarea rows="8" cols="30" name="content"></textarea></td>
            </tr>   
        </table>
            <input type="submit" value="작성"/>
    </form>
@stop