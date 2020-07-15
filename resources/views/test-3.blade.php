@php
$url = 'public/themes/';
@endphp
@extends('master')
<style>
    .ace_editor {
        height: 300px;
    }
</style>

@section('content')
<div class="col-lg-12" ng-controller='TestController'>
    <div class="row" ng-init='getScoreStudent()'>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">ANGULARJS</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Math</th>
                                    <th>Science</th>
                                    <th>English</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="data in datas">
                                    <th>@{{ $index+1 }}</th>
                                    <td><a href="/demo/test-4/@{{ data.id }}">@{{ data.name }}</td>
                                    <td>@{{ data.class }}</td>
                                    <td ng-if="data.scores[0].score>7" style="color: red">@{{ data.scores[0].score }}</td>
                                    <td ng-if="data.scores[0].score<=7">@{{ data.scores[0].score }}</td>
                                    <td ng-if="isGoodScore(data.scores[1].score)" style="color: red">@{{ data.scores[1].score }}</td>
                                    <td ng-if="!isGoodScore(data.scores[1].score)">@{{ data.scores[1].score }}</td>
                                    <td ng-if="isGoodScore(data.scores[2].score)" style="color: red">@{{ data.scores[2].score }}</td>
                                    <td ng-if="!isGoodScore(data.scores[2].score)">@{{ data.scores[2].score }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">JQUERY</h6>
                    <div class="table-responsive">
                        <table class="table" id="TestTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Math</th>
                                    <th>Science</th>
                                    <th>English</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6  grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <h5 class="card-subtitle">HTML</h5>
                            <textarea id="ace_html" class="ace-editor">
<table class="table">
    <tbody>
        <tr ng-repeat="data in datas">
            <th> $index+1 </th>
            <td> data.name </td>
            <td> data.class </td>
            <td ng-if="data.scores[0].score>7" style="color: red"> data.scores[0].score </td>
            <td ng-if="data.scores[0].score<=7"> data.score[0].score </td>
            <td ng-if="isGoodScore(data.scores[1].score)" style="color: red"> data.scores[1].score </td>
            <td ng-if="!isGoodScore(data.scores[1].score)"> data.score[1].score </td>
            <td ng-if="isGoodScore(data.scores[2].score)" style="color: red"> data.scores[2].score </td>
            <td ng-if="!isGoodScore(data.scores[2].score)"> data.scores[2].score </td>
        </tr>
    </tbody>
</table></textarea>
                        </div>

                        <div class="col-md-12">
                            <h5 class="card-subtitle">Javascript</h5>
                            <textarea id="ace_javaScript" class="ace-editor w-100">
$scope.getScoreStudent = function () {
    $http({
        url: '/demo/get-score-student',
        method: 'GET',
    }).then(function successCallBack(response) {
        $scope.datas = response.data;
    });
}

$scope.isGoodScore = function (score) {
    return (score > 7) ? true : false;
}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <h5 class="card-subtitle">HTML</h5>
                            <textarea id="ace_html_jquery" class="ace-editor w-100">
<table class="table" id="TestTable">
    <tbody>
    </tbody>
</table></textarea>
                        </div>

                        <div class="col-md-12">
                            <h5 class="card-subtitle">Javascript</h5>
                            <textarea id="ace_javaScript_jquery" class="ace-editor w-100">
$(document).ready(function(){
    $.ajax({
    url: "/demo/get-score-student",
    method: 'GET',
    dataType:'json',
    success: function (response) {
    var table = '';
    $.each(response, function (key,value) {
            var index = key+1;
            table +=
            '<tr>'
                +'<td>' + index + '</td>'
                +'<td>' + value.name + '</td>'
                +'<td>' + value.class + '</td>'
                +(value.scores[0].score > 7 ? '<td style="color: red">' : '<td>')
                    + value.scores[0].score + '</td>'
                +(value.scores[1].score > 7 ? '<td style="color: red">' : '<td>')
                    + value.scores[1].score + '</td>'
                +(value.scores[2].score > 7 ? '<td style="color: red">' : '<td>')
                    + value.scores[2].score + '</td>'
            '</tr>';
    });
    $('#TestTable').append(table);
    }
    });
});
                        </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <h5 class="card-subtitle">Controller</h5>
                            <textarea id="ace_php" class="ace-editor w-100">
public function getScoreStudent()
{
    $data = array();
    $students = Student::all();
    foreach ($students as $student) {
        $data[] = [
            'id' => $student->id,
            'name' => $student->name,
            'class' => $student->class->class_name,
            'scores' => ViewScore::getScoreByID($student->id)
        ];
    }
    return json_encode($data);
}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <h5 class="card-subtitle">Controller</h5>
                            <textarea id="ace_php_jquery" class="ace-editor w-100">
public function getScoreStudent()
{
    $data = array();
    $students = Student::all();
    foreach ($students as $student) {
        $data[] = [
            'id' => $student->id,
            'name' => $student->name,
            'class' => $student->class->class_name,
            'scores' => ViewScore::getScoreByID($student->id)
        ];
    }
    return json_encode($data);
}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('customScript')
    <script src="{{ url($url . '/angularjs/Controller/TestController.js')}}"></script>
    <script src="{{ url($url . '/vendors/ace-builds/src-min/ace.js')}}"></script>
    <script src="{{ url($url . '/js/ace.js')}}"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
            url: "/demo/get-score-student",
            method: 'GET',
            dataType:'json',
            success: function (response) {
            var table = '';
            $.each(response, function (key,value) {
                    var index = key+1;
                    table +=
                    '<tr>'
                        +'<td>' + index + '</td>'
                        +'<td>' + value.name + '</td>'
                        +'<td>' + value.class + '</td>'
                        +(value.scores[0].score > 7 ? '<td style="color: red">' : '<td>')
                            + value.scores[0].score + '</td>'
                        +(value.scores[1].score > 7 ? '<td style="color: red">' : '<td>')
                            + value.scores[1].score + '</td>'
                        +(value.scores[2].score > 7 ? '<td style="color: red">' : '<td>')
                            + value.scores[2].score + '</td>'
                    '</tr>';
            });
            $('#TestTable').append(table);
            }
            });
        });
    </script>

    @endpush
