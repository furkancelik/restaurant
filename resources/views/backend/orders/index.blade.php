@extends('backend.layout')

@section('page_title')
Siparişler
@endsection


@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Siparişler
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sipariş</th>
                            <th>Adı Soyadı</th>
                            <th>Telefon Numarası</th>
                            <th>Adres</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($rows as $row)
                           <tr class="odd gradeX">
                               <td>{{ $row->id }}</td>
                               <td><a style="color:#c00;text-decoration:none;" href="{{route('admin.menu-detail.edit',$row->menu->id)}}">{{ $row->menu->title }} <small>₺{{ $row->menu->price }}</small></a></td>
                               <td>{{ $row->full_name }}</td>
                               <td>{{ $row->phone }}</td>
                               <td>{{ $row->address }}</td>
                               <td>
                                   <!-- <a href="{{ route('admin.order.edit',$row->id) }}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Düzenle</a> -->
                                   <a data-method="delete" href="{{ route('admin.order.destroy',$row->id) }}" class="btn btn-danger btn-sm" data-method="delete"> <i class="fa fa-trash"></i> Sil</a>
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
