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
    <div class="row" ng-init='getStudents()'>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Update Student With AngularJS</h6>
                    <div class="alert alert" ng-class="classAlert" ng-if="message">
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
                            <select ng-init="getClass()" ng-model="student.class"
                                ng-options="data.class_name as data.class_name for data in class">
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" ng-click="updateStudent()">Update Student</button>
                        <button type="submit" class="btn btn-primary mr-2" ng-click="addStudent()">Add Student</button>
                        <button type="submit" class="btn btn-primary mr-2" ng-click="reset()">Reset</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">List Students</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="1">Filter All:</th>
                                    <th colspan="4"><input class="form-control" type="text" ng-model="filterTable"></th>
                                </tr>
                                <tr>
                                    <th>Filter Column:</th>
                                    <th><input class="form-control" type="text" ng-model="filterColumn.name"></th>
                                    <th>
                                        <select class="form-control" ng-model="filterColumn.gender">
                                            <option value="">All</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </th>
                                    <th><input class="form-control" type="text" ng-model="filterColumn.birthday"></th>
                                    <th><input class="form-control" type="text" ng-model="filterColumn.class"></th>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Birthday</th>
                                    <th>Class</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="student in students|filter: filterColumn| filter: filterTable|orderBy : 'name'">
                                    <th>@{{ $index+1 }}</th>
                                    <td>@{{ student.name }}</td>
                                    <td>@{{ student.gender}}</td>
                                    <td>@{{ student.birthday}}</td>
                                    <td>@{{ student.class}}</td>
                                    <td>
                                        <button class="btn btn-info" ng-click="editStudent(student)">Edit</button>
                                        <button class="btn btn-danger" ng-click="deleteStudent(student)">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
@endpush
