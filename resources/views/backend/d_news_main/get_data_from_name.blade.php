

@foreach($categories as $all_categories)

<option value="{{ $all_categories->id }}">{{ $all_categories->sub_name }}</option>
@endforeach
