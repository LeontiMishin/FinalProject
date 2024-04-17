@extends('layouts.app')
@section('content')
<title>Auto</title>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Test</th>
      <th scope="col">Test1</th>
      <th scope="col">Test2</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<a class="nav-link h2 text-black" aria-current="page" href="/login">Logi sisse</a>

<div class="progress-circle">
  <div class="progress-circle-inner" data-content="75%"></div>
</div>
@endsection
