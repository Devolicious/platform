<?php include 'includes/head.php'; ?>
<body>
<div id="page">

    <div id="top-page">
        <?php include 'includes/header-simple.php'; ?>

        <div class="container-fluid" >
            <div class="row-fluid one-column">
                <div class="container-fluid">
                    <form class="form-register" action="#" >
                        <fieldset>
                            <legend>Register page</legend>
                            <div class="form-row">
                                <label>Name</label>
                                <input type="text"  class="input" />
                            </div>
                            <div class="form-row">
                                <label>Company</label>
                                <input type="text"  class="input" />
                            </div>
                            <div class="form-row">
                                <label>Phone</label>
                                <input type="text"  class="input" />
                            </div>
                            <div class="form-row">
                                <label>Email Address</label>
                                <input type="text"  class="input" />
                            </div>
                            <div class="form-row">
                                <label>Password</label>
                                <input type="text"  class="input" />
                            </div>
                            <div class="form-row">
                                <label>Re-enter Password</label>
                                <input type="text"  class="input" />
                            </div>
                            <div class="form-row">
                                <div class="form-inline">
                                    <input type="checkbox" class="checkbox small-text" />
                                    <label class="checkbox small-text">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                                </div>
                            </div>
                            <div class="form-row">
                                <button type="submit" class="btn btn-large">Sign Up</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</div>
</body>
</html>