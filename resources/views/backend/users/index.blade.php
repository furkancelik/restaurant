@extends('backend.layout')

@section('page_title')
Yöneticiler
@endsection


@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Kayıtlı Yöneticiler
                <a href="{{route('admin.user.create')}}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Adı Soyadı</th>
                            <th>E-Mail</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($rows as $row)
                           <tr class="odd gradeX">
                               <td>{{ $row->id }}</td>
                               <td>{{ $row->name }}</td>
                               <td>{{ $row->email }}</td>
                               <td>
                                   <a href="{{ route('admin.user.edit',$row->id) }}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Düzenle</a>
                                   <a data-method="delete" href="{{ route('admin.user.destroy',$row->id) }}" class="btn btn-danger btn-sm" data-method="delete"> <i class="fa fa-trash"></i> Sil</a>
                               </td>
                           </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection
