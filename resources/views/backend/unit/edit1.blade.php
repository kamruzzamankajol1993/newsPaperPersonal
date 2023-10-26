<div class="modal fade bs-example-modal-lg{{ $all_attribute->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Update Image Information</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
</button>
</div>
<div class="modal-body">
<form class="custom-validation" action="{{ route('admin.media_files.update') }}" method="post" enctype="multipart/form-data">
@csrf

<div class="row">

   
                   <input type="hidden" name="id" value="{{ $all_attribute->id  }}" class="form-control"
                   >
     
     <div class="col-md-12">
                    <div class="mb-3">
                        <label for="" class="form-label">Logo</label>
                        <input type="file" name="img" class="form-control" id="a_name"
                               >
                               
                               <img src = "{{asset('/')}}{{ $all_attribute->img }}" style="height:40px;"/>
                    </div>
                </div>
                <!--<div class="col-md-12">-->
                <!--    <div class="mb-3">-->
                <!--        <label for="" class="form-label">Slug</label>-->
                <!--        <input readonly type="text" name="slug"  class="form-control" id="a_slug"-->
                <!--               >-->
                <!--    </div>-->
                <!--</div>-->
                
    <div class="col-md-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</div>


</form>
</div>

</div>
</div>
</div>
