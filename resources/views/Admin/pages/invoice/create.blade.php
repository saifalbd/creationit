<x-admin-layout>
<main>
               <div class="container-fluid"><SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
<div class="mt-4  mb-2 page-title">
   <div class="row">
      <div class="col-md-8 my-auto"> Invoice <i class="fas fa-angle-right"></i> New Invoice   </div>
      <div class="col-md-4 text-right"> <a href="{{url('invoice')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-folder-open"></i> List Invoice </a> </div>
   </div>
</div>
<form name="frmUser" method="post" action="" class="calculate" enctype="multipart/form-data" oncChange="add_calcualte ()"  >
   <div class="card mb-3 pb-1">
      <div class="card-body  pb-0">
         <div class="row">
            <div class="form-group col-md-2">
               <label for="inputEmail4">Date </label>
               <input type="date" class="form-control" name="d_ate" value="2023-06-09" >
            </div>
            <div class="form-group col-md-3">
               <label for="inputEmail4">Name </label>
               <input type="text" class="form-control"   name="customer" >
            </div>
            <div class="form-group col-md-4">
               <label for="inputEmail4">Address</label>
               <input type="text" class="form-control"    name="address" >
            </div>
            <div class="form-group col-md-3">
               <label for="inputEmail4">Mobile </label>
               <input type="text" class="form-control"    name="mobile" >
            </div>
         </div>
      </div>
   </div>
   <div class="row">
   <div class="col-md-9">
   <div class="card mb-1 pb-1" >
      <div class="card-body  pb-1"  >
         <div class="row row-style">
            <div class="col-md-1 text-center">
               <a  class="btn btn-light btn-blcok btn-sm" name="del_item" onClick="deleteRow();"> <i class="fas fa-trash "></i>  </a> 
            </div>
            <div class="col-md-4">
               <label>Description </label>
            </div>
            <div class="col-md-2">
               <label>Quantity </label>
            </div>
            <div class="col-md-2">
               <label> Price  </label>
            </div>
            <div class="col-md-2">
               <label>Sub Total</label>
            </div>
            <div class="col-md-1"> </div>
         </div>
         <div class="all">
            <div class="formi">
               <div class="row items ">
                  <div class="form-group  col-md-1 text-center">
                     <input type="checkbox" class="checkmark text-center add" name="item_index[]" >
                  </div>
                  <div class="form-group  col-md-4">
                     <input class="form-control add" type="text" name="description[]">
                  </div>
                  <div class="form-group  col-md-2">
                     <input class="form-control qty" type="text" name="qty[]">
                  </div>
                  <div class="form-group  col-md-2">
                     <input class="form-control rate" type="text" name="rate[]">
                  </div>
                  <div class="form-group  col-md-2">
                     <input class="form-control amount" type="text" name="amount[]" readonly>
                  </div>
                  <div class="form-group  col-md-1">
                      <span class="instl btn btn-outline-primary "><i class="fas fa-plus "></i> </span>  
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <div class="col-md-3">
   <div class="card mb-1 pb-1">
      <div class="card-body  pb-1"  >

   <div class="col-md-12 form-group">
            <label class="sr-only" for="payable"> Total </label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text" style="width: 100px;">Total</div>
              </div>
              <input class="form-control text-success text-right font-weight-bold total" type="text" id="total" name="total">
            </div>
          </div>
		  
		  
		   <div class="col-md-12 form-group">
            <label class="sr-only" for="payable">Paid </label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text" style="width: 100px;">Paid </div>
              </div>
              <input class="form-control text-success text-right font-weight-bold paid" type="text" id="paid" name="paid" autocomplete="off">
            </div>
          </div>
		  
		  
		  		   <div class="col-md-12 form-group">
            <label class="sr-only" for="payable">Due</label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text" style="width: 100px;">Due</div>
              </div>
              <input class="form-control text-success text-right font-weight-bold due" type="text" id="due" name="due" autocomplete="off">
            </div>
          </div>
		  
		  

                                     
                                   
										   
<div class="form-group col-md-12">         
   <label for="inputEmail4">Remark </label> 
   <textarea type="text" class="form-control" name="remark" ></textarea>
</div>
</div>
   <div class="card-footer">
   
            <input type="hidden" readonly class="form-control" name="unique_id" value="1686323178"  >
            <input type="submit" class="btn btn-success add" name="save" value="Save" />
            <input type="reset" class="btn btn-secondary"  value="Reset" />
         
   </div>
   
   </form>
 </main>

</x-admin-layout>
