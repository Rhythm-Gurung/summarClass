@extends('master')

@section('content')
<main>
  <h2>Welcome!</h2>
  <p>Here is your dashboard overview.</p>

  <div class="cards">
    <div class="card">
      <h3>Total Users</h3>
      <p>1,234</p>
    </div>
    <div class="card">
      <h3>Revenue</h3>
      <p>$12,345</p>
    </div>
    <div class="card">
      <h3>New Orders</h3>
      <p>56</p>
    </div>
    <div class="card">
      <h3>Pending Tasks</h3>
      <p>7</p>
    </div>
  </div>
</main>

@endsection