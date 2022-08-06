<?php include "head456.php"; ?>
    <div class="col-md-10 offset-md-1 bodis">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Enrollment</li>
            </ol>
        </nav>
        <br><br>

        <div class="cards mb-4">
            <form action="#" method="POST">
                <h3 class="text-center">Enrollment</h3>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid11" placeholder="Firstname">
                        <label for="floatingInputGrid11">First name</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid22" placeholder="Middlename">
                        <label for="floatingInputGrid22">Middle name</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="Lastname">
                        <label for="floatingInputGrid">Last name</label>
                        </div>
                    </div>
                </div>
                <!-- Second sect -->
                
                <div class="mt-4 row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="text" class="form-control" id="tingInputGrid11" placeholder="Faculty">
                        <label for="tingInputGrid11">Faculty</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="text" class="form-control" id="InputGrid22" placeholder="Department">
                        <label for="InputGrid22">Department</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="text" class="form-control" id="floating" placeholder="Level">
                        <label for="floating">Level</label>
                        </div>
                    </div>
                </div>

                <!-- third -->
                <div class="mt-4 form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Address</label>
                </div>

                <!-- Furth sect -->
                <div class="mt-4 row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="number" class="form-control" id="number" placeholder="Phone number">
                        <label for="number">Phone number</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="email" class="form-control" id="address" placeholder="Email address">
                        <label for="address">Email address</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>please select status</option>
                                <option value="Active">Active</option>
                                <option value="Retired">Retired</option>
                                <option value="Deceased">Deceased</option>
                                <option value="Leave of absence">Leave of absence</option>
                                <option value="Sabbatical">Sabbatical</option>
                                <option value="Suspension">Suspension</option>
                            </select>
                        <label for="floatingSelect">Status</label>
                        </div>
                    </div>
                </div>

                <!-- Fifth sect -->
                
                <div class="mt-4 row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="date" class="form-control" id="DOBE" placeholder="Date of Employment">
                        <label for="DOBE">Date of Employment</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="date" class="form-control" id="DOBR" placeholder="Date of resignation">
                        <label for="DOBR">Date of resignation</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="nok" style="height: 60px"></textarea>
                            <label for="nok">Next of kin</label>
                        </div>
                    </div>
                </div>

                <!-- 6th sect -->
                <div class="mt-4 row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="number" class="form-control" id="number" placeholder="Phone number">
                        <label for="number">Next of Kin Phone number</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="nok" style="height: 60px"></textarea>
                            <label for="nok">Next of kin addresss</label>
                        </div>
                    </div>
                </div>

                <!-- 7th sect -->
                <div class="mt-4 row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="file" class="form-control" id="number" placeholder="Phone number">
                        <label for="number">Upload Passport</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="nok" style="height: 60px" disabled></textarea>
                            <label for="nok">Click to add fingerprint</label>
                        </div>
                    </div>
                </div>

                <button class="btn submitz" type="submit">LOGIN</button>
            </form>
        </div>

<div class="bodis"></div>


        
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>