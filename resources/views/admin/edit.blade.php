@extends('templates.default')

@section('content')
  <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Forms</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="#" target="_blank" class=""></a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Add product</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">Form Add</h3>
                            <p class="text-muted m-b-30 font-13">For<code>add product</code>.</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('updateProduct',$_products->id)}}" class="floating-labels" method="post">
                                      {{ csrf_field() }}
                                      {{method_field('PATCH')}}
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="name_product" name="name_product" value="{{$_products->name_product}}"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input4">Product name</label> <span class="help-block"><small>Please insert your product name here!.</small></span>
                                        </div>

                                        <div class="form-group m-b-40">
                                            <select class="form-control p-0" id="category_id" name="category_id">

                                              <option></option>
                                                @foreach ($_categories as $category)
                                                  <option value="{{$category->id}}"
                                                    @if ($category->id === $_products->category_id)
                                                      selected
                                                    @endif
                                                    >{{$category->name_category}}
                                                  </option>
                                                @endforeach

                                            </select><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input6">Category</label><span><small>Please insert your category product here!.</small></span>
                                        </div>
                                        <div class="form-group m-b-5">
                                            <textarea class="form-control" rows="4" id="description" name="description">{{$_products->description}}</textarea><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input7">Description</label><span><small>Please insert your description product here!.</small></span>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="submit" class="btn btn-success" id="btnSubmit" name="btnSubmit" value="Update">
                                            <input Type="button" class="btn btn-default" id="btnCancel" name="btnCancel" value="Cancel">
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
