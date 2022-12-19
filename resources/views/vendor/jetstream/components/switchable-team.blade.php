@props(['team', 'component' => 'jet-dropdown-link'])

<form method="POST" action="{{ route('current-team.update') }}" x-data>
    @method('PUT')
    @csrf

    <!-- Hidden Team ID -->
    <input type="hidden" name="team_id" value="{{ $team->id }}">

    <x-dynamic-component :component="$component" href="#" x-on:click.prevent="$root.submit();">
        <li>
            {{ $team->name }}
            @if (Auth::user()->isCurrentTeam($team))
            <font color="green"><i class="bi bi-check-circle"></i></font>
            @endif
        </li>
    </x-dynamic-component>
</form>
