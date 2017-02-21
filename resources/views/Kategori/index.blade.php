@extends('layouts.app')

@section('content')
<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
              
                        <span class="name"><h4>Kategori Lembur<h4></span>
                       
                    </div>
                
                </div>
            </div>
        </div>
    </header>
<br>
	 <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
 
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   <center> <h2>Daftar Kategori Lembur</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 
                  <div class="x_content">

                  &nbsp;&nbsp;&nbsp;<a href="{{url('Kategori/create')}}" class="btn btn-primary">Input Kategori Lembur&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>

                <br>
                <br>

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Kode Lembur</center></p></th>
                          <th><p class="center"><center>Jabatan</center></p></p></th>
                          <th><p class="center"><center>Golongan</center></p></p></th>
                          <th><p class="center"><center>Besaran Uang</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php $no=1; ?>
                         @foreach ($kategori as $data)
                             <tr>
                                 <th><center>{{ $no++ }}</center></th>
                                 <th><center>{{ $data->Kode_lembur }}</center></th>
                                 <th><center>{{ $data->Jabatan->Nama_jabatan }}</center></th>
                                 <th><center>{{ $data->Golongan->Nama_golongan }}</center></th>
                                 <th><center><?php echo 'Rp.'. number_format($data->Besaran_uang, 2,",","."); ?></center></th>
                                 <th><a href="{{url('Kategori',$data->id)}}" class="btn btn-primary">lihat</i></a></th>
                                 <th><a title="Edit" href="{{route('Kategori.edit',$data->id)}}" class="btn btn-warning">ubah</i></a></th>
                                 <th>
                                   <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">hapus<i class="fa fa-trash"></i></a>
                                  @include('modals.del', [
                                    'url' => route('Kategori.destroy', $data->id),
                                    'model' => $data
                                  ])
                                 </th>
                             </tr>
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection