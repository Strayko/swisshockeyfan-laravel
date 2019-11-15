<ul>
    <li><a href="{{ route('user.edit', ['id' => Auth::id()]) }}">{{ __('Profile') }}</a></li>
    <li><a href="{{ route('user.predictions', ['id' => Auth::id()]) }}">{{ __('Predictions') }}</a></li>
    <li><a href="{{ route('tip-group.index') }}">{{ __('Tip Groups') }}</a></li>
    <li><a href="{{ route('user.rang-list') }}">{{ __('Rang List') }}</a></li>
    <li><a href="{{ route('user.tip-group-list') }}">{{ __('Tip Group Rang List') }}</a></li>
    <li><a href="{{ route('user.tip-group-user-list') }}">{{ __('Individual Tip Group Rang List') }}</a></li>
    @if(Auth::user()->isAdmin())
        <li><a href="{{ route('adding-match.index') }}">{{ __('Add Match') }}</a></li>
        <li><a href="{{ route('match.index') }}">{{ __('Add Result') }}</a></li>
    @endif
</ul>

