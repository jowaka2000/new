<div>
    <label for="" class="flex text-gray-700 font-medium">Item Name<span
            class="text-xs text-orange-600">*</span></label>
    <input type="text" name="title" placeholder="eg. D10 Slide Gate" value="{{old('title') ?? $post->title}}"
        class="w-full bg-slate-200 text-gray-700 rounded text-sm border-slate-300 hover:border-slate-400 @error('title') border-red-500 @enderror">

    @error('title')
        <div class="text-xs text-red-500">{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="brand" class="flex text-gray-700 font-medium">Item Brand</label>
    <input type="text" name="brand" value="{{old('brand') ?? $post->brand}}"
        class="w-full bg-slate-200 text-gray-700 rounded text-sm border-slate-300 hover:border-slate-400 @error('brand') border-red-500 @enderror">
</div>

<div>
    <label for="description" class="flex text-gray-700 font-medium">Item Description<span
            class="text-xs text-orange-600">*</span></label>
    <textarea name="description" id="" placeholder="Type item description here.."
        class="w-full bg-slate-200 text-sm text-gray-700 rounded border-slate-300 hover:border-slate-400 @error('description') border-red-500 @enderror"
        rows="6">{{old('description') ?? $post->description}}</textarea>
    @error('description')
        <div class="text-xs text-red-500">{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="images" class="flex text-gray-700 font-medium">Item File(s)<span
            class="text-xs text-orange-600">*</span></label>
    <input type="file" name="images[]" id="" multiple
        class="w-full bg-slate-200 text-gray-700 p-1 rounded border-slate-300 hover:border-slate-400 @error('images') border-red-500 @enderror">
    @error('images')
        <div class="text-xs text-red-500">{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="price" class="flex text-gray-700 font-medium">Item Price(Ksh)</label>
    <input type="number" name="price" placeholder="0.00" value="{{old('price') ?? $post->price}}"
        class=" bg-slate-200 text-gray-700 rounded text-sm border-slate-300 hover:border-slate-400"
        step="0.01">
</div>

<div class="text-sm gap-1 items-center">
    <input type="checkbox" name="trending" id="trend">
    <label for="trend">Mark this post as Treding</label>
</div>
@csrf
