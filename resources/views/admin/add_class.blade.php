@extends('admin.master')

@section('title', 'Create New Class')

@section('content')
  @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </div>
  @endif
  <form action="{{route('classes.create-post')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input 
        type="text"
        id="name"
        class="form-control"
        name="name"
      />
    </div>
    <div class="form-group">
      <label for="teacher_name">Teacher Name</label>
      <input 
        type="text" 
        id="teacher_name"
        class="form-control"
        name="teacher_name"
      />
    </div>
    <div class="form-group">
      <select name="major" class="form-control">
        <option value="Cong nghe thong tin">Cong nghe thong tin</option>
        <option value="Da phuong tien">Da phuong tien</option>
        <option value="Marketing">Marketing</option>
        <option value="Ung dung">Ung dung</option>
      </select>
    </div>
    <div class="form-group">
      <label for="max_student">Max Student</label>
      <input 
        type="number" 
        id="max_student"
        class="form-control"
        name="max_student"
      />
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
@endsection