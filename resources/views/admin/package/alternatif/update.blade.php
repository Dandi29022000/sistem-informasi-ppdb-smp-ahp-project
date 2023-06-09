@extends('admin.layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Master Alternatif</h1>
    
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Form Update Data Alternatif</h5>
                </div>

                <div class="card-body">
                    @foreach($alternatives as $DK)
                    <form action="/admin/alternatif/formedit/updatealternatif/{id}" method="post">
                        @csrf
                        <div class="input-group">
                            <label for="code" class="col-md-4 col-form-label text-md-end">{{ __('Id Alternatif') }}</label>
                            <input class="form-control" name="code" placeholder="Id Alternatif" type="text" value="{{ $DK->code }}" readonly>
                        </div>
                        <br>
                        <div class="input-group">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama Alternatif') }}</label>
                            <input class="form-control" name="name" placeholder="Nama Alternatif" type="text" value="{{ $DK->name }}">
                        </div>
                        <br>
                        <!-- <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input class="form-control" placeholder="Confirm Password" type="password">
                        </div>
                        <br> -->
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-warning btn-block" onclick="kembalialternatif();">Cancel</button>
                            </div>
                        </div>
                    </form>
                    @endforeach

                    <!-- Script -->
                    <script>
                        function kembalialternatif() {
                            window.location.href = "/admin/alternatif";
                        }
                    </script>
                </div>
                <!-- END MAIN CONTENT -->
            </div>
        </div>    
    </div>
</div>
@endsection