@extends('admin.layouts.default')
@section('content')
<div class="conatiner-fluid content-inner mt-5 py-0">
            <div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Add New User</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <div class="profile-img-edit position-relative">
                                            <img class="profile-pic rounded avatar-100" src="../../assets/images/avatars/01.png" alt="profile-pic">
                                            <div class="upload-icone bg-primary">
                                                <svg class="upload-button" width="14" height="14" viewBox="0 0 24 24">
                                                    <path fill="#ffffff" d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                                </svg>
                                                <input class="file-upload" type="file" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="img-extension mt-3">
                                            <div class="d-inline-block align-items-center">
                                                <span>Only</span>
                                                <a href="javascript:void();">.jpg</a>
                                                <a href="javascript:void();">.png</a>
                                                <a href="javascript:void();">.jpeg</a>
                                                <span>allowed</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">User Role:</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Select</option>
                                            <option>Web Designer</option>
                                            <option>Web Developer</option>
                                            <option>Tester</option>
                                            <option>Php Developer</option>
                                            <option>Ios Developer </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="furl">Facebook Url:</label>
                                        <input type="text" class="form-control" id="furl" placeholder="Facebook Url">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="turl">Twitter Url:</label>
                                        <input type="text" class="form-control" id="turl" placeholder="Twitter Url">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="instaurl">Instagram Url:</label>
                                        <input type="text" class="form-control" id="instaurl" placeholder="Instagram Url">
                                    </div>
                                    <div class="form-group mb-0">
                                        <label class="form-label" for="lurl">Linkedin Url:</label>
                                        <input type="text" class="form-control" id="lurl" placeholder="Linkedin Url">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">New User Information</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="new-user-info">
                                    <form>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="form-label" for="name">Name:</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="add1">Street Address 1:</label>
                                                <input type="text" class="form-control" id="add1" name="add1" placeholder="Street Address 1">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="add2">Street Address 2:</label>
                                                <input type="text" class="form-control" id="add2" name="add2" placeholder="Street Address 2">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="form-label" for="cname">Company Name:</label>
                                                <input type="text" class="form-control" id="cname" name="cname" placeholder="Company Name">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label class="form-label">Country:</label>
                                                <select id="country" name="country" class="selectpicker form-control" data-style="py-0">
                                                    <option>Select Country</option>
                                                    <option>Caneda</option>
                                                    <option>Noida</option>
                                                    <option>USA</option>
                                                    <option>India</option>
                                                    <option>Africa</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="mobno">Mobile Number:</label>
                                                <input type="text" class="form-control" id="mobno" name="mobno" placeholder="Mobile Number">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="altconno">Alternate Contact:</label>
                                                <input type="text" class="form-control" id="altconno"  name="altconno" placeholder="Alternate Contact">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="email">Email:</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="pno">Pin Code:</label>
                                                <input type="text" class="form-control" id="pno" name="pno" placeholder="Pin Code">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="form-label" for="city">Town/City:</label>
                                                <input type="text" class="form-control" id="city" name="city" placeholder="Town/City">
                                            </div>
                                        </div>
                                        <hr>
                                        <h5 class="mb-3">Security</h5>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="form-label" for="uname">User Name:</label>
                                                <input type="text" class="form-control" id="uname" name="uname" placeholder="User Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="pass">Password:</label>
                                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="rpass">Repeat Password:</label>
                                                <input type="password" class="form-control" id="rpass" name="rpass" placeholder="Repeat Password ">
                                            </div>
                                        </div>
                                        <div class="checkbox">
                                            <label class="form-label"><input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked">Enable Two-Factor-Authentication</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add New User</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add this script in your Blade template -->
       <!-- Add this script in your Blade template -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function () {
                fetchUserData();
                function fetchUserData() {
                    $.ajax({
                        type: 'GET',
                        url: '{{ route("fetch.user") }}',
                        success: function (userData) {
                            console.log(userData);
                            $('#name').val(userData.name);
                            $('#email').val(userData.email);
                        },
                        error: function (xhr, status, error) {
                            console.error(xhr.responseText);
                            alert('An error occurred while fetching user data.');
                        }
                    });
                }
            });
        </script>
@endsection