@extends('backend.layout')

@section('page_title')
Yeni Yönetici Ekle
@endsection


@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Yeni Yönetici Ekle
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                       {!! Form::open(['method' => 'post','route'=>['admin.user.store'],'role'=>'form']) !!}
                        @include('backend.users._form')
                        <button type="submit" class="btn btn-default">Kaydet</button>
                        <a href="{{ route('admin.user.index') }}" class="btn btn-default">İptal</a>
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
