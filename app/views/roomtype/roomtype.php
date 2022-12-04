<!DOCTYPE html>
<html lang="en">
<head>
    <?php require PATH_VIEW.'components/head.php'?>
    <style>
        .content-wrapper{
            padding: 20px;
        }
        .row{
            padding: 5px;
        }
        #search{
            width: 100%;
        }
        button{
           width: 100%;
        }
        .btn{
            background-color: #4bd0cc;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php require PATH_VIEW.'components/top.php'?>
        <?php require PATH_VIEW.'components/side.php'?>
            <div class="content-wrapper">
                <section class="content">
                    <div class="row">
                        <div class="col-10">
                            <input id="search" class="form-control" type="text" name="search" placeholder="You can use room#/type for searching">
                        </div>
                        <div class="col-2">
                            <button class="btn btn-defualt" data-toggle="modal" data-target="#modal-addRoomType"> <i class="nav-icon fas fa-plus-circle"></i> Add Room</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Room #</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Standard</td>
                                        <td>Available</td>
                                        <td>
                                            <button class="btn btn-block" data-toggle="modal" data-target="#modal-editRoomType"><i class="fas fa-edit"> Edit</i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Premium</td>
                                        <td>Available</td>
                                        <td>
                                            <button class="btn btn-block"><i class="fas fa-edit"> Edit</i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Premium</td>
                                        <td>Available</td>
                                        <td>
                                            <button class="btn btn-block"><i class="fas fa-edit"> Edit</i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-addRoomType">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><i class="fas fa-plus-circle"> Add Room</i></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label id="labelroom_num" for="room_num">Room Number:</label>
                                        <span class="labelcolorinvalid" id="spanusername"> Invalid Room Number!</span>
                                        <input class="form-control" id="room_num" type="number" name="room_num" placeholder="Enter Room Number" require>
                                    </div>
                                    <div class="form-group">
                                        <label id="labeltype" for="type">Type:</label>
                                        <select class="form-control" name="type" id="type" require>
                                            <option value="" selected disabled>--Select Room Type--</option>
                                            <option value="Standard">Standard</option>
                                            <option value="Premium">Premium</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-editRoomType">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><i class="fas fa-edit"> Edit Room</i></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label id="labele_room_num" for="e_room_num">Room Number:</label>
                                        <span class="labelcolorinvalid" id="spanusername"> Invalid Room Number!</span>
                                        <input class="form-control" id="e_room_num" type="number" name="e_room_num" placeholder="Enter Room Number" require>
                                    </div>
                                    <div class="form-group">
                                        <label id="labele_type" for="e_type">Type:</label>
                                        <select class="form-control" name="e_type" id="e_type" require>
                                            <option value="Standard">Standard</option>
                                            <option value="Premium">Premium</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label id="labelstatus" for="status">Status:</label>
                                        <select class="form-control" name="status" id="status" require>
                                            <option value="0">Not Available</option>
                                            <option value="1">Available</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </div>
    <?php require PATH_VIEW.'components/script.php'?>
    <script>
         $('#close').click(function() {
            $('#room_num').val('');
            $('#type').prop('selectedIndex',0);

            $('#labelroom_num').removeClass('labelcolorinputted');
            $('#labeltype').removeClass('labelcolorinputted');
        });
    </script>
    <script>
        $('#room_type').addClass('sidebaractive');
        $('#room_typep').addClass('sidebarblacktext');
        $('#room_typei').addClass('sidebarblacktext');

        $('#room_num').keyup(function(event){
            var room_numvalue = $('#room_num').val();
            if(room_numvalue.length > 0){
                $('#labelroom_num').addClass('labelcolorinputted');
            }else{
                $('#labelroom_num').removeClass('labelcolorinputted');
            }
        });

        $('#type').change(function(event){
            var typevalue = $('#type').val();
            if(typevalue.length > 0){
                $('#labeltype').addClass('labelcolorinputted');
            }else{
                $('#labeltype').removeClass('labelcolorinputted');
            }
        });

        $('#e_room_num').keyup(function(event){
            var e_room_numvalue = $('#e_room_num').val();
            if(e_room_numvalue.length > 0){
                $('#labele_room_num').addClass('labelcolorinputted');
            }else{
                $('#labele_room_num').removeClass('labelcolorinputted');
            }
        });

        $('#e_type').change(function(event){
            var e_typevalue = $('#e_type').val();
            if(e_typevalue.length > 0){
                $('#labele_type').addClass('labelcolorinputted');
            }else{
                $('#labele_type').removeClass('labelcolorinputted');
            }
        });

        $('#status').change(function(event){
            var statusvalue = $('#status').val();
            if(statusvalue.length > 0){
                $('#labelstatus').addClass('labelcolorinputted');
            }else{
                $('#labelstatus').removeClass('labelcolorinputted');
            }
        });

    </script>

    <script>
        $(function () {
            $('#example1').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            });
        });
    </script>
    <script>
        $('#search').keyup(function(events){
            var input, filter, table, tr, tdRoom, tdType, i, txtValueRoom, txtValueType;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("example1");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                tdRoom = tr[i].getElementsByTagName("td")[0];
                tdType = tr[i].getElementsByTagName("td")[1];
                if (tdRoom) {
                txtValueRoom = tdRoom.textContent || tdRoom.innerText;
                txtValueType = tdType.textContent || tdType.innerText;
                if (txtValueRoom.toUpperCase().indexOf(filter) > -1
                    || txtValueType.toUpperCase().indexOf(filter) > -1) {

                    tr[i].style.display = "";

                } else {
                    tr[i].style.display = "none";
                }
                }       
            }
        });
    </script>
</body>
</html>