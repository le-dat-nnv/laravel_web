@extends('layout_admin.index')
@section('content')
<h1>tôi đang test kế thừa</h1>
<form action="{{URL::to('/save-module')}}" method="post">
    {{ csrf_field() }}
    {{ $controller->form('name_module'); }}
    {{ $controller->form('name_short'); }}
    {{ $controller->form('summary'); }}
    <input type="submit" value="thêm"/>
</form>
@endsection