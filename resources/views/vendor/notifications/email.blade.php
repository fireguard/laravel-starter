@component('vendor.mail.html.message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# Opss!
@else
# Olá!
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@if (isset($actionText))
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('vendor.mail.html.button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endif

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

<!-- Salutation -->
@if (! empty($salutation))
{{ $salutation }}
@else
Atenciosamente,<br> Equipe {{ config('app.name') }}
@endif

<!-- Subcopy -->
@if (isset($actionText))
@component('vendor.mail.html.subcopy')
Se tiver problemas ao clicar no botão "{{ $actionText }}", copie e cole o URL abaixo no seu navegador:
[{{ $actionUrl }}]({{ $actionUrl }})

<div class="message-alert">
Esta mensagem contém informações que podem ser confidenciais e/ou que podem ser privilegiadas. Destina-se ao
destinatário designado; Você não pode copiá-la ou usá-la, ou divulgá-la a mais ninguém. Se você recebeu esta
transmissão por engano, entre em contato com o remetente e exclua o e-mail do seu sistema. Obrigado pela sua cooperação.
<br/><br/>
This transmission contains information which may be confidential and/or which may be privileged. It is intended for the
named addressee; you may not copy or use it, or disclose it to anyone else. If you have received this transmission in
error, please contact the sender and delete the email from your system. Thank you for your co-operation.
</div>

@endcomponent
@endif
@endcomponent
