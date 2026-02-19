<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
    {{ config('app.name') }}
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
    {{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
{{ __('Txwai is a trademark of Txwai Inc with the registered address at') }} <a href="" target="_blank" rel="noopener noreferrer">Provincial House, New Walk, Leicester, United Kingdom, LE1 6TU</a>
<br><br>
© {{ date('Y') }} {{ config('app.name') }} Inc. {{ __('All rights reserved.') }}
<br><br>
<a href="https://txwai.com" target="_blank" rel="noopener noreferrer">www.txwai.com</a> | <a href="mailto:support@txwai.com">support@txwai.com</a>
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
