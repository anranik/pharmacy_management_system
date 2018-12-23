<div class="box-body">


    <div class="form-group">
        {{ Form::label('name', trans('validation.attributes.backend.sales.name'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.sales.name'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->


    <div class="form-group">
        {{ Form::label('generic_name', trans('validation.attributes.backend.sales.generic_name'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('generic_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.sales.generic_name'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->


    <div class="form-group">
        {{ Form::label('customer_name', trans('validation.attributes.backend.sales.customer_name'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('customer_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.sales.customer_name'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->


    <div class="form-group">
        {{ Form::label('customer_contact', trans('validation.attributes.backend.sales.customer_contact'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('customer_contact', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.sales.customer_contact'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->


    <div class="form-group">
        {{ Form::label('sale_date', trans('validation.attributes.backend.sales.sale_date'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::date('sale_date', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.sales.sale_date'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    <div class="form-group">
        {{ Form::label('quantity', trans('validation.attributes.backend.sales.quantity'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::number('quantity', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.sales.quantity'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    <div class="form-group">
        {{ Form::label('unit_price', trans('validation.attributes.backend.sales.unit_price'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::number('unit_price', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.sales.unit_price'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    <div class="form-group">
        {{ Form::label('total_price', trans('validation.attributes.backend.sales.total_price'), ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::number('total_price', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.sales.total_price'), 'readonly' => 'readonly']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    <div class="form-group">
        {{ Form::label('expire_date', trans('validation.attributes.backend.sales.expire_date'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::date('expire_date', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.sales.expire_date'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    



</div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $( document ).ready( function() {
            $('#unit_price').change(function () {
                var quantity =  $('#quantity').val();
                var unitPrice =  $(this).val();

                $('#total_price').val(quantity*unitPrice);
            });


        });
    </script>
@endsection
