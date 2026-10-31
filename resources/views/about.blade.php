@extends('layouts.app')

@section('content')
<p class="eyebrow">System information</p>
<h1>From Arrays<br><span style="color:var(--cyan)">to Eloquent</span></h1>
<p>This project demonstrates the Laravel data layer required by IT0049 TFA6. Migrations define the database structure, the seeder adds repeatable sample data, models represent the tables, controllers retrieve records, and Blade views display the results safely.</p>
<div class="cards"><div class="card"><h2>01 // Schema</h2><p>Customers: full name, email, and phone. Users: unique username and full name.</p></div><div class="card"><h2>02 // ORM</h2><p>Controllers use Eloquent models instead of static arrays or raw SQL queries.</p></div></div>
@endsection
