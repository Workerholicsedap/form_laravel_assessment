<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow">
                <div class="card-header bg-primary text-white fw-bold">
                    Create New Member
                </div>

                <div class="card-body">
                    {{-- Success Message --}}
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('member.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter full name" value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="example@mail.com" value="{{ old('email') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="********">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                                <option value="Male" {{ old('gender') === 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') === 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Birthday</label>
                            <input type="date" name="birthday" class="form-control" value="{{ old('birthday') }}">
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" name="status_active" id="status_active" {{ old('status_active') ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_active">
                                Status Active
                            </label>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('member.table') }}" class="btn btn-outline-secondary">
                                ← Back to Table
                            </a>
                            <button type="submit" class="btn btn-success">Create Member</button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="card shadow mt-5">
                <div class="card-header bg-success text-white fw-bold">
                    Create New Player
                </div>

                <div class="card-body">
                    {{-- Success Message for Player --}}
                    @if(session('player_success'))
                        <div class="alert alert-success">{{ session('player_success') }}</div>
                    @endif

                    {{-- Validation Errors for Player --}}
                    @if ($errors->hasBag('player') && $errors->player->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->player->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('player.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter player name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image URL</label>
                            <input type="text" name="uuid" class="form-control" placeholder="Enter UUID" value="{{ old('uuid') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <input type="text" name="role" class="form-control" placeholder="Enter role" value="{{ old('role') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hobby</label>
                            <input type="text" name="hobby" class="form-control" placeholder="Enter hobby" value="{{ old('hobby') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rank</label>
                            <input type="text" name="rank" class="form-control" placeholder="Enter rank" value="{{ old('rank') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" placeholder="Enter description">{{ old('description') }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <!-- <a href="{{ route('player.table') }}" class="btn btn-outline-secondary">
                                ← Back to Player Table
                            </a> -->
                            <button type="submit" class="btn btn-success">Create Player</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
