@extends('master')

@section('content')
    <form action="/newUser" method="post">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>이름</td>
                <td><input type="text" name="name"></td>
            </tr>   
        </table>
            <input type="submit" value="회원가입"/>
    </form>
@stop