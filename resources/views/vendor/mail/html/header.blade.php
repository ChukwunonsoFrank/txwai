@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Txwai')
                <img width="100" src="{{ asset('homeassets/img/txwai.svg') }}" alt="Txwai Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
