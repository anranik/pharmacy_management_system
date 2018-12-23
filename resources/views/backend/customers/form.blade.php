<div class="box-body">
    <div class="form-group">
        {{ Form::label('name', trans('validation.attributes.backend.customers.name'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.customers.name'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->


    <div class="form-group">
        {{ Form::label('phone', trans('validation.attributes.backend.customers.phone'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('phone', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.customers.phone'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->


    <div class="form-group">
        {{ Form::label('email', trans('validation.attributes.backend.customers.email'), ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('email', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.customers.email')]) }}
        </div><!--col-lg-10-->
    </div><!--form group-->

    <div class="form-group">
        {{ Form::label('address', trans('validation.attributes.backend.customers.address'), ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::textarea('address', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.customers.address')]) }}
        </div><!--col-lg-10-->
    </div><!--form group-->




</div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $( document ).ready( function() {
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
