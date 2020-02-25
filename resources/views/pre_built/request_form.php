<div class="row justify-content-center">

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Request Form</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">

                        <h6 class="heading-small text-muted mb-4">Request information</h6>

                        <div class="pl-lg-4">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="Title">Title<span class="small text-danger">*</span></label>
                                        <input type="email" id="email" class="form-control" placeholder="Item/Desc./Request/Location" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="item">Item<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Ex. Table, Mouse, Monitor" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="type">Type</label>
                                        <select class="form-control">
                                            <option hidden>Select Nature of Request</option>
                                            <option>Electrical</option>
                                            <option>Mechanical</option>
                                            <option>Plumbing</option>
                                            <option>Carpentry</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="quantity">Quantity</label>
                                        <input type="number" id="quantity" class="form-control" name="quantity" placeholder="# of Items">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="details">Details<span class="small text-danger">*</span></label>
                                        <textarea class="form-control" rows="5" id="details"></textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="current_password">Current password</label>
                                        <input type="password" id="current_password" class="form-control" name="current_password" placeholder="Current password">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="new_password">New password</label>
                                        <input type="password" id="new_password" class="form-control" name="new_password" placeholder="New password">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="confirm_password">Confirm password</label>
                                        <input type="password" id="confirm_password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-right mr-3">
                                    <button type="submit" class="btn btn-primary">Submit Request</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>