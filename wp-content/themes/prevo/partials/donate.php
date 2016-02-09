
<div class="col-sm-12" id="donatePage">
  <div class="col-xs-12 col-sm-6 animated fadeInUp" id="left">
    <h1>You Are a Vital Part of This Campaign</h1>
    <p>I am honored you have chosen to donate your hard-earned dollars to this campaign. Your donation will provide the financial resources necessary in getting our message out early and often as we approach Election Day in November. Thanks to the financial support of concerned citizens like you, I will be able to effectively reach out to the community with our shared values and interests in creating a brighter future for Boone County.<br><br>

If you would prefer to give via check, please fill out a contribution form and send it, along with your donation, to:</p>
      <div class="col-sm-12" id="addressBox">
        <div class="col-sm-6" id="address">
    <p>
<br><br><strong>Supporters of Paul Prevo<br>

15451 N. Tucker School Road<br>

      Hallsville, MO 65255-9770</strong></p>
        </div>
      <div class="col-sm-6" id="donateFormButton">
    
    <button class="btn btn-lg btn-default" onclick="location.href='wp-content/themes/prevo/prevoDonationForm.pdf'">Print Contribution Form</button>
    
        </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 animated fadeInRight" id="formContainer">
  <form class="form-horizontal" id="donateForm" ng-controller="paypal">
    <div class="form-group">
      <label for="inputFirst" class="col-sm-2 control-label">Full Name</label>
      <div class="col-xs-12 col-sm-10">
        <input type="text" class="form-control doubleRow" id="inputFirst" placeholder="First Name" ng-model="user.firstName">
        <input type="text" class="form-control doubleRow" id="inputLast" placeholder="Last Name" ng-model="user.lastName">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-sm-2 control-label">Email</label>
      <div class="col-xs-12 col-sm-10">
        <input type="email" class="form-control singleRow" id="inputPassword3" placeholder="Email" ng-model="user.email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPhone" class="col-sm-2 control-label">Phone Number</label>
      <div class="col-xs-12 col-sm-10">
        <input type="tel" class="form-control doubleRow" id="inputPhone" placeholder="Phone Number" ng-model="user.phone">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAdd" class="col-sm-2 control-label">Address</label>
      <div class="col-xs-12 col-sm-10">
        <input type="text" class="form-control doubleRow" id="inputStreet" placeholder="Street Address" ng-model="user.streetAddress">
        <input type="text" class="form-control doubleRow" id="inputStreet2" placeholder="Street Address 2" ng-model="user.streetAddress2">
        <input type="text" class="form-control doubleRow" id="inputCity" placeholder="City" ng-model="user.city">
        <select class="form-control doubleRow" id="inputState" placeholder="State" ng-model="user.state">
        <option value='' disabled default selected>State</option>
        <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">Dist of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
        </select>
        <input type="text" class="form-control doubleRow" id="inputZip" placeholder="Zip" ng-model="user.zip">
      </div>
    </div>
    <div class="form-group">
      <div class="checkbox col-xs-12 col-sm-10">
          <p id="disclaim">MO Law requires that contibutors indicate if they have a contractual relationship over $500 with the County of Boone.</p>
        
        <label for="checkbox" class="col-xs-12 col-sm-10" id="box">If yes, check box and describe below
        </label>
          <input type="checkbox" id="checkbox">
                <input type="text" class="form-control singleRow" id="inputDisclaim" placeholder="Describe (Optional)" ng-model="user.checkbox">

      </div>
    </div>
    <div class="form-group">
       <label for="inputCard" class="col-sm-2 control-label">Credit Card Number</label>
      <div class="col-xs-12 col-sm-10">
        <select class="form-control doubleRow" id="inputCard" placeholder="Card Type" ng-model="user.cardType"><option value='' disabled selected>Type</option><option>VISA</option><option>MASTERCARD</option><option>DISCOVER</option></select>
        <input type="text" class="form-control doubleRow" id="inputCard" placeholder="Card Number" ng-model="user.cardNumber">
        <select class="form-control doubleRow" id="inputEmp" ng-model="user.expirationMonth">
          <option value='' disabled selected>Expiration Month</option>
          <option value="1">1</option>
                                                                	<option value="2">2</option>
                                                                	<option value="3">3</option>
                                                                	<option value="4">4</option>
                                                                	<option value="5">5</option>
                                                                	<option value="6">6</option>
                                                                	<option value="7">7</option>
                                                                	<option value="8">8</option>
                                                                	<option value="9">9</option>
                                                                	<option value="10">10</option>
                                                                	<option value="11">11</option>
          <option value="12">12</option></select>
        
        <select type="text" class="form-control doubleRow" id="inputEmp" placeholder="Expiration Month (YYYY)" ng-model="user.expirationYear">
        <option value='' disabled selected>Expiration Year</option>             	
                                                                	
                                                                	<option value="2016">2016</option>
                                                                	<option value="2017">2017</option>
                                                                	<option value="2018">2018</option>
                                                                	<option value="2019">2019</option>
        <option value="2020">2020</option>
	<option value="2021">2021</option>
	<option value="2022">2022</option></select>
        
        <input type="text" class="form-control doubleRow" id="inputCVV" placeholder="CVV" ng-model="user.cvvNum">
        <input type="text" class="form-control doubleRow" id="inputBillStreet" placeholder="Street Address" ng-model="user.billAddr">
        <input type="text" class="form-control doubleRow" id="inputBillStreet2" placeholder="Street Address 2" ng-model="user.billAddr2">
        <input type="text" class="form-control doubleRow" id="inputBillCity" placeholder="City" ng-model="user.billCity">
        <select class="form-control doubleRow" id="inputBillState" placeholder="State" ng-model="user.billState">
          <option value='' disabled default selected>State</option>
          <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">Dist of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
        </select>
          
          
        <input type="text" class="form-control doubleRow" id="inputBillZip" placeholder="Zip" ng-model="user.billZip">
        <input type="text" class="form-control doubleRow" id="inputBillZip" placeholder="Amount to Donate" ng-model="user.amount">
      
    </div>
    
    <div class="form-group">
       <label for="inputOccu" class="col-sm-2 control-label">Occupation</label>
      <div class="col-xs-12 col-sm-10">
        <input type="text" class="form-control doubleRow" id="inputOccu" placeholder="Occupation" ng-model="user.occu">
        <input type="text" class="form-control doubleRow" id="inputEmp" placeholder="Employer" ng-model="user.employer">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" id="donateButton" ng-click="submitPayment()">Donate</button>
      </div>
    </div>
  </form>
  </div>
</div>
