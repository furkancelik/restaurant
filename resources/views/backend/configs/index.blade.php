@extends('backend.layout')

@section('page_title')
Ayarlar
@endsection


@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Ayarlar
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                       {!! Form::model($config,['method' => 'put','route'=>['admin.config.update',$config->id],'role'=>'form']) !!}
                        @include('backend.configs._form')
                        <button type="submit" class="btn btn-default">Güncelle</button>
                        <a href="{{ route('admin.config.index') }}" class="btn btn-default">İptal</a>
                       {!! Form::close() !!}
                    </div>
                    <!-- /.col-lg-12 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection
