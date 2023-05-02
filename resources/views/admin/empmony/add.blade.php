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
    <form role="form" method="POST" action="{{ route('finance.store') }}">
        @csrf
        @method('POST')
        <div class="card-body">

            <div class="form-group">
                <label>الموظف</label>
                <select class="form-control" style="width: 100%;" name="emp_id">
                    @foreach ($employees as $employee )
                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label>النوع</label>
                <select name="type" class="form-control" style="width: 100%;">
                    <option value="motivate">خافز</option>
                    <option value="dis">خصم</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">القيمة</label>
                <input  type="text" class="form-control" name="value" placeholder="القيمة">
            </div>
            <div class="card-body">
                <label for="exampleInputPassword1">السبب</label>
                <textarea class="form-control" style="" name="reason">
                </textarea>
              </div>
            </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    </form>
    </div>
@endsection
