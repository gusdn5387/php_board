@extends('master')

@section('style')
<style>
    .form-error {font-size:10px; color:red;}
</style>
@stop

@section('content')
    <form action="/auth/login" method="post">
    {!! csrf_field() !!}
        <table>
            <tr>
                <td>이메일</td>
                <td><input type="text" name="email" autofocus></td>
            </tr>
            <tr>
                <td></td>
                <td>{!! $errors->first('email', '<span class="form-error">:message</span>') !!}</td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="password" autofocus></td>
            </tr>
            <tr>
                <td></td>
                <td>{!! $errors->first('password', '<span class="form-error">:message</span>') !!}</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="remember" value="{{ old('remember', 1) }}">정보 기억하기</td> 
            </tr>
        </table>
            <input type="submit" value="로그인"/>
    </form>
@stop