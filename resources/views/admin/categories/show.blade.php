@extends('templates.default')

@section('content')
  <div class="row bg-title">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <h4 class="page-title">Table</h4>
                  </div>
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      <a href="#" target="_blank" class=""></a>
                      <ol class="breadcrumb">
                          <li><a href="#">Dashboard</a></li>
                          <li><a href="#">Table</a></li>
                          <li class="active">Table category</li>
                      </ol>
                  </div>
                  <!-- /.col-lg-12 -->
              </div>
              <!-- /row -->
              <div class="row">
                  <div class="col-lg-12">
                      <div class="white-box">
                          <h3 class="box-title m-b-0">Table Category</h3>
                          <p class="text-muted m-b-20">Table for show categories.</p>
                          <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
                              <thead>
                                  <tr>
                                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">id</th>
                                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Category name</th>
                                      <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Action</th>
                                  </tr>
                              </thead>
                              <tbody>

                                @foreach ($categories as $category)
                                   <tr>
                                     <td>{{$category->id}}</td>
                                     <td>{{$category->name_category}}</td>
                                     <td>

                                       <a href="" class="btn btn-warning">Edit</a>
                                       <a href="" class="btn btn-danger">Delete</a>
                                       <a href="{{route('category.detailCategory',$category->id)}}" class="btn btn-info">Detail</a>
                                     </td>
                                   </tr>
                                @endforeach

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!-- /.row -->
              <!-- .row -->
@endsection
