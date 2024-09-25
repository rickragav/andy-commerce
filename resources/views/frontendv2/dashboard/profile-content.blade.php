<div class="col-lg-9">
    <div class="my-account-content account-edit">
        <div class="">

            <form id="form-password-change" method="POST" enctype="multipart/form-data"
                action="{{ route('user.profile.update') }}">
                @csrf
                @method('PUT')


                <h6 class="mb_20">Basic Information</h6>

                <div class="mb-3 w-100">
                    <div class="d-flex align-items-end justify-content-start">
                        <!-- User image container (square) -->
                        <div class="position-relative">
                            <img src="{{ Auth::user()->image ? asset(Auth::user()->image) : asset('frontend/images/ts-2.jpg') }}"
                                alt="User Image" class="img-fluid shadow-lg"
                                style="width: 150px; height: 150px; object-fit: cover;">
                        </div>

                        <!-- Upload button aligned at the bottom with image -->
                        <div class="ms-3">
                            <label for="imageUpload"
                                class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-end justify-content-center"
                                style="cursor: pointer;">
                                Upload
                            </label>
                            <input id="imageUpload" type="file" name="image" class="d-none">
                        </div>
                    </div>
                </div>




                <div class="tf-field style-1 mb_15">
                    <input class="tf-field-input tf-input" id="name" type="text" name="name"
                        value="{{ Auth::user()->name }}">
                    <label class="tf-field-label fw-4 text_black-2" for="name">First name</label>
                </div>

                <div class="tf-field style-1 mb_15">
                    <input class="tf-field-input tf-input" type="email" name="email"
                        value="{{ Auth::user()->email }}" id="email">
                    <label class="tf-field-label fw-4 text_black-2" for="email">Email</label>
                </div>
                <div class="mb_20">
                    <button type="submit"
                        class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-end justify-content-center">Save
                        Changes</button>
                </div>
            </form>

            <form action="{{route('user.profile.update.password')}}" method="POST">
                @csrf
                <h6 class="mb_20">Password Change</h6>
                <div class="tf-field style-1 mb_30">
                    <input class="tf-field-input tf-input" placeholder=" " type="password" id="current_password"
                        name="current_password">
                    <label class="tf-field-label fw-4 text_black-2" for="current_password">Current password</label>
                </div>
                <div class="tf-field style-1 mb_30">
                    <input class="tf-field-input tf-input" placeholder=" " type="password" id="password"
                        name="password">
                    <label class="tf-field-label fw-4 text_black-2" for="property5">New password</label>
                </div>
                <div class="tf-field style-1 mb_30">
                    <input class="tf-field-input tf-input" placeholder=" " type="password" id="password_confirmation"
                        name="password_confirmation">
                    <label class="tf-field-label fw-4 text_black-2" for="password_confirmation">Confirm password</label>
                </div>
                <div class="mb_20">
                    <button type="submit"
                        class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Save
                        Changes</button>
                </div>

            </form>

        </div>
    </div>
</div>
