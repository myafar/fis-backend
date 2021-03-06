@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="row">
        <div class="col col-lg-1">
          <span><strong>ID</strong></span>
        </div>
        <div class="col col-lg-3">
          <span><strong>NAME</strong></span>
        </div>
        <div class="col col-lg-3">
          <span><strong>EMAIL</strong></span>
        </div>
        <div class="col col-lg-4">
          <span><strong>ROLE</strong></span>
          <div class="row">
            <div class="col col-lg-1">
              A
            </div>
            <div class="col col-lg-1">
              P
            </div>
            <div class="col col-lg-1">
              AD
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      </div>
      @foreach ($users as $key => $user)
        <div class="row">
          <div class="col col-lg-1">
            <span>{{$user->id}}</span>
          </div>
          <div class="col col-lg-3">
            <span>{{$user->name}}</span>
          </div>
          <div class="col col-lg-3">
            <span>{{$user->email}}</span>
          </div>
          <div class="col col-lg-2">
            {!! Form::model($entity, array('route' => array('users.update', $user->id),  'method' => 'PUT') )!!}
              <div class="col col-lg-1">
                {!! Form::radio('role[]', 2, $user->hasRole('authenticated')) !!}
              </div>
              <div class="col col-lg-1">
                {!! Form::radio('role[]', 3, $user->hasRole('provider')) !!}
              </div>
              <div class="col col-lg-1">
                {!! Form::radio('role[]', 1, $user->hasRole('admin')) !!}
              </div>
              <div class="col col-lg-1">
                <button type="submit" name="save" class="btn btn-success">save</button>
              </div>
            {!! Form::close() !!}
          </div>

          <div class="col col-lg-1">
            <a href="{{ route('users.destroy', ['user' => $user->id]) }}" class="btn btn-info">show</a>
          </div>
          <div class="col col-lg-1">
            {!! Form::model($entity, array('route' => array('users.destroy', $user->id),  'method' => 'DELETE') )!!}
              <button type="submit" name="delete" class="btn btn-danger">delete</button>
            {!! Form::close() !!}
          </div>
        </div>
      @endforeach

    </div>
</div>

@endsection
