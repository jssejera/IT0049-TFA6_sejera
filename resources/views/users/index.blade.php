@extends('layouts.app')

@section('content')
<div class="page-head"><div><p class="eyebrow">POS user records</p><h1>Users</h1></div><p class="count">{{ $users->count() }} records // database online</p></div>
<div class="table-wrap"><table><thead><tr><th>#</th><th>Username</th><th>Full name</th></tr></thead><tbody>
@forelse ($users as $user)
<tr><td class="id">#{{ $user->id }}</td><td>{{ $user->username }}</td><td>{{ $user->full_name }}</td></tr>
@empty
<tr><td colspan="3">No users found.</td></tr>
@endforelse
</tbody></table></div>
@endsection
