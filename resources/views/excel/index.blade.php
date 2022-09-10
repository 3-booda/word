@extends('layout.app')

@section('content')

@foreach ($data->chunk(14) as $healths)
<div class="">
    <h3>محافظة دمياط</h3>
    <h3>مديرية الصحة والسكان</h3>
</div>

<h3 style="text-decoration: underline; text-align: center">دفتر قيد الامراض المعدية</h3>

<div style="margin-bottom: 25px">
    <span style="margin-left: 1000px">الادراة الصحية: دمياط</span>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <span>الوحدة: عزب النهضة</span>
</div>

<table class="table table-bordered" style="width: 100%; margin-top: 10px; font-size: 0.8em;" border="1px">
    <thead>
        <tr align="center" >
            {{-- <th rowspan="2">#</th> --}}
            <th rowspan="2">الاسم</th>
            <th rowspan="2">السن</th>
            <th rowspan="2">النوع</th>
            <th rowspan="2">المهنة</th>
            <th rowspan="2">الحالة الاجتماعية</th>
            <th colspan="2">العنوان</th>
            <th colspan="2">التاريخ</th>
            <th rowspan="2">التشخيص الابتدائي</th>
            <th colspan="2">الاختبارات المعملية</th>
            <th rowspan="2">التشخيص النهائي</th>
            <th colspan="2">الخروج</th>
        </tr>
        <tr>
            <th>الوحدة</th>
            <th>الادارة</th>
            <th>بداية المرض</th>
            <th>الدخول</th>
            <th>عينة اولي</th>
            <th>عينة ثانية</th>
            <th>شفاء</th>
            <th>وفاة</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($healths as $index => $health)
        <tr>
            {{-- <th scope="row">{{ $index + 1 }}</th> --}}
            <td>{{ $health->name }}</td>
            <td>{{ $health->age }}</td>
            <td>{{ $health->gender }}</td>
            <td>{{ $health->job }}</td>
            <td>{{ $health->marital_status }}</td>
            <td>عزب النهضة</td>
            <td>دمياط</td>
            <td>{{ $health->disease_date }}</td>
            <td>{{ $health->entry_date }}</td>
            <td>{{ $health->primary_diagnosis }}</td>
            <td>سيرم</td>
            <td></td>
            <td>الكورونا المستجدة</td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
<br> <br>
@endforeach

@endsection
