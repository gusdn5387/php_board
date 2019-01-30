<ul>
    @if(! auth()->check())
    <li><a href="/auth/login">로그인</a></li>
    <li><a href="/auth/register">회원가입</a></li>
    @else
    <li>박현우님</li>
    <li><a href="/auth/logout">로그아웃</a></li>
    @endif
    <li><a href="/list">게시판</a></li>
</ul>