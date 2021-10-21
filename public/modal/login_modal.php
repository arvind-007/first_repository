<!-- modal for header button -->
<div class="modal fade" id="btnLogin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Login here</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="needs-validation" novalidate>
                <div class="modal-body mx-5">

                    <div class="inputvalues input-group has-validation">
                        <i class="fa fa-user"></i>
                        <input name="username" type="text" placeholder="Username/E-mail" class="form-control"
                            id="validationCustomUsername" required><br>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>

                    <div class="inputvalues input-group has-validation">
                        <i class="fa fa-lock"></i>
                        <input name="username" type="password" placeholder="Password" class="form-control"
                            id="validationCustomUsername" required><br>
                        <div class="invalid-feedback">
                            please fill password.
                        </div>
                    </div>
                    <span data-bs-target="#forgot-password" data-bs-toggle="modal" data-bs-dismiss="modal"
                        data-bs-dismiss="modal" style="cursor:pointer">Forget password</span>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-dark" data-bs-target="#btnLoginProcess">Log In</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- modal for modal login button -->
<div class="modal fade" id="btnLoginProcess" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body mx-5">
                <i class="fas fa-check-circle h1 text-success">Successful!</i>
            </div>
        </div>
    </div>
</div>


<!-- script for empty filling -->
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>