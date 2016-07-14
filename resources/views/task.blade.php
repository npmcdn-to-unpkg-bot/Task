<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Task Management</title>

    <!-- Bootstrap core CSS -->
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Task Management</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Task <span class="sr-only">(current)</span></a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Task Management</h1>

            <div class="row">
                <div class="col-lg-12">
                    <form class="form">
                        <div class="form-group">
                            <label>Task Name : </label>
                            <input type="text" class="form-control" v-model="taskForm.name"/>
                        </div>

                        <button v-on:click="addTask()" type="button" class="btn btn-primary">Add</button>

                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>

<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="/bower_components/holderjs/holder.min.js"></script>

<script src="/bower_components/vue/dist/vue.min.js"></script>
<script src="/bower_components/vue-resource/dist/vue-resource.min.js"></script>

<script type="text/javascript">
    var app = new Vue({
        el: "body",
        data: {
            taskForm: {},
        },
        methods: {
            addTask: function () {
                this.$http.post('/task', this.taskForm).then(function (r) {
                    console.log(r);
                })
            },
        },
        ready: function () {
            console.log("hello world");
        }
    })
</script>

</body>
</html>
