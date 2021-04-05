<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../assets/css/profile.css" rel="stylesheet">
<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/utilities.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<title>Registration</title>
</head>
<body style="padding:20px;">
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header bg-primary">
          <h5 class="card-title text-white">Registration form</h5>
        </div>
        <div class="card-body">
          <form method="post" action="../forms/userRegistration.php">
            <div class="form-group">
              <label for="idCode">ID Code</label>
              <input type="text" class="form-control" id="" name="idCode" value="">
            </div><p></p>
            <div class="form-group">
              <span style="font-weight:bold;">---------->> Personal details <<----------</span><p></p>
              <label for="surname">Surname</label>
              <input type="text" class="form-control" id="" name="surname" value="">
            </div><p></p>
            <div class="form-group">
              <label for="otherName">Other Names</label>
              <input type="text" class="form-control" id="" name="otherName" value="">
            </div><p></p>
            <div class="form-group">
              <label for="otherName">Email Address</label>
              <input type="email" class="form-control" id="" name="emailAddress" value="">
            </div><p></p>
            <div class="form-group">
              <label for="otherName">Referral</label>
              <input type="text" class="form-control" id="" name="referral" value="">
            </div><p></p>
            <div class="form-group">
              <label for="contactAddress">Contact Address</label>
              <input type="text" class="form-control" id="" name="contactAddress" value="">
            </div><p></p>
            <div class="form-group">
              <label for="dateOfBirth">Date of birth</label>
              <input type="date" class="form-control" id="" name="dateOfBirth" value="">
            </div><p></p>
            <div class="form-group">
              <label for="dateOfBirth">Gender</label>
              <input type="text" class="form-control" id="" name="gender" value="">
            </div><p></p>
            <div class="form-group">
              <label for="nationality">Nationality/Country</label>
              <input type="text" class="form-control" id="" name="nationality" value="">
            </div><p></p>
            <div class="form-group">
              <label for="state">State</label>
              <input type="text" class="form-control" id="" name="state" value="">
            </div><p></p>
            <div class="form-group">
              <label for="maritalStatus">Marital Status</label>
              <input type="text" class="form-control" id="" name="maritalStatus" value="">
            </div><p></p>
            <div class="form-group">
              <label for="phoneNumber">Phone Number</label>
              <input type="text" class="form-control" id="" name="phoneNumber" value="">
            </div><p></p>
            <div class="form-group">
              <label for="whatsappNumber">Whatsapp Number</label>
              <input type="text" class="form-control" id="" name="whatsappNumber" value="">
            </div><p></p>
            <div class="form-group">
              <span style="font-weight:bold;">---------->> Next of Kin details <<----------</span><p></p>
              <label for="NOKName">Name</label>
              <input type="text" class="form-control" id="" name="NOKName" value="">
            </div><p></p>
            <div class="form-group">
              <label for="relationship">Relationship</label>
              <input type="text" class="form-control" id="" name="relationship" value="">
            </div><p></p>
            <div class="form-group">
              <label for="NOKphoneNumber">Phone Number</label>
              <input type="text" class="form-control" id="" name="NOKphoneNumber" value="">
            </div><p></p>
            <div class="form-group">
              <span style="font-weight:bold;">---------->> Bank details <<----------</span><p></p>
              <label for="bankName">Bank Name</label>
              <input type="text" class="form-control" id="" name="bankName" value="">
            </div><p></p>
            <div class="form-group">
              <label for="accountName">Account Name</label>
              <input type="text" class="form-control" id="" name="accountName" value="">
            </div><p></p>
            <div class="form-group">
              <label for="accountNumber">Account Number</label>
              <input type="text" class="form-control" id="" name="accountNumber" value="">
            </div><p></p>
            <div class="form-group">
              <label for="accountType">Account type</label>
              <input type="text" class="form-control" id="" name="accountType" value="">
            </div><p></p>
            <button type="submit" class="btn btn-primary w-100" name="registerBtn">Register Me</button>
          </form>
        </div>
        
      </div>
    </div>
      <div class="col-md-4"></div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>