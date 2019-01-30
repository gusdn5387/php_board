@extends('master')

@section('content')
    <form action="/auth/register" method="post">
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
                <td>비밀번호 확인</td>
                <td><input type="password" name="password_confirmation"></td>
            </tr>
            <tr>
                <td>이름</td>
                <td><input type="text" name="name"></td>
            </tr>   
        </table>
            <input type="submit" value="회원가입"/>
    </form>
@stop