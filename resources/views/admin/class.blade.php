@extends('admin.master')

@section('title', 'Class page')

@section('content')
  <table>
    <thead>
      <th>ID</th>
      <th>NAME</th>
      <th>MAJOD</th>
    </thead>
    <tbody>
      <tr>
        <td>{{$classes[0]['name']}}</td>
      </tr>
    </tbody>
  </table>
  @include('admin.class_detail')
@endsection