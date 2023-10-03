<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <form action="" method="Post" id="addproduct">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="errMsgContainer">


                    </div>

                    <div class="form-group">
                        <label for="name">Product name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>


                    <div class="form-group">
                        <label for="price">Product Price</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_product">Save Product</button>
                </div>
            </div>
        </div>



    </form>
</div>