@extends('layouts.app')
@section('content')
<title>Avaleht</title>

<div class="card" style="width: 18rem;">
<table class="table">
  <tbody>
    <tr class="text-center">
      <th scope="row">Всего: 12</th>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Свободно:</th>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">Занято:</th>
      <td colspan="2">7</td>
    </tr>
  </tbody>
</table>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">64%</div>
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">36%</div>
</div>
</div>

@endsection
