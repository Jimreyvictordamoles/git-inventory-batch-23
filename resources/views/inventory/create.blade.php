@extends ('inventory.layout')

@section('content')


    <div class="row">
        <div class="pull-left py-3">
            <h3>
                New Computer parts
            </h3>
            
            <a href="{{ route('inventory.index') }}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="{{ route('inventory.store') }}">
        @csrf


        <div class="row">

            <div class="mb-3">
                <select class="form-select border border-secondary border-1" id="computer_unit" name="computer_unit">
                    <option selected disabled>Computer unit</option>
                    <option value="Unit1" {{ old('computer_unit') == 'Unit1' ? 'selected' : '' }}>Unit 1</option>
                    <option value="Unit2" {{ old('computer_unit') == 'Unit2' ? 'selected' : '' }}>Unit 2</option>
                    <option value="Unit3" {{ old('computer_unit') == 'Unit3' ? 'selected' : '' }}>Unit 3</option>
                    <option value="Unit4" {{ old('computer_unit') == 'Unit4' ? 'selected' : '' }}>Unit 4</option>
                    <option value="Unit5" {{ old('computer_unit') == 'Unit5' ? 'selected' : '' }}>Unit 5</option>
                </select>
            </div>

            <div class="mb-3">
                <select class="form-select border border-secondary border-1" id="category" name="category">
                    <option selected disabled>Category</option>
                    <option value="RAM" {{ old('category') == 'RAM' ? 'selected' : '' }}>RAM</option>
                    <option value="SSD" {{ old('category') == 'SSD' ? 'selected' : '' }}>SSD</option>
                    <option value="HDD" {{ old('category') == 'HDD' ? 'selected' : '' }}>HDD</option>
                    <option value="PSU" {{ old('category') == 'PSU' ? 'selected' : '' }}>PSU</option>
                    <option value="CPU" {{ old('category') == 'CPU' ? 'selected' : '' }}>CPU</option>
                    <option value="CPU_COOLER" {{ old('category') == 'CPU_COOLER' ? 'selected' : '' }}>CPU COOLER</option>
                    <option value="MOTHER_BOARD" {{ old('category') == 'MOTHER_BOARD' ? 'selected' : '' }}>MOTHER BOARD</option>
                    <option value="EXPANSION_CARDS" {{ old('category') == 'EXPANSION_CARDS' ? 'selected' : '' }}>EXPANSION CARDS</option>
                    <option value="COMPUTER_CASE" {{ old('category') == 'COMPUTER_CASE' ? 'selected' : '' }}>COMPUTER CASE</option>
                    <option value="SPEAKER" {{ old('category') == 'SPEAKER' ? 'selected' : '' }}>SPEAKER</option>
                    <option value="MOUSE" {{ old('category') == 'MOUSE' ? 'selected' : '' }}>MOUSE</option>
                    <option value="KEYBOARD" {{ old('category') == 'KEYBOARD' ? 'selected' : '' }}>KEYBOARD</option>
                    <option value="MONITOR" {{ old('category') == 'MONITOR' ? 'selected' : '' }}>MONITOR</option>
                </select>
            </div>

            <div class="mb-3">
                <input type="number" class="form-control border border-secondary border-1" placeholder="Quantity" name="quantity">
            </div>

            <div class="mb-3">
                <select class="form-select border border-secondary border1" id="status" name="status">
                    <option selected disabled>Status</option>
                    <option value="working" {{ old('status') == 'working' ? 'selected' : '' }}>Working</option>
                    <option value="damage" {{ old('status') == 'damage' ? 'selected' : '' }}>Damage</option>
                </select>
            </div>

            <div class="mb-3">
                <textarea name="remarks" id="remarks" cols="30" rows="10" class="form-control border border-secondary border-1" placeholder="Remarks"></textarea>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Create Inventory Item</button>
            </div>
        
        </div>

    </form>


@endsection