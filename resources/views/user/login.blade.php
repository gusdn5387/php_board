@extends('master')

@section('content')
    <form action="/getSession" method="post">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="pass"></td>
            </tr>
        </table>
            <input type="submit" value="로그인"/>
    </form>
@stop