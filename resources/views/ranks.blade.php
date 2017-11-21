@extends('layouts.oneui')
@section('content')
    <div class="bg-primary-dark">
        <section class="content content-full content-boxed">
            <!-- Section Content -->
            <div class="push-100-t push-50 text-center">
                <h1 class="h2 font-w700 text-white push-10 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Ranks & Achievements</h1>
                <h2 class="h5 text-white-op animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown"></h2>
            </div>
            <!-- END Section Content -->
        </section>
    </div>
    <!-- Page Content -->



    <div class="content">
        <div class="col-xs-6 col-md-6 col-lg-6">
            <div class="block animated fadeInUp">
                <div class="block-content ">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->

                    <table class="table table-bordered table-striped table-hover js-dataTable-full ">
                        <thead>
                        <tr>

                            <th>Rank Name</th>
                            <th>Minimum Hours</th>
                            <th>Hours Left</th>

                        </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>


                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>


        <!-- END Dynamic Table Full -->

@endsection
</body>


</html>
