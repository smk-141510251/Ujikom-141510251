@extends('layouts.app')

@section('content')
<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
             
                    <div class="intro-text">
                        <span class="name"><h4>Jabatan</h4></span>
                        <hr class="star-light">
                    
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
                   <center> <h2>Daftar Jabatan</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 
                  <div class="x_content">

&nbsp;&nbsp;&nbsp;<a href="{{url('Jabatan/create')}}" class="btn btn-primary">Input Data Jabatan&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
<br>
<br>
                    <table id="datatable" class="table table-striped table-bordered ">
                      <thead>
                        <tr>
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Kode Jabatan</center></p></th>
                          <th><p class="center"><center>Nama Jabatan</center></p></p></th>
                          <th><p class="center"><center>Besaran Uang</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php $no=1; ?>
                         @foreach ($jabatan as $data)
                             <tr>
                                 <th><center>{{ $no++ }}</center></th>
                                 <th><center>{{ $data->Kode_jabatan }}</center></th>
                                 <th><center>{{ $data->Nama_jabatan }}</center></th>
                                 <th><center><?php echo 'Rp.'. number_format($data->Besaran_uang, 2,",","."); ?></center></th>
                                 <th><a href="{{url('Jabatan',$data->id)}}" class="btn btn-primary">lihat</i></a></th>

                                 
                                 <th><a title="Edit" href="{{route('Jabatan.edit',$data->id)}}" class="btn btn-warning">edit</i></a></th>
                                 <th>
                                   <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" >hapus<i class="fa fa-trash"></i></a>
                                 
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