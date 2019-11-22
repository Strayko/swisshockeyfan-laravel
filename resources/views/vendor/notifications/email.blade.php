@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hallo!')
@endif
@endif

{{-- Intro Lines --}}
<p>Bitte klicken Sie auf die Schaltfläche unten, um Ihre E-Mail-Adresse zu bestätigen.</p>

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
    Email Adresse bestätigen
@endcomponent
@endisset

{{-- Outro Lines --}}
<p>Wenn Sie kein Konto erstellt haben, ist keine weitere Aktion erforderlich.</p>

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Grüße'),<br>
die-werber.ch
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Wenn Sie Probleme haben, klicken Sie auf \":actionText\" Klicken Sie auf, kopieren Sie die unten stehende URL und fügen Sie sie ein\n".
    'in Ihren Webbrowser: [:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl,
    ]
)
@endslot
@endisset
@endcomponent
