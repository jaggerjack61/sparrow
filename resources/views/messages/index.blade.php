@extends('layouts.base')

@section('content')

    <livewire:message-table />

    <script>
        function viewMessage(id, name, email, subject, message) {
            document.getElementById('view_name').textContent = name.replace(/\\`/g, '`');
            document.getElementById('view_email').textContent = email.replace(/\\`/g, '`');
            document.getElementById('view_subject').textContent = subject.replace(/\\`/g, '`');
            document.getElementById('view_message').textContent = message.replace(/\\`/g, '`');

        }

    </script>
@endsection
