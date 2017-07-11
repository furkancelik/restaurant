@extends('backend.layout')

@section('page_title')
Menu Detayı Düzenle
@endsection


@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Menu Detayı Düzenle
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                       {!! Form::model($data,['method' => 'put','route'=>['admin.menu-detail.update',$data->id],'role'=>'form']) !!}
                        @include('backend.menu_details._form')
                        <button type="submit" class="btn btn-default">Güncelle</button>
                        <a href="{{ route('admin.menu-detail.index') }}" class="btn btn-default">İptal</a>
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
