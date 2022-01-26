

<?php require_once VIEWS."templets/header.php" ?>
    <div class="container mt-5">
        <form role="form" action="<?= BASE_URL ?>employee/newemployee" method="post">
            <div class="row">
                <div class="form-group col">
                    <label for="inputName">Name</label>
                    <input type="hidden" id="inputId" >
                    <input name="name" type="text" class="form-control" id="inputName" placeholder="Name" >
                </div>
                <div class="form-group col">
                    <label for="inputLastName">Last Name</label>
                    <input name="lastName" type="text" class="form-control" id="inputLastName" placeholder="Last Name" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="inputEmail">Email Address</label>
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email Address" >
                </div>
                <div class="form-group col">
                    <label for="inputGender">Gender</label>
                    <select id="inputGender" name="gender" class="form-control">
                       
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="inputCity">City</label>
                    <input name="city" type="text" class="form-control" id="inputCity" placeholder="City"  >
                </div>
                <div class="form-group col">
                    <label for= "inputStreetAddress">Street Address</label>
                    <input name="streetAddress" type="text" class="form-control" id="inputStreetAddress" placeholder="1234 Main St" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="inputState">State</label>
                    <input name="state" type="text" class="form-control" id="inputState" placeholder="State"  >
                </div>
                <div class="form-group col">
                    <label for="inputAge">Age</label>
                    <input name="age" type="text" class="form-control" id="inputAge" placeholder="Age"  >
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="inputPostalCode">Postal Code</label>
                    <input name="postalCode" type="text" class="form-control" id="inputPostalCode" placeholder="PostalCode"  >
                </div>
                <div class="form-group col">
                    <label for="inputNumber">Phone Number</label>
                    <input name="phoneNumber" type="number" class="form-control" id="inputNumber" placeholder="Phone Number" >
                </div>
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn" id="btn" btn-primary">Save</button>
                <button type="button" onclick="volver()" class="btn btn-secondary">Return</button>
            </div>
        </form>
    </div>
    <?php require_once VIEWS."templets/footer.php" ?>