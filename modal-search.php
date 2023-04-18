<style>
.modal-full {
    min-width: 100%;
    min-height: 100%;
    margin: 0;
    padding: 0;
}

.modal-full .modal-content {
    min-height: 100%;
    border:none;
    background-color: rgba(0, 0, 0, 0);
}

.modal-body{
    text-align: center;
    color: white;
}

.modal-title{
    font-size:40px;
    font-weight:bold;
}

.modal{
    background-color: rgba(0, 0, 0, 0.9);
}

.modal-header{
    border:none;
    padding-bottom:100px;
    padding-right:80px;
}

.btn-close {
    color: white;
}

.form-control{
    max-width: 800px;
    margin: auto;
    background-color: transparent;
    border-bottom: 1px solid white;
    border-top: none;
    border-left: none;
    border-right: none;
    border-radius: 0%;
    font-size:24px;
    color:white;
}



.form-control:focus {
    box-shadow: none;
    border-color: #ced4da;
    background-color: transparent;
    color: white;
  }

</style>


<!-- Modal -->
<div class="modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true" data-bs-backdrop="false">
<div class="modal-dialog modal-full">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <i class="bi bi-x" style="font-size:4rem;"></i>
        </button>
      </div>
      <div class="modal-body">
      <h5 class="modal-title mb-4">What are you looking for?</h5>
      <form action="search.php" method="post">
          <div class="mb-3">
            <input type="text" name="prod-search" class="form-control" placeholder="Enter item or keyword">
            <input type="hidden" name="category" value="">
            <input type="hidden" name="category2" value="">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
