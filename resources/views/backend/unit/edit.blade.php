<div class="modal fade bs-example-modal-lg{{ $all_attribute->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Update Unit Information</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
</button>
</div>
<div class="modal-body">
<form class="custom-validation" action="{{ route('admin.unit.update') }}" method="post" enctype="multipart/form-data">
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
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <select class="form-control" name="name">
                             <option value="Watermark" {{$all_attribute->name == 'Watermark' ? 'selected':''}}>Watermark</option>
                            <option value="Bangla Site Header Logo"  {{$all_attribute->name == 'Bangla Site Header Logo' ? 'selected':''}}>Bangla Site Header Logo</option>
                            <option value="Bangla Site Footer Logo" {{$all_attribute->name == 'Bangla Site Footer Logo' ? 'selected':''}}>Bangla Site Footer Logo</option>
                            <option value="Engish Site Header Logo" {{$all_attribute->name == 'Engish Site Header Logo' ? 'selected':''}}>Engish Site Header Logo</option>
                             <option value="Engish Site Footer Logo" {{$all_attribute->name == 'Engish Site Footer Logo' ? 'selected':''}}>Engish Site Footer Logo</option>
                             <option value="Bangla Language Banner" {{$all_attribute->name == 'Bangla Language Banner' ? 'selected':''}}>Bangla Language Banner</option>
                               <option value="English Language Banner" {{$all_attribute->name == 'English Language Banner' ? 'selected':''}}>English Language Banner</option>
                           <option value="personal_logo" {{$all_attribute->name == 'personal_logo' ? 'selected':''}}>Personal Logo</option>
                        </select>
                    </div>
                </div>
    <div class="col-md-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</div>


</form>
</div>

</div>
</div>
</div>
