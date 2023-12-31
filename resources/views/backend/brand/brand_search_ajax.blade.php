<div class="table-responsive">
    <table class="table  table-striped">
        <thead class="table-light">
        <tr>
            <th style="width: 20px;" >
                <div class="form-check font-size-16">
                    <input class="form-check-input" type="checkbox" id="master">
                    <label class="form-check-label" for="checkAll"></label>
                </div>
            </th>
            <th >Sl.</th>
            <th >Brand name</th>
            <th >Slug</th>

            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

            @foreach($product_list as $key=>$all_attribute)
        <tr>
            <td>
                <div class="form-check font-size-16">
                    <input class="form-check-input sub_chk" value="{{$all_attribute->id}}"  data-id="{{$all_attribute->id}}" type="checkbox" id="orderidcheck01">
                    <label class="form-check-label" for="orderidcheck01"></label>
                </div>
            </td>
            <td class="text-body fw-bold">{{ $key+1 }}</td>
            <td>{{ $all_attribute->name }} </td>
            <td>{{ $all_attribute->slug }}</td>

            <td>
                @if($all_attribute->status == 'Active')

                <span class="badge badge-pill badge-soft-success font-size-12">Active</span>

                @else
                <span class="badge badge-pill badge-soft-danger font-size-12">Inactive</span>
                @endif
            </td>

            <td>
                <div class="d-flex gap-1">



                    @if (Auth::guard('admin')->user()->can('brand_update'))

<button class="btn btn-transparent btn-sm text-success" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $all_attribute->id }}">
            <i class="mdi mdi-pencil font-size-14"></i>
            </button>

<!-- Modal -->
@include('backend.brand.edit')
@endif
@if (Auth::guard('admin')->user()->can('brand_delete'))


                        <button class=" btn btn-transparent btn-sm text-danger"  onclick="deleteTag({{ $all_attribute->id}})"><i
                                    class="mdi mdi-delete font-size-14"></i></button>

                                    <form id="delete-form-{{ $all_attribute->id }}" action="{{ route('admin.brand.delete',$all_attribute->id) }}" method="POST" style="display: none;">
                                        @method('DELETE')
                                                                      @csrf

                                                                  </form>
                                                                  @endif
                    </div>
                </div>
            </td>
        </tr>
@endforeach
        </tbody>
    </table>
</div>


@include('backend.attribute.normal_pagination')
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/brand_page.js"></script>
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/brand_page_search.js"></script>
