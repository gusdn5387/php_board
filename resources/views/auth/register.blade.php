@extends('master')

@section('style')
<style>
    .form-error {font-size:10px; color:red;}
</style>
@stop
@section('content')
    <form action="/auth/register" method="post">
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
                <td>비밀번호 확인</td>
                <td><input type="password" name="password_confirmation" autofocus></td>
            </tr>
            <tr>
                <td></td>
                <td>{!! $errors->first('password_confirmation', '<span class="form-error">:message</span>') !!}</td>
            </tr>
            <tr>
                <td>이름</td>
                <td><input type="text" name="name" autofocus></td>
            </tr>   
            <tr>
                <td></td>
                <td>{!! $errors->first('name', '<span class="form-error">:message</span>') !!}</td>
            </tr>
        </table>
            <input type="submit" value="회원가입"/>
    </form>
@stop