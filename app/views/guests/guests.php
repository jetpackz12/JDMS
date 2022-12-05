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
                            <input id="search" class="form-control" type="text" name="search" placeholder="You can use room#/fullname/address for searching">
                        </div>
                        <div class="col-2">
                            <button class="btn btn-defualt" data-toggle="modal" data-target="#modal-addGuests"> <i class="nav-icon fas fa-plus-circle"></i> Add Guests</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Room #</th>
                                        <th>Fullname</th>
                                        <th>Address</th>
                                        <th>Contact#</th>
                                        <th>Duration</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Juan Dela Cruz</td>
                                        <td>Poblacion</td>
                                        <td>09630075173</td>
                                        <td>3 hours</td>
                                        <td>₱450</td>
                                        <td>Active</td>
                                        <td>
                                            <button class="btn btn-block" data-toggle="modal" data-target="#modal-editGuests"><i class="fas fa-edit"> Edit</i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mary Jane Abik</td>
                                        <td>Ubay</td>
                                        <td>09630075173</td>
                                        <td>4 hours</td>
                                        <td>₱500</td>
                                        <td>Active</td>
                                        <td>
                                            <button class="btn btn-block"><i class="fas fa-edit"> Edit</i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Kiver Bolay-og Bola</td>
                                        <td>Talibon</td>
                                        <td>09630075173</td>
                                        <td>3 hours</td>
                                        <td>₱450</td>
                                        <td>Active</td>
                                        <td>
                                            <button class="btn btn-block"><i class="fas fa-edit"> Edit</i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-addGuests">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><i class="fas fa-plus-circle"> Add Guests</i></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labelroom" for="room">Room:</label>
                                                <select class="form-control" name="room" id="room">
                                                    <option value="" selected disabled>--Select Room--</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labeladdress" for="address">Address:</label>
                                                <input class="form-control" id="address" type="text" name="address" placeholder="Ex. Poblacion" require>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labelfname" for="fname">Firstname:</label>
                                                <input class="form-control" id="fname" type="text" name="fname" placeholder="Ex. Juan" require>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labelcontact" for="contact">Contact #:</label>
                                                <span id="spancontact" class="labelcolorinvalid">&nbspInvalid Contact Number!</span>
                                                <input class="form-control" id="contact" type="number" name="contact" placeholder="Ex. 9630075784" 
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                maxlength = "11"
                                                require>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labelmname" for="mname">Middlename:</label>
                                                <input class="form-control" id="mname" type="text" name="mname" placeholder="Ex. Dela" require>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labelduration" for="duration">Duration Hour:</label>
                                                <input class="form-control" id="duration" type="number" name="duration" placeholder="Ex. 2" require>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labellname" for="lname">Lastname:</label>
                                                <input class="form-control" id="lname" type="text" name="lname" placeholder="Ex. Cruz" require>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labelpayment" for="payment">Payment:</label>
                                                <input class="form-control" id="payment" type="number" name="payment" placeholder="Ex. 500" require>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="submit" id="save" class="btn btn-primary">Save</button>
                                    <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-editGuests">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><i class="fas fa-edit"> Edit Guests</i></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labele_room" for="e_room">Room:</label>
                                                <select class="form-control" name="e_room" id="e_room" require>
                                                    <option value="" selected disabled>--Select Room--</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labele_address" for="e_address">Address:</label>
                                                <input class="form-control" id="e_address" type="text" name="e_address" placeholder="Ex. Poblacion" require>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labele_fname" for="e_fname">Firstname:</label>
                                                <input class="form-control" id="e_fname" type="text" name="e_fname" placeholder="Ex. Juan" require>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labele_contact" for="e_contact">Contact #:</label>
                                                <span id="spane_contact" class="labelcolorinvalid">&nbspInvalid Contact Number!</span>
                                                <input class="form-control" id="e_contact" type="number" name="e_contact" placeholder="Ex. 9630075784" 
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                maxlength = "11"
                                                require>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labele_mname" for="e_mname">Middlename:</label>
                                                <input class="form-control" id="e_mname" type="text" name="e_mname" placeholder="Ex. Dela" require>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labele_duration" for="e_duration">Duration Hour:</label>
                                                <input class="form-control" id="e_duration" type="number" name="e_duration" placeholder="Ex. 2" require>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labele_lname" for="e_lname">Lastname:</label>
                                                <input class="form-control" id="e_lname" type="text" name="e_lname" placeholder="Ex. Cruz" require>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label id="labele_payment" for="e_payment">Payment:</label>
                                                <input class="form-control" id="e_payment" type="number" name="e_payment" placeholder="Ex. 500" require>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                                <label id="labelstatus" for="status">Status:</label>
                                                <select class="form-control" name="status" id="status" require>
                                                    <option value="0">Not Active</option>
                                                    <option value="1">Active</option>
                                                </select>
                                            </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="submit" id="update" class="btn btn-primary">Save</button>
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
            $('#room').prop('selectedIndex',0);
            $('#address').val('');
            $('#fname').val('');
            $('#contact').val('');
            $('#mname').val('');
            $('#duration').val('');
            $('#lname').val('');
            $('#payment').val('');

            $('#labelroom').removeClass('labelcolorinputted');
            $('#labeladdress').removeClass('labelcolorinputted');
            $('#labelfname').removeClass('labelcolorinputted');
            $('#labelcontact').removeClass('labelcolorinputted');
            $('#labelmname').removeClass('labelcolorinputted');
            $('#labelduration').removeClass('labelcolorinputted');
            $('#labellname').removeClass('labelcolorinputted');
            $('#labelpayment').removeClass('labelcolorinputted');
        });
    </script>
    <script>
        $('#guests').addClass('sidebaractive');
        $('#guestsp').addClass('sidebarblacktext');
        $('#guestsi').addClass('sidebarblacktext');

        $('#room').change(function(event){
            var roomvalue = $('#room').val();
            if(roomvalue.length > 0){
                $('#labelroom').addClass('labelcolorinputted');
            }else{
                $('#labelroom').removeClass('labelcolorinputted');
            }
        });

        $('#address').keyup(function(event){
            var addressvalue = $('#address').val();
            if(addressvalue.length > 0){
                $('#labeladdress').addClass('labelcolorinputted');
            }else{
                $('#labeladdress').removeClass('labelcolorinputted');
            }
        });

        $('#fname').keyup(function(event){
            var fnamevalue = $('#fname').val();
            if(fnamevalue.length > 0){
                $('#labelfname').addClass('labelcolorinputted');
            }else{
                $('#labelfname').removeClass('labelcolorinputted');
            }
        });

        $('#contact').keyup(function(event){
            var contactvalue = $('#contact').val();
            if(contactvalue.length > 0){
                $('#labelcontact').addClass('labelcolorinputted');
                if(contactvalue.charAt(0) != '9'){
                    $('#spancontact').show();
                    $('#save').removeClass('btn-primary');
                    $('#save').addClass('disabled btn-secondary');
                }
            }else{
                $('#labelcontact').removeClass('labelcolorinputted');
                $('#spancontact').hide();
                $('#save').removeClass('disabled btn-secondary');
                $('#save').addClass('btn-primary');
            }
        });

        $('#mname').keyup(function(event){
            var mnamevalue = $('#mname').val();
            if(mnamevalue.length > 0){
                $('#labelmname').addClass('labelcolorinputted');
            }else{
                $('#labelmname').removeClass('labelcolorinputted');
            }
        });

        $('#duration').keyup(function(event){
            var durationvalue = $('#duration').val();
            if(durationvalue.length > 0){
                $('#labelduration').addClass('labelcolorinputted');
            }else{
                $('#labelduration').removeClass('labelcolorinputted');
            }
        });

        $('#lname').keyup(function(event){
            var lnamevalue = $('#lname').val();
            if(lnamevalue.length > 0){
                $('#labellname').addClass('labelcolorinputted');
            }else{
                $('#labellname').removeClass('labelcolorinputted');
            }
        });

        $('#payment').keyup(function(event){
            var paymentvalue = $('#payment').val();
            if(paymentvalue.length > 0){
                $('#labelpayment').addClass('labelcolorinputted');
            }else{
                $('#labelpayment').removeClass('labelcolorinputted');
            }
        });


        $('#e_room').change(function(event){
            var e_roomvalue = $('#e_room').val();
            if(e_roomvalue.length > 0){
                $('#labele_room').addClass('labelcolorinputted');
            }else{
                $('#labele_room').removeClass('labelcolorinputted');
            }
        });

        $('#e_address').keyup(function(event){
            var e_addressvalue = $('#e_address').val();
            if(e_addressvalue.length > 0){
                $('#labele_address').addClass('labelcolorinputted');
            }else{
                $('#labele_address').removeClass('labelcolorinputted');
            }
        });

        $('#e_fname').keyup(function(event){
            var e_fnamevalue = $('#e_fname').val();
            if(e_fnamevalue.length > 0){
                $('#labele_fname').addClass('labelcolorinputted');
            }else{
                $('#labele_fname').removeClass('labelcolorinputted');
            }
        });

        $('#e_contact').keyup(function(event){
            var e_contactvalue = $('#e_contact').val();
            if(e_contactvalue.length > 0){
                $('#labele_contact').addClass('labelcolorinputted');
                if(e_contactvalue.charAt(0) != '9'){
                    $('#spane_contact').show();
                    $('#update').removeClass('btn-primary');
                    $('#update').addClass('disabled btn-secondary');
                }
            }else{
                $('#labele_contact').removeClass('labelcolorinputted');
                $('#spane_contact').hide();
                $('#update').removeClass('disabled btn-secondary');
                $('#update').addClass('btn-primary');
            }
        });

        $('#e_mname').keyup(function(event){
            var e_mnamevalue = $('#e_mname').val();
            if(e_mnamevalue.length > 0){
                $('#labele_mname').addClass('labelcolorinputted');
            }else{
                $('#labele_mname').removeClass('labelcolorinputted');
            }
        });

        $('#e_duration').keyup(function(event){
            var e_durationvalue = $('#e_duration').val();
            if(e_durationvalue.length > 0){
                $('#labele_duration').addClass('labelcolorinputted');
            }else{
                $('#labele_duration').removeClass('labelcolorinputted');
            }
        });

        $('#e_lname').keyup(function(event){
            var e_lnamevalue = $('#e_lname').val();
            if(e_lnamevalue.length > 0){
                $('#labele_lname').addClass('labelcolorinputted');
            }else{
                $('#labele_lname').removeClass('labelcolorinputted');
            }
        });

        $('#e_payment').keyup(function(event){
            var e_paymentvalue = $('#e_payment').val();
            if(e_paymentvalue.length > 0){
                $('#labele_payment').addClass('labelcolorinputted');
            }else{
                $('#labele_payment').removeClass('labelcolorinputted');
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
            var input, filter, table, tr, tdRoom, tdFullname, tdAddress, i, txtValueRoom, txtValueFullname, txtValueAddress;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("example1");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                tdRoom = tr[i].getElementsByTagName("td")[0];
                tdFullname = tr[i].getElementsByTagName("td")[1];
                tdAddress = tr[i].getElementsByTagName("td")[2];
                if (tdRoom) {
                    txtValueRoom = tdRoom.textContent || tdRoom.innerText;
                    txtValueFullname = tdFullname.textContent || tdFullname.innerText;
                    txtValueAddress = tdAddress.textContent || tdAddress.innerText;
                    if (txtValueRoom.toUpperCase().indexOf(filter) > -1 
                        || txtValueFullname.toUpperCase().indexOf(filter) > -1 
                        || txtValueAddress.toUpperCase().indexOf(filter) > -1) {

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