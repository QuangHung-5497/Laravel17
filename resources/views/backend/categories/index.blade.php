@extends('backend.layouts.master')

@section('content-header')
    <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Danh sách Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Category</a></li>
                    <li class="breadcrumb-item active">Danh sách</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    @endsection

@section('content')
  <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category</th>
                      <th>Slug</th>
                      <th>Created_at</th>
                      <th>Updated_at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                      <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                      </tr>
                    @endforeach
                    
                    </tbody>
                  </table>
                  {!! $categories->links() !!}
                </div>
                <!-- /.col -->
              </div>
@endsection

@section('footer')
  <footer class="main-footer no-print">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.3
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
@endsection