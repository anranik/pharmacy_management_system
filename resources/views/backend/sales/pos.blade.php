@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.sales.management') . ' | ' . trans('labels.backend.sales.create'))

@section('page-header')
    <h1>
        Point of sales
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.sales.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-sale']) }}

                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.sales.posform")
                </div><!-- form-group -->

    {{ Form::close() }}
@endsection
