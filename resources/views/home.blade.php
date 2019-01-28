@extends('layouts.app')


@section('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis incidunt placeat voluptas asperiores impedit ipsam tempore voluptatum, quae quo nulla fuga similique, debitis modi nesciunt blanditiis ex provident tempora corporis!</p>

@endsection

@section('sidebar')
    @parent
<p>This is appended to a sidebar</p>
@endsection