@component('mail::message')
# Сообщение формы обратной связи
### Email: [{{ $email }}](mailto:{{ $email }})

@if ($phone)
### Телефон: {{ $phone }}
@endif

## Сообщение:
@component('mail::panel')
{{ $text }}
@endcomponent

@component('mail::button', ['url' => 'mailto:'.$email])
Ответить
@endcomponent

@endcomponent
