<div class="form-group">
    {!! Form::label('Menu Kategorisi') !!}
    {!! Form::select('category_id',[''=>"-- Kategori Seçiniz --"]+$categories->toArray(),(isset($data) && isset($data->category->id)) ? $data->category->id:null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Menu Başlığı') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Menu İçeriği') !!}
    {!! Form::text('content',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Menu Fiyatı') !!}
    {!! Form::text('price',null,['class'=>'form-control']) !!}
</div>
