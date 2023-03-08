<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

<div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
          <div class="col-sm-12 table-responsive">
            <table id="table" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
              <thead>
                <tr>
                  <th scope="1"></th>
                  <th class="all">ID</th>
                  <th scope="3">Country</th>
                  <th scope="4">Website Name</th>
                  <th scope="6">Details</th>
                  <th scope="7">Price</th>
                  <th scope="8">Seller</th>
                  <th scope="10">Date Created</th>
                  <th class="all">Buy</th>
                </tr>
              </thead>
            </table>
           
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
        <script>
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
        <script src="js/Premium.js">
        
        </script>
      </body>
    </html>
