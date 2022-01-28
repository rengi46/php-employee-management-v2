<?php

if(!isset($_SESSION["user"])){
    header("Location: ../login") ;
}

?>

<?php require_once VIEWS."templets/header.php" ?>
    <div class="container mt-5">
        <form role="form" action="<?= BASE_URL ?>employee/modifyEmployee/<?= $this->employe[0][0]?>" method="post">
            <div class="row">
                <div class="form-group col">
                    <label for="inputName">Name</label>
                    <input type="hidden" id="inputId" >
                    <input name="name" type="text" class="form-control" id="inputName" placeholder="Name" value="<?= $this->employe[0][1]?>" required>
                </div>
                <div class="form-group col">
                    <label for="inputLastName">Last Name</label>
                    <input name="lastName" type="text" class="form-control" id="inputLastName" placeholder="Last Name" value="<?= $this->employe[0][2]?>" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="inputEmail">Email Address</label>
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email Address" value="<?= $this->employe[0][3]?>" required>
                </div>
                <div class="form-group col">
                    <label for="inputGender">Gender</label>
                    <select id="inputGender" name="gender" class="form-control">
                        <?php
                    if($this->employe[0][4]=="man")
                            {
                                echo '<option   value="man">Man</option>';
                                echo "</br>";
                                echo '<option   value="wom">Women</option>';
                            }
                            else if($this->employe[0][4]=="wom")
                            {
                                echo '<option   value="wom">Women</option>';
                                echo "</br>";
                                echo '<option   value="man">Man</option>';
                            }else{
                                    echo '<option   value="other">....</option>';
                                    echo "</br>";
                                    echo '<option   value="wom">Women</option>';
                                    echo "</br>";
                                    echo '<option   value="man">Man</option>';

                            }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="inputCity">City</label>
                    <input name="city" type="text" class="form-control" id="inputCity" placeholder="City" value="<?= $this->employe[0][5]?>"  required>
                </div>
                <div class="form-group col">
                    <label for= "inputStreetAddress">Street Address</label>
                    <input name="streetAddress" type="text" class="form-control" id="inputStreetAddress" placeholder="1234 Main St" value="<?= $this->employe[0][6]?>"required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="inputState">State</label>
                    <input name="state" type="text" class="form-control" id="inputState" placeholder="State" value="<?= $this->employe[0][7]?>" required>
                </div>
                <div class="form-group col">
                    <label for="inputAge">Age</label>
                    <input name="age" type="text" class="form-control" id="inputAge" placeholder="Age"  value="<?= $this->employe[0][8]?>" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="inputPostalCode">Postal Code</label>
                    <input name="postalCode" type="text" class="form-control" id="inputPostalCode" placeholder="PostalCode" value="<?= $this->employe[0][9]?>" required>
                </div>
                <div class="form-group col">
                    <label for="inputNumber">Phone Number</label>
                    <input name="phoneNumber" type="number" class="form-control" id="inputNumber" placeholder="Phone Number" value="<?= $this->employe[0][10]?>" required>
                </div>
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn" id="btn" btn-primary">Save</button>
                <button type="button" onclick="volver()" class="btn btn-secondary">Return</button>
            </div>
        </form>
    </div>
    <?php require_once VIEWS."templets/footer.php" ?>
