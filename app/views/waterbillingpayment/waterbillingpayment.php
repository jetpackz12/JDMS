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
                                        <th>Previous Reading</th>
                                        <th>Present Reading</th>
                                        <th>Amount</th>
                                        <th>Due Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data2['all'] as $data2){?>
                                        <tr>
                                            <td><?php echo $data2['room_number'];?></td>
                                            <td><?php echo $data2['fname']." ". $data2['mname']." ". $data2['lname'];?></td>
                                            <td><?php echo $data2['prev_reading'];?></td>
                                            <td><?php echo $data2['pres_reading'];?></td>
                                            <td>₱<?php echo $data2['amount'];?></td>
                                            <td><?php echo $data2['due_date'];?></td>
                                            <td>
                                            <button class="btn btn-block edit" data-toggle="modal" data-target="#modal-editPayments" data-id="<?php echo $data2['id']; ?>"><i class="fas fa-edit"> Edit</i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
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
                                    <form class="store" action="<?php echo ROOT; ?>waterbillingpayment/store" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label id="labeltenant" for="tenant">Tenant:</label>
                                                <select class="form-control select2bs4" name="tenant" id="tenant" style="width: 100%;" require>
                                                    <option value="" selected="selected" disabled>--Select Tenant--</option>
                                                    <?php foreach($data['all'] as $data){?>
                                                        <option value="<?php echo $data['id'];?>">
                                                            <?php echo "( Room ".$data['room_number']." ) ".$data['fname']." ".$data['mname']." ".$data['lname'];?>
                                                        </option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label id="labelprevious_reading" for="previous_reading">Previous Reading:</label>
                                                <input class="form-control" id="previous_reading" type="number" name="previous_reading" placeholder="Ex. 20" require>
                                            </div>
                                            <div class="form-group">
                                                <label id="labelpresent_reading" for="present_reading">Present Reading:</label>
                                                <input class="form-control" id="present_reading" type="number" name="present_reading" placeholder="Ex. 50" require>
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
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-editPayments">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><i class="fas fa-plus-circle"> Edit Payments</i></h4>
                                </div>
                                <form class="update" action="<?php echo ROOT; ?>waterbillingpayment/update" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" id="e_id" name="e_id" hidden>
                                        <label id="labele_tenant" for="e_tenant">Tenant:</label>
                                            <!-- <div class="row">
                                                <div class="col-10">
                                                    <input class="form-control" id="e_tenant_name" type="text" name="e_tenant_name" readonly>
                                                    <div class="divhideselector" style="display: none;"> -->
                                                        <select class="form-control" name="e_tenant" id="e_tenant" style="width: 100%;">
                                                            <option value="" selected="selected" disabled>--Select Tenant--</option>
                                                            <?php foreach($data3['all'] as $data){?>
                                                                <option value="<?php echo $data['id'];?>"><?php echo "( Room ".$data['room_number']." ) ".$data['fname']." ".$data['mname']." ".$data['lname'];?></option>
                                                            <?php }?>
                                                        </select>
                                                    <!-- </div>
                                                </div>
                                                <div class="col-2">
                                                    <button type="button" class="btn btn-primary btnhideselector"><i class="fas fa-times"></i></button>
                                                </div>
                                            </div> -->
                                    </div>
                                    <div class="form-group">
                                        <label id="labele_previous_reading" for="e_previous_reading">Previous Reading:</label>
                                        <input class="form-control" id="e_previous_reading" type="number" name="e_previous_reading" placeholder="Ex. 20" require>
                                    </div>
                                    <div class="form-group">
                                        <label id="labele_present_reading" for="e_present_reading">Present Reading:</label>
                                        <input class="form-control" id="e_present_reading" type="number" name="e_present_reading" placeholder="Ex. 50" require>
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
                            </form>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
    </div>
    <?php require PATH_VIEW.'components/script.php'?>
    <!-- <script>
        $('.btnhideselector').click(function() {
            if ($('.divhideselector').css('display') == 'none') {
                $('.divhideselector').show();
                $('#e_tenant_name').hide();
            }else{
                $('.divhideselector').hide();
                $('#e_tenant_name').show();
            }
        });
    </script> -->
    <script>
         $('#close').click(function() {
            $('#tenant').prop('selectedIndex',0);
            $('#previous_reading').val('');
            $('#present_reading').val('');
            $('#amount').val('');
            $('#due_date').val('');

            $('#labeltenant').removeClass('labelcolorinputted');
            $('#labelprevious_reading').removeClass('labelcolorinputted');
            $('#labelpresent_reading').removeClass('labelcolorinputted');
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
        $('#waterbilling_payment').addClass('sidebaractive');
        $('#waterbilling_paymentp').addClass('sidebarblacktext');
        $('#waterbilling_paymenti').addClass('sidebarblacktext');

        $('#tenant').change(function(event){
            var tenantvalue = $('#tenant').val();
            if(tenantvalue.length > 0){
                $('#labeltenant').addClass('labelcolorinputted');
            }else{
                $('#labeltenant').removeClass('labelcolorinputted');
            }
        });

        $('#previous_reading').keyup(function(event){
            var previous_readingvalue = $('#previous_reading').val();
            if(previous_readingvalue.length > 0){
                $('#labelprevious_reading').addClass('labelcolorinputted');
            }else{
                $('#labelprevious_reading').removeClass('labelcolorinputted');
            }
        });
        
        $('#present_reading').keyup(function(event){
            var present_readingvalue = $('#present_reading').val();
            if(present_readingvalue.length > 0){
                $('#labelpresent_reading').addClass('labelcolorinputted');
            }else{
                $('#labelpresent_reading').removeClass('labelcolorinputted');
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

        $('#e_previous_reading').keyup(function(event){
            var e_previous_readingvalue = $('#e_previous_reading').val();
            if(e_previous_readingvalue.length > 0){
                $('#labele_previous_reading').addClass('labelcolorinputted');
            }else{
                $('#labele_previous_reading').removeClass('labelcolorinputted');
            }
        });
        
        $('#e_present_reading').keyup(function(event){
            var e_present_readingvalue = $('#e_present_reading').val();
            if(e_present_readingvalue.length > 0){
                $('#labele_present_reading').addClass('labelcolorinputted');
            }else{
                $('#labele_present_reading').removeClass('labelcolorinputted');
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
  
  $('.store').on('submit',function(e){
    e.preventDefault();

    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 1000
    });
    
      $.ajax({
        type     : "POST",
        cache    : false,
        url      : $(this).attr('action'),
        data     : $(this).serialize(),
        success  : function(data) {

        //   console.log(data);

          switch (data){
                case "success":
                    Toast.fire({
                        icon: 'success',
                        title: '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAdd Water Bill Payment success!'
                    });
                        setTimeout(function() {
                        // body...
                        location.reload();
                    },1000);
                break;
                case "failed":
                    $('#spanroom').show();
                break;
                default:
                    Toast.fire({
                        icon: 'error',
                        title: 'Failed to Add Water Bill Payment view console log!'
                    });
                        setTimeout(function() {
                        // body...
                        // location.reload();
                        console.log(data);
                    },1000);
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
      timer: 1000
    });
    
      $.ajax({
        type     : "POST",
        cache    : false,
        url      : $(this).attr('action'),
        data     : $(this).serialize(),
        success  : function(data) {

        //   console.log(data);

          switch (data){
                case "success":
                    Toast.fire({
                        icon: 'success',
                        title: '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUpdate Water Bill Payment success!'
                    });
                        setTimeout(function() {
                        // body...
                        location.reload();
                    },1000);
                break;
                case "failed":
                    $('#spanroom').show();
                break;
                default:
                    Toast.fire({
                        icon: 'error',
                        title: 'Failed to Update Water Bill Payment view console log!'
                    });
                        setTimeout(function() {
                        // body...
                        // location.reload();
                        console.log(data);
                    },1000);
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
          url: '<?php echo ROOT; ?>waterbillingpayment/edit',
          data: {id:id},
          dataType:'json',
          success:function(data) {

            // console.log(data);
            // $('#e_tenant_name').val(data.tenants_fullname);
            $('#e_id').val(data.id);
            $('#e_tenant').val(data.tenants_id);
            $('#e_previous_reading').val(data.prev_reading);
            $('#e_present_reading').val(data.pres_reading);
            $('#e_amount').val(data.amount);
            $('#e_due_date').val(data.due_date);
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