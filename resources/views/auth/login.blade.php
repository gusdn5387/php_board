@extends('master')

@section('content')
    <form action="/auth/login" method="post">
    {!! csrf_field() !!}
        <table>
            <tr>
                <td>이메일</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="remember">정보 기억하기</td> 
            </tr>
        </table>
            <input type="submit" value="로그인"/>
    </form>
@stop