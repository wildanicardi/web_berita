@extends('layouts.master') @section('title', 'Kategori') @section('content')

<div class="row justify-content-center">
    <div class="col-lg-12">
        <a class="btn btn-success btn-lg mb-4 " href="#" data-toggle="modal" data-target="#addModal">Add</a>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="row">
    <div class="col-lg-10">
        <table class="table table-bordered table-hover" id="studentTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Status</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @php($i=1)
                @foreach ($kategoris as $kategori)
                <tr>
                    <th>{{$i}}</th>
                    <th>{{$kategori->kategori}}</th>
                    <th>{{$kategori->status}}</th>
                    <th width="280px">Action</th>
                </tr>
                @php($i++)
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Student Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{route('kategori.store')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="col-lg-12"> kategori:</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="kategori" placeholder="Enter  Kategori"
                                name="kategori">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-12">Status:</label>
                        <div class="col-lg-12">
                            <label for="" class="radio-inline">
                                <input type="radio" name="status" value="on">ON
                            </label>
                            <label for="" class="radio-inline">
                                <input type="radio" name="status" value="off">OFF
                            </label>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
