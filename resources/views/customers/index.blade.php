@extends('layouts.app')

@section('content')
<div class="page-head"><div><p class="eyebrow">Customer records</p><h1>Customers</h1></div><p class="count">{{ $customers->count() }} records // database online</p></div>
<div class="table-wrap"><table><thead><tr><th>#</th><th>Full name</th><th>Email</th><th>Phone</th></tr></thead><tbody>
@forelse ($customers as $customer)
<tr><td class="id">#{{ $customer->id }}</td><td>{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone }}</td></tr>
@empty
<tr><td colspan="4">No customers found.</td></tr>
@endforelse
</tbody></table></div>
@endsection
