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
        .add{
           width: 100%;
            background-color: #4bd0cc;
        }
        .img {
            width: 200px;
            height: 200px;
            object-fit: cover;
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
                        <div class="col-5">
                            <select class="form-control" name="transaction" id="transaction" require>
                                <option value="" selected disabled>--Sort Availability--</option>
                                <option value="1">Occupy</option>
                                <option value="2">Available</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-defualt add"><i class="nav-icon fas fa-search"></i> Sort</button>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-defualt add" data-toggle="modal" data-target="#modal-addRoomType"> <i class="nav-icon fas fa-plus-circle"></i> Add Room</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><span class="text-success">(Occupy)</span> Room 1</h3>
                                    <br>
                                    <!-- /.card-tools -->
                                    <span>Description: <u> 4 Double Bed or 4 Twin Bed</u></span>
                                </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                               <div class="row">
                                <a href="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" data-toggle="lightbox" data-title="Room 1" data-gallery="gallery">
                                    <img src="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" class="img-fluid mb-2" alt="white sample"/>
                                </a>
                               </div>
                               <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary add"><i class="fas fa-edit"></i> Edit</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><span class="text-success">(Occupy)</span> Room 1</h3>
                                    <br>
                                    <!-- /.card-tools -->
                                    <span>Description: <u> 4 Double Bed or 4 Twin Bed</u></span>
                                </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                               <div class="row">
                                <a href="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" data-toggle="lightbox" data-title="Room 1" data-gallery="gallery">
                                    <img src="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" class="img-fluid mb-2" alt="white sample"/>
                                </a>
                               </div>
                               <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary add"><i class="fas fa-edit"></i> Edit</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><span class="text-success">(Occupy)</span> Room 1</h3>
                                    <br>
                                    <!-- /.card-tools -->
                                    <span>Description: <u> 4 Double Bed or 4 Twin Bed</u></span>
                                </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                               <div class="row">
                                <a href="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" data-toggle="lightbox" data-title="Room 1" data-gallery="gallery">
                                    <img src="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" class="img-fluid mb-2" alt="white sample"/>
                                </a>
                               </div>
                               <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary add"><i class="fas fa-edit"></i> Edit</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><span class="text-primary">(Available)</span> Room 1</h3>
                                    <br>
                                    <!-- /.card-tools -->
                                    <span>Description: <u> 4 Double Bed or 4 Twin Bed</u></span>
                                </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                               <div class="row">
                                <a href="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" data-toggle="lightbox" data-title="Room 1" data-gallery="gallery">
                                    <img src="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" class="img-fluid mb-2" alt="white sample"/>
                                </a>
                               </div>
                               <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary add"><i class="fas fa-edit"></i> Edit</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><span class="text-primary">(Available)</span> Room 1</h3>
                                    <br>
                                    <!-- /.card-tools -->
                                    <span>Description: <u> 4 Double Bed or 4 Twin Bed</u></span>
                                </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                               <div class="row">
                                <a href="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" data-toggle="lightbox" data-title="Room 1" data-gallery="gallery">
                                    <img src="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" class="img-fluid mb-2" alt="white sample"/>
                                </a>
                               </div>
                               <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary add"><i class="fas fa-edit"></i> Edit</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><span class="text-primary">(Available)</span> Room 1</h3>
                                    <br>
                                    <!-- /.card-tools -->
                                    <span>Description: <u> 4 Double Bed or 4 Twin Bed</u></span>
                                </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                               <div class="row">
                                <a href="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" data-toggle="lightbox" data-title="Room 1" data-gallery="gallery">
                                    <img src="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" class="img-fluid mb-2" alt="white sample"/>
                                </a>
                               </div>
                               <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary add"><i class="fas fa-edit"></i> Edit</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>

                    <div class="modal fade" id="modal-addRoomType">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><i class="fas fa-plus-circle"> Add Room</i></h4>
                                </div>
                                <div class="modal-body">

                                    <img src="<?php echo ROOT.BOOTSTRAP; ?>img/imageicon.jpg" id="roomimage" class="img-fluid rounded mx-auto d-block" alt="room1">
                                    
                                    <div class="form-group">
                                        <label for="image">Room Image:</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label id="labelimage" class="custom-file-label" for="image">Choose Image</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label id="labelroom_num" for="room_num">Room Number:</label>
                                        <span class="labelcolorinvalid" id="spanusername"> Invalid Room Number!</span>
                                        <input class="form-control" id="room_num" type="number" name="room_num" placeholder="Enter Room Number" require>
                                    </div>
                                    <div class="form-group">
                                        <label id="labeldescription" for="description">Room Description:</label>
                                        <input class="form-control" id="description" type="number" name="description" placeholder="Enter Room Description" require>
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
                                    <button type="submit" class="btn btn-primary add">Save</button>
                                    <button type="button" id="close" class="btn btn-default add" data-dismiss="modal">Close</button>
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
                                    <button type="submit" class="btn btn-primary add">Save</button>
                                    <button type="button" class="btn btn-default add" data-dismiss="modal">Close</button>
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
         $('#image').change(function() {
            var imagename = $('#image').prop('files');

            $('#labelimage').text(imagename[0].name);

          // console.log ($('#image').prop('files'));

          var reader = new FileReader();

            reader.onload = function (e) {
               $('#roomimage').attr('src', e.target.result);
            }
           reader.readAsDataURL(imagename[0]);

         });
    </script>
    <script>
        $('#rooms').addClass('sidebaractive');
        $('#roomsp').addClass('sidebarblacktext');
        $('#roomsi').addClass('sidebarblacktext');

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
        $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
            });
        })
    </script>
</body>
</html>