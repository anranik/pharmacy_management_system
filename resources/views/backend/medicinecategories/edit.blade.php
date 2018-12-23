@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.medicinecategories.management') . ' | ' . trans('labels.backend.medicinecategories.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.medicinecategories.management') }}
        <small>{{ trans('labels.backend.medicinecategories.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($medicinecategories, ['route' => ['admin.medicinecategories.update', $medicinecategories], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-medicinecategory']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.medicinecategories.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.medicinecategories.partials.medicinecategories-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.medicinecategories.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.medicinecategories.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
