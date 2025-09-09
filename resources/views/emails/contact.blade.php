<x-mail::message>
# Introduction

The body of your message.

**From:** {{ $first_name }} {{ $last_name }}
**Email:** {{ $email }}

**Subject:** {{ $subject }}
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
