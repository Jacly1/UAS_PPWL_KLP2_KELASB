@extends('layouts.app')
@extends('layouts.backend')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog add-category-modal ">
        <!-- Modal content-->
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title text-center">Assign New Task</h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" action="" method="post" autocomplete="off">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-5">Task Title</label>
                                    <div class="col-sm-7">
                                        <input type="text" placeholder="Task Title" id="task_title" name="task_title" list="expense" class="form-control" id="default" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">Task Description</label>
                                    <div class="col-sm-7">
                                        <textarea name="task_description" id="task_description" placeholder="Text Deskcription" class="form-control" rows="5" cols="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">Start Time</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="t_start_time" id="t_start_time" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">End Time</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="t_end_time" id="t_end_time" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-5">Assign To</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" name="assign_to" id="aassign_to" required>
                                            <option value="">Select Employee...</option>
                                            <option value="1">Employee 1</option>
                                            <option value="2">Employee 2</option>
                                            <option value="3">Employee 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-3">
                                        <button type="submit" name="add_task_post" class="btn btn-success-custom">Assign Task</button>
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-danger-custom" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="well well-custom">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="btn-group">
                        <div class="btn-group">
                            <button class="btn btn-warning btn-menu" data-toggle="modal" data-target="#myModal">Assign New Task</button>
                        </div>
                    </div>
                </div>
            </div>
            <center><h3>Task Management Section</h3></center>
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="table-responsive">
                <table class="table table-codensed table-custom">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task Title</th>
                            <th>Assigned To</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Task 1</td>
                            <td>Employee 1</td>
                            <td>Start Time 1</td>
                            <td>End Time 1</td>
                            <td>In Progress</td>
                            <td>
                                <a title="Update Task" href="#"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;
                                <a title="View" href="#"><span class="glyphicon glyphicon-folder-open"></span></a>&nbsp;&nbsp;
                                <a title="Delete" href="#"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Task 2</td>
                            <td>Employee 2</td>
                            <td>Start Time 2</td>
                            <td>End Time 2</td>
                            <td>Completed</td>
                            <td>
                                <a title="Update Task" href="#"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;
                                <a title="View" href="#"><span class="glyphicon glyphicon-folder-open"></span></a>&nbsp;&nbsp;
                                <a title="Delete" href="#"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Task 3</td>
                            <td>Employee 3</td>
                            <td>Start Time 3</td>
                            <td>End Time 3</td>
                            <td>Incomplete</td>
                            <td>
                                <a title="Update Task" href="#"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;
                                <a title="View" href="#"><span class="glyphicon glyphicon-folder-open"></span></a>&nbsp;&nbsp;
                                <a title="Delete" href="#"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">
    flatpickr('#t_start_time', {
        enableTime: true
    });

    flatpickr('#t_end_time', {
        enableTime: true
    });
</script>

@endsection
