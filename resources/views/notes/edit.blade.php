{{-- edit note blade --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Note</h1>
                <form method="POST" action="{{ route('notes.update', $note) }}">
                    @csrf
                    @method('PUT')
                    <!-- Title and description fields -->
                    <button type="submit">Update Note</button>
                </form>
            </div>
        </div>
    </div>
@endsection
