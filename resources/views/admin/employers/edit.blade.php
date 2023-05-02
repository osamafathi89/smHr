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
    <form role="form" method="POST" action="{{ route('employee.update',$employee->id) }}">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">الأسم</label>
                <input value="{{$employee->name}}" type="text" class="form-control" name="name" placeholder="الأسم">
            </div>
            <div class="form-group">
                <label>تاريخ الميلاد</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    <input value="{{$employee->birth}}" type="text" class="form-control float-right" name="birth" id="reservation">
                </div>
                <!-- /.input group -->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">الأيميل </label>
                <input value="{{$employee->email}}" type="email" class="form-control" placeholder="أدخل الإيميل" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">كلمة المرور</label>
                <input value="{{$employee->password}}" type="password" class="form-control" placeholder="كلمة المرور" name="password">
            </div>
            <div class="form-group">
                <label for="grade">المؤهل</label>
                <input value="{{$employee->grade}}" type="text" class="form-control" placeholder="المؤهل" name="grade">
            </div>
            <div class="form-group">
                <label for="grade">المرتب</label>
                <input value="{{$employee->salary}}" type="text" class="form-control" placeholder="المرتب" name="salary">
            </div>
            <div class="form-group">
                <label>تاريخ التخرج</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    <input value="{{$employee->graduation}}" type="text" class="form-control float-right" id="reservation" name="graduation">
                </div>
                <!-- /.input group -->
            </div>
            <div class="form-group">
                <label>الحالة الإجتماعية</label>
                <select class="form-control" style="width: 100%;" name="married">
                    <option>أعزب</option>
                    <option>مطلق</option>
                    <option>أرمل</option>
                    <option>متزوج</option>
                </select>
            </div>
            <div class="form-group">
                <label>النوع</label>
                <select name="gender" class="form-control" style="width: 100%;">
                    <option>ذكر</option>
                    <option>أنثى</option>
                </select>
            </div>
            <div class="form-group">
                <label>الخدمة العسكرية </label>
                <select name="marital" class="form-control" style="width: 100%;">
                    <option>إعفاء</option>
                    <option>تأجيل</option>
                    <option>أدى الخدمة </option>

                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">تعديل</button>
        </div>
    </form>
    </div>
@endsection
