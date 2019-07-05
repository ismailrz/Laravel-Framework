@extends('master')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Mobile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; ?>
      <?php foreach ($student as $value): ?>
        <tr>
          <th scope="row">{{$i++}}</th>
        <td>{{$value->fname}}</td>
        <td>{{$value->lname}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->password}}</td>
        <td>{{$value->mobile}}</td>
        <td>
          <a href="{{ Route('edit',$value->id)}}" class="btn btn-success">Edit</a>
        </td>
        <td>
          <a href="{{ Route('delete',$value->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>

  </tbody>
</table>

@endsection
