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
            width:  300px;
            height: 300px;
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
                                <option value="Standard">Standard</option>
                                <option value="Premium">Premium</option>
                                <option value="3">Reset</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-primary add" id="sort"><i class="nav-icon fas fa-search"></i> Sort</button>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-defualt add" data-toggle="modal" data-target="#modal-addRoomType"> <i class="nav-icon fas fa-plus-circle"></i> Add Room</button>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach($data['all'] as $data) {?>
                            <?php if(isset($_SESSION['sort'])){
                                if($_SESSION['sort'] == $data['type']){
                                ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                            Room: <?php echo $data['room_num'];?></h3>
                                            <br>
                                            <!-- /.card-tools -->
                                            <span>Description: <u> <?php echo $data['description'];?></u></span>
                                            <br>
                                            <span>Capacity: <u> <?php echo $data['occupies'] . "/" . $data['capacity'];?></u></span>
                                            <br>
                                            <span>Type: <u> <?php echo $data['type'];?></u></span>
                                        </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                    <div class="row">
                                        <a href="<?php echo $data['image'];?>" data-toggle="lightbox" data-title="Room  <?php echo $data['room_num'];?>" data-gallery="gallery">
                                            <img src="<?php echo $data['image'];?>" class="img-fluid mb-2 img" alt="white sample"/>
                                        </a>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                            <button type="submit" class="btn btn-primary add edit" data-toggle="modal" data-target="#modal-editRoomType" data-id="<?php echo $data['id']; ?>" ><i class="fas fa-edit"></i> Edit</button>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <?php
                                    }
                                } else {
                                ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                            Room: <?php echo $data['room_num'];?></h3>
                                            <br>
                                            <!-- /.card-tools -->
                                            <span>Description: <u> <?php echo $data['description'];?></u></span>
                                            <br>
                                            <span>Capacity: <u> <?php echo $data['occupies'] . "/" . $data['capacity'];?></u></span>
                                            <br>
                                            <span>Type: <u> <?php echo $data['type'];?></u></span>
                                        </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                    <div class="row">
                                        <a href="<?php echo $data['image'];?>" data-toggle="lightbox" data-title="Room 1" data-gallery="gallery">
                                            <img src="<?php echo $data['image'];?>" class="img-fluid mb-2 img" alt="white sample"/>
                                        </a>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                            <button type="submit" class="btn btn-primary add edit" data-toggle="modal" data-target="#modal-editRoomType" data-id="<?php echo $data['id']; ?>" ><i class="fas fa-edit"></i> Edit</button>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                             <?php       
                                }
                            ?>
                        <?php }?>
                    </div>

                    <div class="modal fade" id="modal-addRoomType">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><i class="fas fa-plus-circle"> Add Room</i></h4>
                                </div>
                                <form class="store" action="<?php echo ROOT; ?>rooms/store" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <img src="<?php echo ROOT.BOOTSTRAP; ?>img/imageicon.jpg" id="roomimage" class="img-fluid rounded mx-auto d-block" alt="room image">
                                        
                                        <div class="form-group">
                                            <label id="labelimage" for="image">Room Image:</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image" required>
                                                    <label id="imagelabel" class="custom-file-label" for="image">Choose Image</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="labelroom_num" for="room_num">Room Number:</label>
                                            <span class="labelcolorinvalid" id="spanroom"> Invalid Room Number!</span>
                                            <input class="form-control" id="room_num" type="number" name="room_num" placeholder="Enter Room Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label id="labeldescription" for="description">Room Description:</label>
                                            <input class="form-control" id="description" type="text" name="description" placeholder="Enter Room Description" required>
                                        </div>
                                        <div class="form-group">
                                            <label id="labelcapacity" for="capacity">Room Capacity:</label>
                                            <input class="form-control" id="capacity" type="number" name="capacity" placeholder="Enter Room capacity" required>
                                        </div>
                                        <div class="form-group">
                                            <label id="labeltype" for="type">Type:</label>
                                            <select class="form-control" name="type" id="type" required>
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
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-editRoomType">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><i class="fas fa-edit"> Edit Room</i></h4>
                                </div>
                                <form class="update" action="<?php echo ROOT; ?>rooms/update" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <img src="<?php echo ROOT.BOOTSTRAP; ?>img/imageicon.jpg" id="roome_image" class="img-fluid rounded mx-auto d-block" alt="room image">
                                            <div class="form-group">
                                                <label id="labele_image" for="e_image">Room Image:</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="e_image" name="e_image">
                                                        <label id="e_imagelabel" class="custom-file-label" for="e_image">Choose Image</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="text" name="e_id" id="e_id" hidden>
                                            <input type="text" name="num_room" id="num_room" hidden>
                                            <div class="form-group">
                                                <label id="labele_room_num" for="e_room_num">Room Number:</label>
                                                <span class="labelcolorinvalid" id="spane_room"> This Room Number is in use!</span>
                                                <input class="form-control" id="e_room_num" type="number" name="e_room_num" placeholder="Enter Room Number" required>
                                            </div>
                                            <div class="form-group">
                                                <label id="labele_description" for="e_description">Room Description:</label>
                                                <input class="form-control" id="e_description" type="text" name="e_description" placeholder="Enter Room Description" required>
                                            </div>
                                            <div class="form-group">
                                                <label id="labele_capacity" for="e_capacity">Room Capacity:</label>
                                                <input class="form-control" id="e_capacity" type="number" name="e_capacity" placeholder="Enter Room capacity" required>
                                            </div>
                                            <div class="form-group">
                                                <label id="labele_type" for="e_type">Type:</label>
                                                <select class="form-control" name="e_type" id="e_type" required>
                                                    <option value="" selected disabled>--Select Room Type--</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="Premium">Premium</option>
                                                </select>
                                            </div>
                                        <!-- <div class="form-group">
                                            <label id="labelstatus" for="status">Status:</label>
                                            <select class="form-control" name="status" id="status" require>
                                                <option value="0">Not Available</option>
                                                <option value="1">Available</option>
                                            </select>
                                        </div> -->
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="submit" id="update" class="btn btn-primary add">Save</button>
                                        <button type="button" class="btn btn-default add" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
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

            $('#imagelabel').text(imagename[0].name);
            $('#labelimage').addClass('labelcolorinputted');
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#roomimage').attr('src', e.target.result);
            }
            reader.readAsDataURL(imagename[0]);

         });
         $('#e_image').change(function() {
            var imagename = $('#e_image').prop('files');

            $('#e_imagelabel').text(imagename[0].name);
            $('#labele_image').addClass('labelcolorinputted');
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#roome_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(imagename[0]);

         });
    </script>
    <script>
        $('#rooms').addClass('sidebaractive');
        $('#roomsp').addClass('sidebarblacktext');
        $('#roomsi').addClass('sidebarblacktext');
        
        var arr = []

        <?php foreach($data2['all'] as $data){ ?>
            arr.push("<?php echo $data['room_num']; ?>");
        <?php } ?>

        $('#room_num').keyup(function(event){
            var room_numvalue = $('#room_num').val();
            if(room_numvalue.length > 0){
                $('#labelroom_num').addClass('labelcolorinputted');
                $('#spanroom').hide();
            }else{
                $('#labelroom_num').removeClass('labelcolorinputted');
                $('#spanroom').hide();
            }
        });

        $('#description').keyup(function(event){
            var descriptionvalue = $('#description').val();
            if(descriptionvalue.length > 0){
                $('#labeldescription').addClass('labelcolorinputted');
            }else{
                $('#labeldescription').removeClass('labelcolorinputted');
            }
        });

        $('#capacity').keyup(function(event){
            var capacityvalue = $('#capacity').val();
            if(capacityvalue.length > 0){
                $('#labelcapacity').addClass('labelcolorinputted');
            }else{
                $('#labelcapacity').removeClass('labelcolorinputted');
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
            var e_room_id = $('#num_room').val();
            var index = arr.indexOf(e_room_id);
            if (index > -1) {
                arr.splice(index, 1);
            }
            if(e_room_numvalue.length > 0){
                $('#labele_room_num').addClass('labelcolorinputted');

                // $('.update')removeClass('disabled');
                // $('#spane_room').hide();
                // if(arr.includes(e_room_numvalue)){
                //     $('#spane_room').show();
                //     $('.update')addClass('disabled');
                // }
                switch (arr.includes(e_room_numvalue)){
                    case true:
                        $('#spane_room').show();
                        $('#update').removeClass('btn-primary');
                        $('#update').addClass('btn-secondary');
                        $('#update').prop('disabled', true);
                    break;
                    case false:
                        $('#spane_room').hide();
                        $('#update').removeClass('btn-secondary');
                        $('#update').addClass('btn-primary');
                        $('#update').prop('disabled', false);
                    break;
                }

            }else{
                $('#labele_room_num').removeClass('labelcolorinputted');
                $('#spane_room').hide();
                $('#update').prop('disabled', false);
            }
        });

        $('#e_description').keyup(function(event){
            var e_descriptionvalue = $('#e_description').val();
            if(e_descriptionvalue.length > 0){
                $('#labele_description').addClass('labelcolorinputted');
            }else{
                $('#labele_description').removeClass('labelcolorinputted');
            }
        });

        $('#e_capacity').keyup(function(event){
            var e_capacityvalue = $('#e_capacity').val();
            if(e_capacityvalue.length > 0){
                $('#labele_capacity').addClass('labelcolorinputted');
            }else{
                $('#labele_capacity').removeClass('labelcolorinputted');
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
       $('#sort').click(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500
            });

            var fd = new FormData();
            var sort = $('#transaction option:selected').val();
            fd.append('sort',sort);
            switch (sort){
                case "":
                    Toast.fire({
                            icon: 'warning',
                            title: 'You need to select availability for sorting!'
                        });
                            setTimeout(function() {
                        },1500);
                break;
                default:
                        ajax();
            }
            
           function ajax(){
                    $.ajax({
                        url      : "<?php echo ROOT; ?>rooms/sort",
                        type     : "POST",
                        cache    : false,
                        data: fd,
                        contentType: false,
                        processData: false,
                        success  : function(data) {

                        // alert(data);
                        // console.log(data);

                        Toast.fire({
                                icon: 'success',
                                title: '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSort Success!'
                            });
                                setTimeout(function() {
                                location.reload();
                            },1500);
                        }
                    });
           }

        });
    </script>

    <script>
        $('.store').on('submit',function(e){
        e.preventDefault();
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500
        });
        
        var fd = new FormData();
        var files = $('#image')[0].files;
        var roomnum, description, capacity, type;
        roomnum = $('#room_num').val();
        description = $('#description').val();
        capacity = $('#capacity').val();
        type = $('#type option:selected').val();

        
        fd.append('file',files[0]);
        fd.append('roomnum',roomnum);
        fd.append('description',description);
        fd.append('capacity',capacity);
        fd.append('type',type);

        $.ajax({
            type     : "POST",
            cache    : false,
            url      : $(this).attr('action'),
            data: fd,
            contentType: false,
            processData: false,
            success  : function(data) {

            // alert(data);
            // console.log(data);

                switch (data){
                    case "success":
                        Toast.fire({
                            icon: 'success',
                            title: '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAdd room success!'
                        });
                            setTimeout(function() {
                            // body...
                            location.reload();
                        },1500);
                    break;
                    case "failed":
                        $('#spanroom').show();
                    break;
                    default:
                        Toast.fire({
                            icon: 'error',
                            title: 'Failed to Add Room view console log!'
                        });
                            setTimeout(function() {
                            // body...
                            // location.reload();
                            console.log(data);
                        },1500);
                }

            }
        });

    });
    </script>

    <script>
        $('.update').on('submit',function(e){
        e.preventDefault();
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500
        });
        
        var fd = new FormData();
        var files = $('#e_image')[0].files;
        var id, roomnum, description, capacity, type;
        id = $('#e_id').val();
        roomnum = $('#e_room_num').val();
        description = $('#e_description').val();
        capacity = $('#e_capacity').val();
        type = $('#e_type option:selected').val();

        
        fd.append('file',files[0]);
        fd.append('id',id);
        fd.append('roomnum',roomnum);
        fd.append('description',description);
        fd.append('capacity',capacity);
        fd.append('type',type);

        $.ajax({
            type     : "POST",
            cache    : false,
            url      : $(this).attr('action'),
            data: fd,
            contentType: false,
            processData: false,
            success  : function(data) {

            // alert(data);
            // console.log(data);

                switch (data){
                    case "success":
                        Toast.fire({
                            icon: 'success',
                            title: '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUpdate room success!'
                        });
                            setTimeout(function() {
                            // body...
                            location.reload();
                        },1500);
                    break;
                    case "failed":
                        $('#spane_room').show();
                    break;
                    default:
                        Toast.fire({
                            icon: 'error',
                            title: 'Failed to Update Room view console log!'
                        });
                            setTimeout(function() {
                            // body...
                            // location.reload();
                            console.log(data);
                        },1500);
                }

            }
        });

    });
    </script>

    <script>
        $(".edit").click(function(){
        var id = $(this).attr('data-id');
        // console.log(id);
        $.ajax({
          type:'post',
          url: '<?php echo ROOT; ?>rooms/edit',
          data: {id:id},
          dataType:'json',
          success:function(data) {

            // console.log(data);
            $('#roome_image').attr('src', data.image);
            $("#e_imagelabel").text(data.image);
            $("#num_room").val(data.room_num);
            $("#e_room_num").val(data.room_num);
            $("#e_description").val(data.description);
            $("#e_capacity").val(data.capacity);
            $("#e_type").val(data.type);
            $('#e_id').val(data.id);
            // $("#status").val(data.status);

          }

        });
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