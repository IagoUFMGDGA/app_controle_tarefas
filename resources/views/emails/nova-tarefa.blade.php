@component('mail::message')
# {{ $tarefa }}

Data Limite de conclusão: {{ $data_limite_conclusao}}

@component('mail::button', ['url' => $url])
Ver tarefa
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
