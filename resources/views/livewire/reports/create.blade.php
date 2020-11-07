<form class="py-3" action="{{ route('officer.reports.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <h4 class="text-gray-800">Personal Details</h4>
            <span>Information belonging to the lost person, it is crucial for searching the person in the available
                records</span>
        </div>
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-text">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="text-gray-700 font-weight-bold" for="name">
                                    <span>Name</span>&nbsp;<span class="text-danger">*</span>
                                </label>
                                <input type="text" name="person_name" id="name" 
                                    class="form-control @error('person_name') is-invalid @enderror">
                                @error('person_name')
                                <span class="invalid-feedback"> 
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dob" class="text-gray-700 font-weight-bold">
                                    <span>Date of Birth</span>&nbsp;<span class="text-danger">*</span>
                                </label>
                                <input type="date" name="person_date_of_birth" id="dob" 
                                    class="form-control @error('person_date_of_birth') is-invalid @enderror">
                                @error('person_date_of_birth')
                                <span class="invalid-feedback"> 
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <hr class="my-2">
                        <div>
                            <span class="text-muted">Atleast on of these is required</span>&nbsp;<span
                                class="text-danger">*</span>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="text-gray-700 font-weight-bold" for="nationalIdentificationNumber">
                                    National Identification Number
                                </label>
                                <input type="text" name="person_national_identification_number" id="nationalIdentificationNumber" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="text-gray-700 font-weight-bold" for="passportNumber">
                                    Passport Number
                                </label>
                                <input type="text" name="person_passport_number" id="passportNumber" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="text-gray-700 font-weight-bold" for="birthCertificateNumber">
                                    Birth Certificate Number
                                </label>
                                <input type="text" name="person_birth_certificate_number" id="birthCertificateNumber" class="form-control">
                            </div>
                        </div>
                        <hr class="my-2">

                        <div class="row">
                            <div class="col-md-7">
                                <label class="text-gray-700 font-weight-bold" for="phoneNumber">
                                    Phone Number (Optional)
                                </label>
                                <input type="text" name="person_phone_number" id="phoneNumber" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5">
    <div class="row">
        <div class="col-md-4">
            <h4 class="text-gray-800">Last Seen Information</h4>
            <span>Information about where the person was last seen</span>
        </div>
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-text">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="text-gray-700 font-weight-bold" for="lastSeen">
                                    <span>Date</span>&nbsp;<span class="text-danger">*</span>
                                </label>
                                <input type="date" name="last_seen" id="lastSeen" 
                                    class="form-control @error('last_seen') is-invalid @enderror">
                                @error('last_seen')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="place" class="text-gray-700 font-weight-bold">
                                    <span>Place</span>&nbsp;<span class="text-danger">*</span>
                                </label>
                                <input type="text" name="last_seen_place" id="place" 
                                    class="form-control @error('last_seen_place') is-invalid @enderror">
                                @error('last_seen_place')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">Last Seen With (Optional)</span>
                            <div>
                                <button type="button" wire:click="changeLastSeenWith(+1)" class="btn btn-sm btn-info">
                                    <i class="fa fa-plus"></i>
                                </button>
                                <button type="button" wire:click="changeLastSeenWith(-1)"
                                    class="btn btn-sm btn-warning">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="row {{ ($lastSeenWithCount <= 0) ? 'collapse' : '' }}">
                            @for ($i = 0; $i < $lastSeenWithCount; $i++) 
                            <div class="col-md-6 mb-3">
                                <label for="personName{{ $i }}" class="text-gray-700 font-weight-bold">
                                    <span>Name</span>&nbsp;<span class="text-danger">*</span>
                                </label>
                                <input type="text" name="last_seen_with[]" id="personName{{ $i }}" class="form-control">
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5">
    <div class="row">
        <div class="col-md-4">
            <h4 class="text-gray-800">Preliminary Details</h4>
            <span>All you remembe about the person in the last days, beefs, enemies, coduct, dressing and what have
                you</span>
        </div>
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-text">
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">Extra custom details about the case (Optional)</span>
                            <div>
                                <button type="button" wire:click="changePreliminaryItemsCount(+1)"
                                    class="btn btn-sm btn-info">
                                    <i class="fa fa-plus"></i>
                                </button>
                                <button type="button" wire:click="changePreliminaryItemsCount(-1)"
                                    class="btn btn-sm btn-warning">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <datalist id="keys">
                            @foreach ($items as $item)
                                <option value="{{ $item->key }}" />
                            @endforeach
                        </datalist>
                        <div class="mt-3 {{ ($preliminaryItemsCount <= 0) ? 'collapse' : '' }}">
                            @for ($i = 0; $i < $preliminaryItemsCount; $i++) 
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <input list="keys" name="keys[]" class="form-control" type="text" id="item{{ $i }}key" placeholder="Key">
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="values[]" id="item{{ $i }}value" class="form-control" placeholder="Item">
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row py-5">
        <div class="col-md-12">
            <button class="btn btn-lg btn-info btn-block">Submit</button>
        </div>
    </div>
</form>