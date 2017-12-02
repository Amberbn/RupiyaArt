@extends('templates.default')

@section('content')
  <div class="row bg-title">
                      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                          <h4 class="page-title">Delete</h4> </div>
                      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="#" target="_blank" class=""></a>
                          <ol class="breadcrumb">
                              <li><a href="#">Dashboard</a></li>
                              <li class="active">Delete product</li>
                          </ol>
                      </div>
                      <!-- /.col-lg-12 -->
                  </div>
                  <!-- /.row -->
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="white-box">
                              <div class="">
                                  <h2 class="m-b-0 m-t-0">{{$_products->name_product}}</h2> <small class="text-muted db">Product category: {{$_products->category_name}}</small>
                                  <form class="" action="{{route('deleteProducts',$_products->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger pull-right" style="position: relative; top:-40px" name="btnDelete">Delete</button>
                                  </form>
                                  <hr>
                                  <div class="row">
                                      <div class="col-lg-3 col-md-3 col-sm-6">
                                          <div class="white-box text-center"> <img src="../plugins/images/chair.jpg" class="img-responsive" /> </div>
                                      </div>
                                      <div class="col-lg-9 col-md-9 col-sm-6">
                                          <h4 class="box-title m-t-40">Product description</h4>
                                          <p>{{$_products->description}}</p>
                                          <h2 class="m-t-40">$153 <small class="text-success">(36% off)</small></h2>

                                          <h3 class="box-title m-t-40">Key Highlights</h3>
                                          <ul class="list-icons">
                                              <li><i class="fa fa-check text-success"></i> Sturdy structure</li>
                                              <li><i class="fa fa-check text-success"></i> Designed to foster easy portability</li>
                                              <li><i class="fa fa-check text-success"></i> Perfect furniture to flaunt your wonderful collectibles</li>
                                          </ul>
                                      </div>
                                      <div class="col-lg-12 col-md-12 col-sm-12">
                                          <h3 class="box-title m-t-40">General Info</h3>
                                          <div class="table-responsive">
                                              <table class="table">
                                                  <tbody>
                                                      <tr>
                                                          <td width="390">Product name</td>
                                                          <td>{{$_products->name_product}} </td>
                                                      </tr>
                                                      <tr>
                                                          <td>Category product</td>
                                                          <td>{{$_products->category_name}}</td>
                                                      </tr>
                                                      <tr>
                                                          <td>Image url</td>
                                                          <td>{{$_products->image_url}}</td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
@endsection
