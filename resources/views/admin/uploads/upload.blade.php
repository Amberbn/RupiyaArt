@extends('templates.default')

@section('content')
  <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">File Upload</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">File Upload</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->

                <!-- .row -->
                <div class="row">
                    <div class="col-sm-6 ol-md-6 col-xs-12">
                        <div class="white-box">
                          <form class="" action="index.html" method="post" data >
                            <h3 class="box-title">File Upload5</h3>
                            <label for="input-file-max-fs">You can add a max file size</label>
                            <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
                          </form>

                        </div>
                    </div>
                </div>
@endsection
