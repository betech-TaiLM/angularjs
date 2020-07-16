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
<div class="col-lg-12" ng-controller='StudentController'>
    <div class="row" ng-init='getStudent()'>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Update Student With AngularJS</h6>
                    <div class="alert alert alert-fill-success" ng-if="message">
                        @{{ message }}
                    </div>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" ng-model="student.name">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" ng-model="student.gender">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="text" class="form-control" ng-model="student.birthday">
                        </div>
                        <div class="form-group">
                            <label for="class">Class</label>
                            <select ng-init="getClass()" ng-model="student.class_id"
                                ng-options="data.id as data.class_name for data in class">
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" ng-click="updateStudent()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Update Student With Jquery</h6>
                    <div class="alert alert alert-fill-success" id="message" style="display:none">
                        Update successful
                    </div>
                    <form class="forms-sample">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" id="gender">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="text" class="form-control" id="birthday">
                        </div>
                        <div class="form-group">
                            <label for="class">Class</label>
                            <select id="class">
                            </select>
                        </div>
                        <button class="btn btn-primary mr-2" id="updateStudent" type="submit">Submit</button>
                    </form>
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
<div class="card-body">
    <h6 class="card-title">Update Student With AngularJS</h6>
    <div class="alert alert alert-fill-success" ng-if="message">@{{ message }}</div>
    <form class="forms-sample">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" ng-model="student.name">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" ng-model="student.gender">
        </div>
        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="text" class="form-control" ng-model="student.birthday">
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <select ng-init="getClass()" ng-model="student.class_id"
                ng-options="data.id as data.class_name for data in class">
            </select>
        </div>
        <button type="submit" class="btn btn-primary mr-2" ng-click="updateStudent()">Submit</button>
    </form>
</div></textarea>
                        </div>

                        <div class="col-md-12">
                            <h5 class="card-subtitle">Javascript</h5>
                            <textarea id="ace_javaScript" class="ace-editor w-100">
app.controller("StudentController", function ($scope, $http) {
    var url = window.location.pathname.split("/");
    var id = url[url.length - 1];
    $scope.getStudent = function () {
        $http({
            url: '/angularjs/get-student',
            method: 'POST',
            data: JSON.stringify({ id: id })
        }).then(function successCallBack(response) {
            $scope.student = response.data;
        });
    }
    $scope.getClass = function () {
        $http({
            url: '/angularjs/get-class',
            method: 'GET',
        }).then(function successCallBack(response) {
            $scope.class = response.data;
        });
    }
    $scope.updateStudent = function () {
        $http({
            url: '/angularjs/update-student',
            method: 'POST',
            data: JSON.stringify({ student : $scope.student })
        }).then(function successCallBack(response) {
            $scope.message = "Update successful";
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
<div class="card-body">
    <h6 class="card-title">Update Student With Jquery</h6>
    <div class="alert alert alert-fill-success" id="message" style="display:none">Update successful</div>
    <form class="forms-sample">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" id="gender">
        </div>
        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="text" class="form-control" id="birthday">
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <select id="class">
            </select>
        </div>
        <button class="btn btn-primary mr-2" id="updateStudent" type="submit">Submit</button>
    </form>
</div></textarea>
                        </div>

                        <div class="col-md-12">
                            <h5 class="card-subtitle">Javascript</h5>
                            <textarea id="ace_javaScript_jquery" class="ace-editor w-100">
var url = window.location.pathname.split("/");
var id = url[url.length - 1];
var token = $("input[name='_token']").val();
    $(document).ready(function(){
        $.ajax({
            url: "/angularjs/get-class",
            method: 'GET',
            dataType:'json',
            data: {
                _token: token
            },
            success: function (response) {
                $("#class").html('');
                $.each(response, function (key, value) {
                    $("#class").append(
                        "<option value=" + value.id + ">" + value.class_name + "</option>"
                    );
                });
            }
        });
    });
    $(document).ajaxStop(function () {
        $.ajax({
            url: "/angularjs/get-student",
            method: 'POST',
            dataType:'json',
            data: {
                id: id,
                _token: token
            },
            success: function (response) {
                $('#name').val(response.name);
                $('#gender').val(response.gender);
                $('#birthday').val(response.birthday);
                $("#class").val(response.class_id).attr('selected','selected');
            }
        });
    });
    $('#updateStudent').click(function(){
        $.ajax({
        url: "/angularjs/update-student-jquery",
        method: 'POST',
        data: {
            id: id,
            name: $('#name').val(),
            gender: $('#gender').val(),
            birthday: $('#birthday').val(),
            class_id: $('#class').val(),
            _token: token
        },
        success: function (response) {
            $("#message").show();
        }
        });
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
                            <h5 class="card-subtitle">Controller</h5>
                            <textarea id="ace_php" class="ace-editor w-100">
public function getStudent(Request $request)
{
    $id = $request->id;
    $students = Student::find($id);
    return json_encode($students);
}

public function getClass()
{
    $class = Classes::all();
    return json_encode($class);
}

public function updateStudent(Request $request)
{
    $student = $request->student;
    Student::whereId($student['id'])->update($student);
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
public function getStudent(Request $request)
{
    $id = $request->id;
    $students = Student::find($id);
    return json_encode($students);
}

public function getClass()
{
    $class = Classes::all();
    return json_encode($class);
}

public function updateStudentJquery(Request $request)
{
    Student::whereId($request->id)->update($request->except('_token'));
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
    <script src="{{ url($url . '/angularjs/Controller/StudentController.js')}}"></script>
    <script src="{{ url($url . '/vendors/ace-builds/src-min/ace.js')}}"></script>
    <script src="{{ url($url . '/js/ace.js')}}"></script>
    <script>
    var url = window.location.pathname.split("/");
    var id = url[url.length - 1];
    var token = $("input[name='_token']").val();
        $(document).ready(function(){
            $.ajax({
                url: "/angularjs/get-class",
                method: 'GET',
                dataType:'json',
                data: {
                    _token: token
                },
                success: function (response) {
                    $("#class").html('');
                    $.each(response, function (key, value) {
                        $("#class").append(
                            "<option value=" + value.id + ">" + value.class_name + "</option>"
                        );
                    });
                }
            });
        });
        $(document).ready(function () {
            $.ajax({
                url: "/angularjs/get-student",
                method: 'POST',
                dataType:'json',
                data: {
                    id: id,
                    _token: token
                },
                success: function (response) {
                    $('#name').val(response.name);
                    $('#gender').val(response.gender);
                    $('#birthday').val(response.birthday);
                    $("#class").val(response.class_id).attr('selected','selected');
                }
            });
        });

        $('#updateStudent').click(function(){
            $.ajax({
            url: "/angularjs/update-student-jquery",
            method: 'POST',
            data: {
                id: id,
                name: $('#name').val(),
                gender: $('#gender').val(),
                birthday: $('#birthday').val(),
                class_id: $('#class').val(),
                _token: token
            },
            success: function (response) {
                $("#message").show();
            }
            });
        });
    </script>
@endpush
