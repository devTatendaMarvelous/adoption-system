
<x-dashboard>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Add Orphanage</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Orphanage</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add Orphanage Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <form class="needs-validation" novalidate action="{{ route('orphanages') }}"  method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01"> Name</label>
                                                <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="Orphanage Name"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please enter Orphanage full name.
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Email</label>
                                                <input type="text" class="form-control" name="email" type="email" id="validationCustom01" placeholder="Email"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please enter Orphanage email address.
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Phone</label>
                                                <input class="form-control" name="phone" id="validationCustom02" placeholder="Phone"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please enter Orphanage Phone.
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername">Address</label>
                                                <textarea name="address" class="form-control" id="validationCustomUsername" cols="30" rows="10" placeholder="Address"></textarea>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom03">photo</label>
                                                    <input type="file" name="photo" class="form-control" id="validationCustom03" placeholder="City" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a photo.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2"></div>
                                            <button class="btn btn-primary col-8" type="submit">Add Orphanage</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-dashboard>
