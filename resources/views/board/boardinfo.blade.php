@extends('master')

@section('content')
        <table>
            <tr>
                <td>이름(ID)</td>
                <td>김OO(kim0000) / </td>
                <td>작성일</td>
                <td>2019-01-30</td>
            </tr>
            <tr>
                <td>제목</td>
                <td colspan="3">김김김</td>
            </tr>
            <tr>
                <td>내용</td>
                <td colspan="3">김치워리어</td>
            </tr>   
        </table>
            <input type="button" onclick='location.href="/update"' value="수정"/>
            <input type="button" onclick='location.href="/delete"' value="삭제"/>
    </form>
@stop