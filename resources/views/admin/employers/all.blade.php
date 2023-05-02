@extends('admin.layout')
@section('content')
    <div class="card">
        <div class="card-header">


            <div class="card-tools">
                <h3 class="card-title">كل الموظفين</h3>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>أسم المستخدم</th>
                        <th>النوع</th>
                        <th>تاريخ التعيين</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->birth }}</td>
                            <td><span class="tag tag-success">{{ $employee->graduation }}</span></td>
                            <td>
                                <a href="/employee/{{ $employee->id }} " class="btn btn-info">تعديل</a>
                                <form action="/employee/{{ $employee->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="حذف" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!--table---->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">بيانات الموظقين</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">رقم الموظف
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">أسم المستخدم	</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                     النوع</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Engine version: activate to sort column ascending"
                                        style="">تاريخ التعيين	</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                        style="">المرتب</th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                        style=""></th>

                                </tr>
                            </thead>
                            <tbody>
 @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->birth }}</td>
                            <td><span class="tag tag-success">{{ $employee->graduation }}</span></td>
                            <td>{{ $employee->salary }}</td>
                            <td>
                                <a href="/employee/{{ $employee->id }} " class="btn btn-info">تعديل</a>
                                <form action="/employee/{{ $employee->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="حذف" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Rendering engine</th>
                                    <th rowspan="1" colspan="1">Browser</th>
                                    <th rowspan="1" colspan="1">Platform(s)</th>
                                    <th rowspan="1" colspan="1" style="">Engine version</th>
                                    <th rowspan="1" colspan="1" style="">CSS grade</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to
                            10 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="example1_previous"><a
                                        href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                        class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                                        data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                        aria-controls="example1" data-dt-idx="7" tabindex="0"
                                        class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
