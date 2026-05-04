@extends('layouts.admin')

@section('content')

<div class="card shadow-sm border-0">
    <div class="card-body">

        <h4>{{ $message->name }}</h4>
        <p class="text-muted">{{ $message->email }}</p>

        <hr>

        <p>{{ $message->message }}</p>

        <a href="{{ route('messages.index') }}" class="btn btn-secondary mt-3">
            Back
        </a>

    </div>
</div>

@endsection