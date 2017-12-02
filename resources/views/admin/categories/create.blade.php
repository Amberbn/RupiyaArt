@extends('templates.default')

@section('content')
  <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Forms</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="#" target="_blank" class=""></a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Add category</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">Form Add</h3>
                            <p class="text-muted m-b-30 font-13">For<code>add category</code>.</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('category.saveCategory')}}" class="floating-labels" method="post">
                                      {{ csrf_field() }}
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="name_product" name="name_category"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input4">Category name</label> <span class="help-block"><small>Please insert your category name here!.</small></span>
                                        </div>

                                        <div class="form-group m-b-40">
                                            <input type="submit" class="btn btn-success" id="btnSubmit" name="btnSubmit" value="Save">
                                            <input type="reset" class="btn btn-default" id="btnReset" name="btnReset" value="Reset">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
@endsection
