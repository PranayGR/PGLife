<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>

                    <div class="modal-body">
                        <form id="signup-form" class="form" role="form" method="post" action="api/signup_submit.php">
                            <div class="input-group mb-3 form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user m-1"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlenth="30" required>
                            </div>

                            <div class="input-group mb-3 form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone-alt m-1"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlenth="10"  minlenth="10" required>
                            </div>

                            <div class="input-group mb-3 form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope m-1"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>

                            <div class="input-group mb-3 form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock m-1"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password"  minlenth="10" required>
                            </div>

                            <div class="input-group mb-3 form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-university m-1"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="college_name" placeholder="College Name" maxlenth="150" required>
                            </div>

                            <div class="mb-3 form-group">
                                <span>I'm a</span>
                                <div class="form-check form-check-inline ml-5">
                                    <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male"/>
                                    <label class="form-check-label" for="gender-male">
                                        Male
                                    </label>
                            </div>

                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="gender" id="gender-female" value="female"/>
                                    <label class="form-check-label" for="gender-female">
                                        Female
                                    </label>
                                
                                </div>
                            </div>

                            <div class="form-group d-grid gap-2">
                                <button type="submit"  name="submit" class="btn btn-primary">Create Account</button>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <span>Already have an account?
                            <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#login-modal">Login</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>