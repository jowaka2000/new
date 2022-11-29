<div>
    <label for="name" class="text-gray-200 flex items-center px-3">Names<span class="text-orange-600">*</span></label>
    <input type="text" name="name" value="{{old('name')}}" placeholder="eg. John"
        class="w-full rounded-3xl bg-slate-200 border-slate-300 hover:border-slate-400 text-sm text-gray-800 @error('name') border-red-500 @enderror">

    @error('name')
        <div class="text-xs text-red-500">{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="email" class="text-gray-200 flex items-center px-3">Email Address<span
            class="text-orange-600">*</span></label>
    <input type="email" name="email" value="{{old('email')}}" placeholder="eg. someone@example.com"
        class="w-full rounded-3xl bg-slate-200 border-slate-300 hover:border-slate-400 text-sm text-gray-800 @error('email') border-red-500 @enderror">

    @error('email')
        <div class="text-xs text-red-500">{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="phone_number" class="text-gray-200 px-3">Phone Number</label>
    <input type="number" name="phone_number" value="{{old('phone_number')}}" placeholder="eg. +25470000000"
        class="w-full rounded-3xl bg-slate-200 border-slate-300 hover:border-slate-400 text-sm text-gray-800">
</div>

<div>
    <label for="password" class="text-gray-200 flex items-center px-3">Password<span class="text-orange-600">*</span></label>
    <input type="password" name="password" placeholder="***********"
        class="w-full rounded-3xl bg-slate-200 border-slate-300 rounded hover:border-slate-400 text-sm text-gray-800 @error('password') border-red-500 @enderror">

    @error('password')
        <div class="text-xs text-red-500">{{ $message }}</div>
    @enderror

</div>

<div>
    <label for="password_confirmation" class="text-gray-200 px-3 flex items-center">Confirm Password<span
            class="text-orange-600">*</span></label>
    <input type="password" name="password_confirmation" placeholder="***********"
        class="w-full bg-slate-200 rounded-3xl border-slate-300 hover:border-slate-400 text-sm text-gray-800">

    @error('password')
        <div class="text-xs text-red-500">{{ $message }}</div>
    @enderror
</div>

@csrf
