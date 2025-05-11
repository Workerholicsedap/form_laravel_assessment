<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-primary fw-bold">Member Management</h1>

    {{-- Success message --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Validation Errors --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Active Members --}}
    <div class="card shadow mb-5">
        <div class="card-header bg-success text-white fw-semibold">Active Members</div>
        <div class="card-body p-0">
            <table class="table table-hover m-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th><th>Name</th><th>Email</th>
                        <th>Gender</th><th>Birthday</th><th>Created At</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activeMembers as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ ucfirst($user->gender) }}</td>
                            <td>{{ \Carbon\Carbon::parse($user->birthday)->format('d/m/Y') }}</td>
                            <td>{{ $user->created_at->format('d M Y, h:i A') }}</td>
                            <td>
                                <form action="{{ route('member.delete', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Inactive Members --}}
    <div class="card shadow mb-5">
        <div class="card-header bg-secondary text-white fw-semibold">Non-Active Members</div>
        <div class="card-body p-0">
            <table class="table table-hover m-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th><th>Name</th><th>Email</th>
                        <th>Gender</th><th>Birthday</th><th>Created At</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inactiveMembers as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ ucfirst($user->gender) }}</td>
                            <td>{{ \Carbon\Carbon::parse($user->birthday)->format('d/m/Y') }}</td>
                            <td>{{ $user->created_at->format('d M Y, h:i A') }}</td>
                            <td>
                                <form action="{{ route('member.delete', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card shadow mb-5">
        <div class="card-header bg-info text-white fw-semibold">Players</div>
        <div class="card-body p-0">
            <table class="table table-hover m-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>UUID</th>
                        <th>Role</th>
                        <th>Hobby</th>
                        <th>Rank</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $player->name }}</td>
                            <td>{{ $player->uuid }}</td>
                            <td>{{ $player->role }}</td>
                            <td>{{ $player->hobby }}</td>
                            <td>{{ $player->rank }}</td>
                            <td>{{ $player->description }}</td>
                            <td>{{ $player->created_at ? $player->created_at->format('d M Y, h:i A') : '-' }}</td>
                            <td>
                                <form action="{{ route('player.delete', $player->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete player?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-end">
        <a href="{{ route('member.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Add New Member
        </a>
    </div>
</div>

<!-- Bootstrap JS (optional, for future modal/alert use) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
