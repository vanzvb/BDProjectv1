@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit user {{ $user->name }}</div>

                        <div class="card-body">
                            <form action="{{ route('users.update', $user) }}" method="POST">
                                @csrf
                                {{ method_field('PUT') }}
                                {{-- $roles from usercontroller --}}
                                @foreach ($roles as $role)
                                    <div class="form-check">
                                        <input type="checkbox" name="role[]" value="{{ $role->id }}">
                                        <label>{{ $role->name }}</label>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
