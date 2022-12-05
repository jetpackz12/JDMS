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
        tr{
            text-align: center;
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
                        <div class="col-3">
                                <select class="form-control" name="transaction" id="transaction" require>
                                    <option value="" selected disabled>--Select Transaction--</option>
                                    <option value="1">Water Billing Payment</option>
                                    <option value="2">Electricity Billing Payment</option>
                                </select>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-block btn-primary">GO</button>
                        </div>
                        <div class="col-7">
                            <input id="search" class="form-control" type="text" name="search" placeholder="You can use tenant name for searching">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Transaction</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Water Billing Payment</td>
                                        <td>
                                            Room 1: Juan Dela Cruz
                                            <br>
                                            Previous Reading: 20
                                            <br>
                                            Previous Reading: 14
                                            <br>
                                            Amount: ₱750
                                            <br>
                                            Due: 11/17/2022
                                        </td>
                                        <td>11/12/2022</td>
                                    </tr>
                                    <tr>
                                        <td>Water Billing Payment</td>
                                        <td>
                                            Room 2: Mary Jane Abik
                                            <br>
                                            Previous Reading: 20
                                            <br>
                                            Previous Reading: 14
                                            <br>
                                            Amount: ₱750
                                            <br>
                                            Due: 11/17/2022
                                        </td>
                                        <td>11/12/2022</td>
                                    </tr>
                                    <tr>
                                        <td>Water Billing Payment</td>
                                        <td>
                                            Room 3: Kiver Bolay-og Bola
                                            <br>
                                            Previous Reading: 20
                                            <br>
                                            Previous Reading: 14
                                            <br>
                                            Amount: ₱750
                                            <br>
                                            Due: 11/17/2022
                                        </td>
                                        <td>11/12/2022</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
    </div>
    <?php require PATH_VIEW.'components/script.php'?>
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
        $('#reports').addClass('sidebaractive');
        $('#reportsp').addClass('sidebarblacktext');
        $('#reportsi').addClass('sidebarblacktext');

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
            var input, filter, table, tr, tdFullname, i, txtValueRoom, txtValueFullname;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("example1");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                tdFullname = tr[i].getElementsByTagName("td")[1];
                if (tdFullname) {
                    txtValueFullname = tdFullname.textContent || tdFullname.innerText;
                    if (txtValueFullname.toUpperCase().indexOf(filter) > -1) {

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