<x-mail::message>
# Nova avaliação

Você recebeu uma nova avaliação

<x-mail::button :url="''">
Clique aqui e confira
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
