@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Classes</h2>
    <a href="{{ route('classes.create') }}" class="btn btn-primary">+ Add Class</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Code</th>
                    <th>Title</th>
                    <th>Cost</th>
                    <th>Schedule</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($classes as $class)
                    <tr>
                        <td>
                            <span class="badge bg-dark">
                                {{ $class->code }}
                            </span>
                        </td>

                        <td>{{ $class->title }}</td>

                        <td>
                            {{ $class->cost }}
                        </td>

                        <td>
                            {{ $class->schedule ?? 'TBA' }}
                        </td>

                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('classes.edit', $class->id) }}"
                                   class="btn btn-sm btn-outline-primary">
                                    Edit
                                </a>

                                <form action="{{ route('classes.destroy', $class->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this class?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">
                            No classes found
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>
</div>

@endsection