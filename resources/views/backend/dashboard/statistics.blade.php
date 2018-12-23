
@section('content_full_width')
    <div class="container-fluid" id="statistics">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <a href="#">
                        <div class="report_item report_item_1">
                            <h2>Sales</h2>
                        </div>
                    </a>
                    <!-- /.report_item -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <a href="#">
                        <div class="report_item  report_item_2">
                            <h2>Purchase</h2>
                        </div>
                    </a>
                    <!-- /.report_item -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <a href="#">
                        <div class="report_item  report_item_3">
                            <h2>Stock</h2>
                        </div>
                    </a>
                    <!-- /.report_item -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <a href="{{route('admin.medicines.create')}}">
                        <div class="report_item  report_item_4">
                            <h2>Add <br> Medicine</h2>
                        </div>
                    </a>
                    <!-- /.report_item -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <a href="#">
                        <div class="report_item  report_item_5">
                            <h2>Add <br>Manufacturer</h2>
                        </div>
                    </a>
                    <!-- /.report_item -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <a href="#">
                        <div class="report_item  report_item_6">
                            <h2>Medicine <br> List</h2>
                        </div>
                    </a>
                    <!-- /.report_item -->
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    @include('backend.dashboard.graphical_report')
@endsection

