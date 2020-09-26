@extends('layouts.master_panel')

@section('content')
 <vue-progress-bar></vue-progress-bar>
<router-view :AuthUser="{{  Auth::user() }}"></router-view>
@endsection
