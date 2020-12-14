<div class="links">
    <a href="/">Home</a>
    @if (Auth::check() && Auth::user()->level == 'admin')
    <a href="/goals">Goals</a>
    @endif
    <a href="/quotes">Quotes</a>
    <a href="/about">About</a>
    <a href="/help">Help</a>
</div>
