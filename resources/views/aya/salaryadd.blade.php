@extends('aya.layeout')
        <!-- END: Pre Loader-->

        <!-- START: Header-->
        <!-- END: Main Menu-->

        <!-- START: Main Content-->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">كل بيانات انواع المكافئات للراتب</h4></div>


                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">
                                <h4 class="card-title">كل بيانات انواع المكافئات للراتب </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table dataTable table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>اسم نوع المكافئه</th>
                                                <th>اضيف بواسطه</th>
                                                <th>تاريخ الاضافه</th>
                                                <th>تاريخ اخر التحديث</th>
                                                <th>مفعل</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($salaries as $salary )
                                            <tr>

                                               <td>{{$salary->name}}</td>
                                                <td>{{$salary->user_name}}</td>
                                                <td>{{$salary->created_at}}</td>

                                                <td>{{$salary->updated_at}}</td>
                                                <td style="background-color: #4CC977; color: #fff;">{{$salary->status}}</td>
                                            </tr>
                                            @endforeach


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->



        <!-- START: Footer-->
        <footer class="site-footer">
            2020 © PICK
        </footer>
        <!-- END: Footer-->


        <!-- START: Back to top-->
        <a href="#" class="scrollup text-center">
            <i class="icon-arrow-up"></i>
        </a>
        <!-- END: Back to top-->


        <!-- END: Page Script JS-->

