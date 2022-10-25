  <!-- Modal -->
  <div class="modal fade" id="add-pack" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add stickers to pack</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- <button type="button" class="btn btn-primary" onclick="adduploader()" style="background-color: #2502B4 !important"> <i class="fa fa-plus" aria-hidden="true"></i> add more</button>
            <div class="row" id="filesrow">
                <div class="col-lg-6 pt-1 m-2 border"  style="width:300px;height:100px">
                    <label>Choose File</label>
                     <input type="file" class="form-control fileuploader" name="files[0]">
                    </div>
            </div> --}}
            <div class="form-group color files">
              {{-- <label>Upload Your File </label> --}}
              <input type="file" class="form-control fileuploader" multiple=""  name="files[]">
            </div>
        </div>

       
      </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Attach</button>
          {{-- <button type="button" class="btn btn-primary" style="background-color: #2502B4 !important">Save changes</button> --}}
        </div>
        
      </div>
    </div>
  </div>