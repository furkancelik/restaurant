<div class="form-group">
  {!! Form::label('Adı Soyadı') !!}
  {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('E-Mail') !!}
  {!! Form::text('email',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('Şifre') !!}
  {!! Form::password('password',['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('Şifre Tekrar') !!}
  {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
</div>
