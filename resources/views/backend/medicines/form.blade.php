<div class="box-body">
    <div class="form-group">
        {{ Form::label('name', trans('validation.attributes.backend.medicines.name'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.medicines.name'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    <div class="form-group">
        {{ Form::label('generic_name', trans('validation.attributes.backend.medicines.generic_name'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('generic_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.medicines.generic_name'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    <div class="form-group">
        {{ Form::label('category_id', trans('validation.attributes.backend.medicines.category_id'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            @if(!empty($categories))
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control tags box-size select2', 'required' => 'required','placeholder' => 'Category...']) }}
            @else
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control tags box-size select2', 'required' => 'required']) }}
            @endif
        </div><!--col-lg-10-->
    </div><!--form control-->



    <div class="form-group">
        {{ Form::label('type', trans('validation.attributes.backend.medicines.type'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('type', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.medicines.type'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    <div class="form-group">
        {{ Form::label('purchase_price', trans('validation.attributes.backend.medicines.purchase_price'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::number('purchase_price', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.medicines.purchase_price'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    <div class="form-group">
        {{ Form::label('sell_price', trans('validation.attributes.backend.medicines.sell_price'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::number('sell_price', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.medicines.sell_price'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->






    <div class="form-group">
        {{ Form::label('total_unit', trans('validation.attributes.backend.medicines.total_unit'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::number('total_unit', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.medicines.total_unit'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->


    <div class="form-group">
        {{ Form::label('inventory', trans('validation.attributes.backend.medicines.inventory'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('inventory', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.medicines.inventory'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    <div class="form-group">
        {{ Form::label('manufacturer_id', trans('validation.attributes.backend.medicines.manufacturer_id'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            @if(!empty($manufactures))
                {{ Form::select('manufacturer_id', $manufactures, null, ['class' => 'form-control tags box-size select2', 'required' => 'required','placeholder' => 'Manufacturer...']) }}
            @else
                {{ Form::select('manufacturer_id', $manufactures, null, ['class' => 'form-control tags box-size select2', 'required' => 'required']) }}
            @endif
        </div><!--col-lg-10-->
    </div><!--form control-->


    <div class="form-group">
        {{ Form::label('purchase_date', trans('validation.attributes.backend.medicines.purchase_date'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::date('purchase_date', \Carbon\Carbon::today('GMT')->toDateString(), ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.medicines.purchase_date'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    <div class="form-group">
        {{ Form::label('effect_date', trans('validation.attributes.backend.medicines.effect_date'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::date('effect_date', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.medicines.effect_date'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form group-->



    <div class="form-group">
        {{ Form::label('expire_date', trans('validation.attributes.backend.medicines.expire_date'), ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::date('expire_date', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.medicines.expire_date'), 'required' => 'required']) }}
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
