<form action="" method="post">
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
                                <input type="text" id="name" class="form-control">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dob" class="text-gray-700 font-weight-bold">
                                    <span>Date of Birth</span>&nbsp;<span class="text-danger">*</span>
                                </label>
                                <input type="date" id="dob" class="form-control">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
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
                                <input type="text" id="nationalIdentificationNumber" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="text-gray-700 font-weight-bold" for="passportNumber">
                                    Passport Number
                                </label>
                                <input type="text" id="passportNumber" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="text-gray-700 font-weight-bold" for="birthCertificateNumber">
                                    Birth Certificate Number
                                </label>
                                <input type="text" id="birthCertificateNumber" class="form-control">
                            </div>
                        </div>
                        <hr class="my-2">

                        <div class="row">
                            <div class="col-md-7">
                                <label class="text-gray-700 font-weight-bold" for="phoneNumber">
                                    Phone Number (Optional)
                                </label>
                                <input type="text" id="phoneNumber" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>