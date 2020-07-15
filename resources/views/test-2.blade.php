@php
$url = 'public/themes/';
@endphp
@extends('master')
<style>
    .ace_editor {
        height: 500px;
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
                                    <th colspan="1">Filter All:</th>
                                    <th colspan="5"><input class="form-control" type="text" ng-model="filterTable"></th>
                                </tr>
                                <tr>
                                    <th>Filter Column:</th>
                                    <th><input class="form-control" type="text" ng-model="filterColumn.name"></th>
                                    <th>
                                        <select class="form-control" ng-model="filterColumn.class">
                                            <option value="">All</option>
                                            <option value="12A">12A</option>
                                            <option value="12B">12B</option>
                                            <option value="12C">12C</option>
                                            <option value="12D">12D</option>
                                            <option value="12E">12E</option>
                                        </select>
                                    </th>
                                    <th><input class="form-control" type="text" ng-model="filterColumn.Math"></th>
                                    <th><input class="form-control" type="text" ng-model="filterColumn.Science"></th>
                                    <th><input class="form-control" type="text" ng-model="filterColumn.English"></th>
                                </tr>
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
                                <tr ng-repeat="data in datas|filter: filterColumn| filter: filterTable|orderBy : 'class'"
                                    ng-repeat="score in data.scores">
                                    <th>@{{ $index+1 }}</th>
                                    <td>@{{ data.name }}</td>
                                    <td>@{{ data.class }}</td>
                                    <td>@{{ data.Math }}</td>
                                    <td>@{{ data.Science }}</td>
                                    <td>@{{ data.English }}</td>
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
                                    <th colspan="1">Filter All:</th>
                                    <th colspan="5"><input class="form-control" type="text" id="filterTable"></th>
                                </tr>
                                <tr>
                                    <th>Filter Column:</th>
                                    <th><input class="form-control" type="text" id="filterName"></th>
                                    <th>
                                        <select class="form-control" id="filterClass">
                                            <option value="">All</option>
                                            <option value="12A">12A</option>
                                            <option value="12B">12B</option>
                                            <option value="12C">12C</option>
                                            <option value="12D">12D</option>
                                            <option value="12E">12E</option>
                                        </select>
                                    </th>
                                    <th><input class="form-control" type="text" id="filterMath"></th>
                                    <th><input class="form-control" type="text" id="filterScience"></th>
                                    <th><input class="form-control" type="text" id="filterEnglish"></th>
                                </tr>
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
    <thead>
        <tr>
            <th colspan="1">Filter All:</th>
            <th colspan="5"><input class="form-control" type="text" ng-model="filterTable"></th>
        </tr>
        <tr>
            <th>Filter Column:</th>
            <th><input class="form-control" type="text" ng-model="filterColumn.name"></th>
            <th>
                <select class="form-control" ng-model="filterColumn.class">
                    <option value="">All</option>
                    <option value="12A">12A</option>
                    <option value="12B">12B</option>
                    <option value="12C">12C</option>
                    <option value="12D">12D</option>
                    <option value="12E">12E</option>
                </select>
            </th>
            <th><input class="form-control" type="text" ng-model="filterColumn.Math"></th>
            <th><input class="form-control" type="text" ng-model="filterColumn.Science"></th>
            <th><input class="form-control" type="text" ng-model="filterColumn.English"></th>
        </tr>
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
        <tr ng-repeat="data in datas|filter: filterColumn| filter: filterTable|orderBy : 'class'">
            <th> $index+1 </th>
            <td> data.name </td>
            <td> data.class </td>
            <td> data.Math </td>
            <td> data.Science </td>
            <td> data.English </td>
        </tr>
    </tbody>
</table></textarea>
                        </div>

                        <div class="col-md-12">
                            <h5 class="card-subtitle">Javascript</h5>
                            <textarea id="ace_javaScript" class="ace-editor w-100">
app.controller("TestController", function ($scope, $http) {
    $scope.getScoreStudent = function () {
        $http({
            url: '/angularjs/get-score-student',
            method: 'GET',
        }).then(function successCallBack(response) {
            $scope.datas = response.data;
        });
    }
});</textarea>
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
    <thead>
        <tr>
            <th colspan="1">Filter All:</th>
            <th colspan="5"><input class="form-control" type="text" id="filterTable"></th>
        </tr>
        <tr>
            <th>Filter Column:</th>
            <th><input class="form-control" type="text" id="filterName"></th>
            <th>
                <select class="form-control" id="filterClass">
                    <option value="">All</option>
                    <option value="12A">12A</option>
                    <option value="12B">12B</option>
                    <option value="12C">12C</option>
                    <option value="12D">12D</option>
                    <option value="12E">12E</option>
                </select>
            </th>
            <th><input class="form-control" type="text" id="filterMath"></th>
            <th><input class="form-control" type="text" id="filterScience"></th>
            <th><input class="form-control" type="text" id="filterEnglish"></th>
        </tr>
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
</table></textarea>
                        </div>

                        <div class="col-md-12">
                            <h5 class="card-subtitle">Javascript</h5>
                            <textarea id="ace_javaScript_jquery" class="ace-editor w-100">
$(document).ready(function(){
    $.ajax({
    url: "/angularjs/get-score-student",
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
                +'<td>' + value.score[0].score + '</td>'
                +'<td>' + value.score[1].score + '</td>'
                +'<td>' + value.score[2].score + '</td>'
            '</tr>';
        });
        $('#TestTable').append(table);
    }
    });

    $("#filtering").keyup(function(){
    filter = new RegExp($(this).val(),'i');
    $("#TestTable tbody tr").filter(function(){
        $(this).each(function(){
            found = false;
            $(this).children().each(function(){
                content = $(this).html();
                if(content.match(filter))
                {
                    found = true
                }
            });
            if(!found)
            {
                $(this).hide();
            }
            else
            {
                $(this).show();
            }
        });
    });
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
        $score = ViewScore::getScoreByID($student->id);
        $merge = $score->merge($student);
        $data[] = array_merge(['class' => $student->class->class_name], $merge->toArray());
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
        $score = ViewScore::getScoreByID($student->id);
        $merge = $score->merge($student);
        $data[] = array_merge(['class' => $student->class->class_name], $merge->toArray());
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
            url: "/angularjs/get-score-student",
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
                        +'<td>' + value.Math + '</td>'
                        +'<td>' + value.Science + '</td>'
                        +'<td>' + value.English + '</td>'
                    '</tr>';
                });
                $('#TestTable').append(table);
            }
            });

            $("#filterTable").keyup(function(){
            filter = new RegExp($(this).val(),'i');
            $("#TestTable tbody tr").filter(function(){
                $(this).each(function(){
                    found = false;
                    $(this).children().each(function(){
                        content = $(this).html();
                        if(content.match(filter))
                        {
                            found = true
                        }
                    });
                    if(!found)
                    {
                        $(this).hide();
                    }
                    else
                    {
                        $(this).show();
                    }
                });
            });
            });
        });
    </script>
    @endpush
