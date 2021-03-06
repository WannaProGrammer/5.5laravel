@extends('layouts.app2')

@section('content')

    <div class="container">
        <div class="row" style="padding-bottom: 30px;">
            <h3 style="display: inline-block">查询:</h3>
            <form action="/query/queryCredit" method="post" style="display: inline-block">
                {{csrf_field()}}
                <input type="text" name="student_id" placeholder="请输入学号">
                <input type="text" name="student_name" placeholder="请输入学生姓名">
                <button type="submit" class="btn btn-primary">查询</button>
            </form>
        </div>
        <div class="row">
            <table class="table table-striped" style="text-align: center">
                <tr>
                    <td>学号</td>
                    <td class="info">姓名</td>
                    <td>性别</td>
                    <td>专业</td>
                    <td class="danger">已修学分总数</td>
                </tr>
                    @foreach($results as $vo)
                        <tr>
                            <td>{{$vo->id}}</td>
                            <td class="info">{{$vo->student_name}}</td>
                            <td>{{$vo->student_sex}}</td>
                            <td>{{$vo->student_dept}}</td>
                            <td class="danger">{{$vo->total_credit}}</td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
