<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-heading" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 title="modal-title" id="login-heading">Login with PGLife</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="login-form" class="form" role="form" method="post" action="api/login_submit.php">
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                            </div>

                            <div class="form-group d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <span>
                            <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signup-modal">Click here</a>
                            to register a new account
                        </span>
                    </div>
                </div>
            </div>
        </div>