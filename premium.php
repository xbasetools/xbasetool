<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="alfacoins-site-verification" content=" ">
<meta name="revisit-after" content="2 days">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="/cdn-cgi/apps/head ">
 </script>
  <link rel="shortcut icon" href="../../favicon.ico" />
<title>Accounts</title>
  <link rel="stylesheet" href="layout/css/bootstrap.min.css">
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   


           
          </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
          <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <p class="heading" id="myModalHeader"></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="modelbody">
              </div>
              <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modalConfirmBuy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
            <div class="modal-content text-center">
              <div class="modal-header d-flex justify-content-center">
                <p class="heading">Are you sure?</p>
              </div>
              <div class="modal-body">
                <i class='fas fa-shopping-cart fa-4x animated rotateIn'></i>
              </div>
              <div class="modal-footer flex-center">
                <a onClick='confirmbye()' class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
                <a type="button" class="btn btn-info" data-dismiss="modal">No</a>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade top" id="modalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
          <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div class="row d-flex justify-content-center align-items-center">
                  <img src="layout/images/balance.png">
                  <span class="pt-3 mx-4" style="font-size: 14 px"><b>No enough balance !</b> Please refill your balance</span>
                  <a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger">Add Balance
                    <i class="fas fa-book ml-1 white-text"></i>
                  </a>
                  <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
                </div>
              </div>
            </div>
          </div>
        </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="code.jquery.com/jquery-3.6.3.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="js/jquery.datatables.min.js"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/premium.js">
   <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  -->


              <script>
      $(document).ready( function () {
    $('#table').DataTable();} );
          
        function buythistool(id){
        $('#modalConfirmBuy').modal('show');
        webID= id;
        }
        function confirmbye(id){
        id= webID;
        $.ajax({
        method:"GET",
        url:"buytool.php?id="+id+"&t=accounts",
        dataType:"text",
        success:function(data){
        if(data.match("buy")){
        let lastid = data.split("buy,")[1];
        $("#premium"+id).html(`<button onclick=openitem(${lastid}) class="btn btn-success btn-sm" style="font-size: 11px; cursor:pointer">Order ${'#'+lastid}</button>`).show();
        }
        else{
        if(data.match("deleted")){
        $("#premium"+id).html('Already sold / Deleted').show();
        }else{
        $('#modalCoupon').modal('show');
        }
        }
        },
        });
        }
        function openitem(order){
        $.ajax({
        type:       'GET',
        url:        'showOrder'+order,
        success:    function(data)
        {
        $("#myModalHeader").text('Order #'+order);
        $("#modelbody").append(data);
        $('#myModal').modal();
        }});  }
        </script>
      </body>
    </html>
