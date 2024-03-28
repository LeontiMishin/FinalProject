@extends('layouts.app')
@section('content')
<title>Main</title>

<div class="card" style="width: 18rem;">
<table class="table">
  <tbody>
    <tr>
      <th scope="row">Парковочные места:</th>
      <td>25</td>
    </tr>
    <tr>
      <th scope="row">Свободно:</th>
      <td>16</td>
    </tr>
    <tr>
      <th scope="row">Занято:</th>
      <td colspan="2">9</td>
    </tr>
  </tbody>
</table>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 64%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">64%</div>
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 36%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">36%</div>
</div>
</div>

@endsection
