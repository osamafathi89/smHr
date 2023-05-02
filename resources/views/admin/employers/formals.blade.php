@extends('admin.layout')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <div class="card-tools">
                <h3 class="card-title">إضافة الموظفين</h3>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    @if (isset($message))
    <div class="card card-success">
        <div class="card-header">
            <div class="card-tools">
                <h3 class="card-title">تمت إضافة البيانات بنجاح</h3>
            </div>
        </div>
    </div>
    @endif
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('formal.store') }}">
        @csrf
        @method('POST')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">الأسم</label>
                <input type="text" class="form-control" name="name" placeholder="الأسم">
            </div>
            <div class="form-group">
                <label>تاريخ البدء</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    <input type="datetime" class="form-control float-right" id="reservation" name="date_from">
                </div>
                <!-- /.input group -->
            </div>
            <div class="form-group">
                <label>تاريخ الإنتهاء</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    <input type="datetime" class="form-control float-right" id="reservation" name="date_to">
                </div>
                <!-- /.input group -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">عدد الأيام</label>
                <input type="number" class="form-control" name="days" placeholder="">
            </div>
            <div class="form-group">
                <label>حالة العمل </label>
                <select class="form-control" style="width: 100%;" name="status">
                    <option value="مفعل">مفعل</option>
                    <option value ="متوقف">متوقف</option>

                </select>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    </form>
    </div>
@endsection
