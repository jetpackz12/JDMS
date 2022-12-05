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
                            <input id="search" class="form-control" type="text" name="search" placeholder="You can use room#/tenants for searching">
                        </div>
                        <div class="col-2">
                            <button class="btn btn-defualt" data-toggle="modal" data-target="#modal-addPayments"> <i class="nav-icon fas fa-plus-circle"></i> Add Payment</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Room #</th>
                                        <th>Tenants</th>
                                        <th>Unit Consumed</th>
                                        <th>Amount</th>
                                        <th>Due Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Juan Dela Cruz</td>
                                        <td>435</td>
                                        <td>₱750</td>
                                        <td>11/17/2022</td>
                                        <td>
                                            <button class="btn btn-block" data-toggle="modal" data-target="#modal-editPayments"><i class="fas fa-edit"> Edit</i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mary Jane Abik</td>
                                        <td>435</td>
                                        <td>₱750</td>
                                        <td>11/17/2022</td>
                                        <td>
                                            <button class="btn btn-block" data-toggle="modal" data-target="#modal-editPayments"><i class="fas fa-edit"> Edit</i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Kiver Bolay-og Bola</td>
                                        <td>435</td>
                                        <td>₱750</td>
                                        <td>11/17/2022</td>
                                        <td>
                                            <button class="btn btn-block" data-toggle="modal" data-target="#modal-editPayments"><i class="fas fa-edit"> Edit</i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-addPayments">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><i class="fas fa-plus-circle"> Add Payments</i></h4>
                                </div>
                                <div class="modal-body">
                                            <div class="form-group">
                                                <label id="labeltenant" for="tenant">Tenant:</label>
                                                <select class="form-control select2bs4" name="tenant" id="tenant" style="width: 100%;" require>
                                                    <option value="" selected="selected" disabled>--Select Tenant--</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label id="labelunit_consumed" for="unit_consumed">Unit Consumed:</label>
                                                <input class="form-control" id="unit_consumed" type="number" name="unit_consumed" placeholder="Ex. 435" require>
                                            </div>
                                            <div class="form-group">
                                                <label id="labelamount" for="amount">Amount:</label>
                                                <input class="form-control" id="amount" type="number" name="amount" placeholder="Ex. 450" require>
                                            </div>
                                            <div class="form-group">
                                                <label id="labeldue_date" for="due_date">Due Date:</label>
                                                <input class="form-control" id="due_date" type="date" name="due_date" require>
                                            </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="submit" id="save" class="btn btn-primary">Save</button>
                                    <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-editPayments">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><i class="fas fa-plus-circle"> Edit Payments</i></h4>
                                </div>
                                <div class="modal-body">
                                            <div class="form-group">
                                                <label id="labele_tenant" for="e_tenant">Tenant:</label>
                                                <select class="form-control select2bs4" name="e_tenant" id="e_tenant" style="width: 100%;" require>
                                                    <option value="" selected="selected" disabled>--Select Tenant--</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label id="labele_unit_consumed" for="e_unit_consumed">Unit Consumed:</label>
                                                <input class="form-control" id="e_unit_consumed" type="number" name="e_unit_consumed" placeholder="Ex. 435" require>
                                            </div>
                                            <div class="form-group">
                                                <label id="labele_amount" for="e_amount">Amount:</label>
                                                <input class="form-control" id="e_amount" type="number" name="e_amount" placeholder="Ex. 450" require>
                                            </div>
                                            <div class="form-group">
                                                <label id="labele_due_date" for="e_due_date">Due Date:</label>
                                                <input class="form-control" id="e_due_date" type="date" name="e_due_date" require>
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
            $('#tenant').prop('selectedIndex',0);
            $('#unit_consumed').val('');
            $('#amount').val('');
            $('#due_date').val('');

            $('#labeltenant').removeClass('labelcolorinputted');
            $('#labelunit_consumed').removeClass('labelcolorinputted');
            $('#labelamount').removeClass('labelcolorinputted');
            $('#labeldue_date').removeClass('labelcolorinputted');
        });
    </script>
    <script>
        $('.select2').select2()
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    </script>
    <script>
        $('#electricitybilling_payment').addClass('sidebaractive');
        $('#electricitybilling_paymentp').addClass('sidebarblacktext');
        $('#electricitybilling_paymenti').addClass('sidebarblacktext');

        $('#tenant').change(function(event){
            var tenantvalue = $('#tenant').val();
            if(tenantvalue.length > 0){
                $('#labeltenant').addClass('labelcolorinputted');
            }else{
                $('#labeltenant').removeClass('labelcolorinputted');
            }
        });

        $('#unit_consumed').keyup(function(event){
            var unit_consumedvalue = $('#unit_consumed').val();
            if(unit_consumedvalue.length > 0){
                $('#labelunit_consumed').addClass('labelcolorinputted');
            }else{
                $('#labelunit_consumed').removeClass('labelcolorinputted');
            }
        });
        
        $('#amount').keyup(function(event){
            var amountvalue = $('#amount').val();
            if(amountvalue.length > 0){
                $('#labelamount').addClass('labelcolorinputted');
            }else{
                $('#labelamount').removeClass('labelcolorinputted');
            }
        });
        
        $('#due_date').change(function(event){
            var due_datevalue = $('#due_date').val();
            if(due_datevalue.length > 0){
                $('#labeldue_date').addClass('labelcolorinputted');
            }else{
                $('#labeldue_date').removeClass('labelcolorinputted');
            }
        });

        $('#e_tenant').change(function(event){
            var e_tenantvalue = $('#e_tenant').val();
            if(e_tenantvalue.length > 0){
                $('#labele_tenant').addClass('labelcolorinputted');
            }else{
                $('#labele_tenant').removeClass('labelcolorinputted');
            }
        });

        $('#e_unit_consumed').keyup(function(event){
            var e_unit_consumedvalue = $('#e_unit_consumed').val();
            if(e_unit_consumedvalue.length > 0){
                $('#labele_unit_consumed').addClass('labelcolorinputted');
            }else{
                $('#labele_unit_consumed').removeClass('labelcolorinputted');
            }
        });
        
        $('#e_amount').keyup(function(event){
            var e_amountvalue = $('#e_amount').val();
            if(e_amountvalue.length > 0){
                $('#labele_amount').addClass('labelcolorinputted');
            }else{
                $('#labele_amount').removeClass('labelcolorinputted');
            }
        });
        
        $('#e_due_date').change(function(event){
            var e_due_datevalue = $('#e_due_date').val();
            if(e_due_datevalue.length > 0){
                $('#labele_due_date').addClass('labelcolorinputted');
            }else{
                $('#labele_due_date').removeClass('labelcolorinputted');
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
            var input, filter, table, tr, tdRoom, tdFullname, i, txtValueRoom, txtValueFullname;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("example1");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                tdRoom = tr[i].getElementsByTagName("td")[0];
                tdFullname = tr[i].getElementsByTagName("td")[1];
                if (tdRoom) {
                    txtValueRoom = tdRoom.textContent || tdRoom.innerText;
                    txtValueFullname = tdFullname.textContent || tdFullname.innerText;
                    if (txtValueRoom.toUpperCase().indexOf(filter) > -1 
                        || txtValueFullname.toUpperCase().indexOf(filter) > -1) {

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