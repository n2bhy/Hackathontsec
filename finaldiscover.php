<html>
<head>
<link rel="stylesheet" type="text/css" href="common.css">
<style>

	input[type=text],input[type=number]  {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]{
  width= 10%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline;
  border: 1px solid#ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
.Header{
  color: green;
}
</style>

</head>
<body>
<div class="Header">
GuideChief.com
</div>

<div class="head2"><ul><center>
  <li><a href="index.html">Home</a></li>
  <li><a href="finaldiscover.php">Discover</a></li>
  <li><a href="preparation.php">prepare</a></li>
  <li><a href="apply.php">Apply</a></li>
  <li><a href="ranking.php">Ranking</a></li>
  </center>
</ul>
</div>
<form action="next2.php" method="post" autocomplete="off">
COUNTRY:
<input list="country" name="country" placeholder="country" required ><br>
<!------------------------------------->
<datalist id="country">
<option value="Afghanistan">
<option value="Albania">
<option value="Algeria">
<option value="Andorra">
<option value="Angola">
<option value="Antigua & Deps">
<option value="Argentina">
<option value="Armenia">
<option value="Australia">
<option value="Austria">
<option value="Azerbaijan">
<option value="Bahamas">
<option value="Bahrain">
<option value="Bangladesh">
<option value="Barbados">
<option value="Belarus">
<option value="Belgium">
<option value="Belize">
<option value="Benin">
<option value="Bhutan">
<option value="Bolivia">
<option value="Bosnia Herzegovina">
<option value="Botswana">
<option value="Brazil">
<option value="Brunei">
<option value="Bulgaria">
<option value="Burkina">
<option value="Burundi">
<option value="Cambodia">
<option value="Cameroon">
<option value="Canada">
<option value="Cape Verde">
<option value="Central African Rep">
<option value="Chad">
<option value="Chile">
<option value="China">
<option value="Colombia">
<option value="Comoros">
<option value="Congo">
<option value="Congo {Democratic Rep}">
<option value="Costa Rica">
<option value="Croatia">
<option value="Cuba">
<option value="Cyprus">
<option value="Czech Republic">
<option value="Denmark">
<option value="Djibouti">
<option value="Dominica">
<option value="Dominican Republic">
<option value="East Timor">
<option value="Ecuador">
<option value="Egypt">
<option value="El Salvador">
<option value="Equatorial Guinea">
<option value="Eritrea">
<option value="Estonia">
<option value="Ethiopia">
<option value="Fiji">
<option value="Finland">
<option value="France">
<option value="Gabon">
<option value="Gambia">
<option value="Georgia">
<option value="Germany">
<option value="Ghana">
<option value="Greece">
<option value="Grenada">
<option value="Guatemala">
<option value="Guinea">
<option value="Guinea-Bissau">
<option value="Guyana">
<option value="Haiti">
<option value="Honduras">
<option value="Hungary">
<option value="Iceland">
<option value="India">
<option value="Indonesia">
<option value="Iran">
<option value="Iraq">
<option value="Ireland {Republic}">
<option value="Israel">
<option value="Italy">
<option value="Ivory Coast">
<option value="Jamaica">
<option value="Japan">
<option value="Jordan">
<option value="Kazakhstan">
<option value="Kenya">
<option value="Kiribati">
<option value="Korea North">
<option value="Korea South">
<option value="Kosovo">
<option value="Kuwait">
<option value="Kyrgyzstan">
<option value="Laos">
<option value="Latvia">
<option value="Lebanon">
<option value="Lesotho">
<option value="Liberia">
<option value="Libya">
<option value="Liechtenstein">
<option value="Lithuania">
<option value="Luxembourg">
<option value="Macedonia">
<option value="Madagascar">
<option value="Malawi">
<option value="Malaysia">
<option value="Maldives">
<option value="Mali">
<option value="Malta">
<option value="Marshall Islands">
<option value="Mauritania">
<option value="Mauritius">
<option value="Mexico">
<option value="Micronesia">
<option value="Moldova">
<option value="Monaco">
<option value="Mongolia">
<option value="Montenegro">
<option value="Morocco">
<option value="Mozambique">
<option value="Myanmar, {Burma}">
<option value="Namibia">
<option value="Nauru">
<option value="Nepal">
<option value="Netherlands">
<option value="New Zealand">
<option value="Nicaragua">
<option value="Niger">
<option value="Nigeria">
<option value="Norway">
<option value="Oman">
<option value="Pakistan">
<option value="Palau">
<option value="Panama">
<option value="Papua New Guinea">
<option value="Paraguay">
<option value="Peru">
<option value="Philippines">
<option value="Poland">
<option value="Portugal">
<option value="Qatar">
<option value="Romania">
<option value="Russian Federation">
<option value="Rwanda">
<option value="St Kitts & Nevis">
<option value="St Lucia">
<option value="Saint Vincent & the Grenadines">
<option value="Samoa">
<option value="San Marino">
<option value="Sao Tome & Principe">
<option value="Saudi Arabia">
<option value="Senegal">
<option value="Serbia">
<option value="Seychelles">
<option value="Sierra Leone">
<option value="Singapore">
<option value="Slovakia">
<option value="Slovenia">
<option value="Solomon Islands">
<option value="Somalia">
<option value="South Africa">
<option value="South Sudan">
<option value="Spain">
<option value="Sri Lanka">
<option value="Sudan">
<option value="Suriname">
<option value="Swaziland">
<option value="Sweden">
<option value="Switzerland">
<option value="Syria">
<option value="Taiwan">
<option value="Tajikistan">
<option value="Tanzania">
<option value="Thailand">
<option value="Togo">
<option value="Tonga">
<option value="Trinidad & Tobago">
<option value="Tunisia">
<option value="Turkey">
<option value="Turkmenistan">
<option value="Tuvalu">
<option value="Uganda">
<option value="Ukraine">
<option value="United Arab Emirates">
<option value="United Kingdom">
<option value="United States">
<option value="Uruguay">
<option value="Uzbekistan">
<option value="Vanuatu">
<option value="Vatican City">
<option value="Venezuela">
<option value="Vietnam">
<option value="Yemen">
<option value="Zambia">
<option value="Zimbabwe">
</datalist>
COLLEGE NAME:
<input type="text" name="colg_name" required placeholder="COLLEGE NAME"><br>
GRE SCORE:
<input type="number" name="gre_score" min="260" max="340" placeholder="GRE SCORE" required><br>
TOEFL SCORE:
<input type="number" name="toefl_score" min="0" max="120" placeholder="TOEFL SCORE" required><br>
CUMULATIVE GRADE POINT:
<input type="number" name="gpa" min="0.0" max="10.0" placeholder="CGPA" required step=0.01><br>
ASPIRING COUNTRY:
<input list="asp_country" name="asp_country" placeholder="aspiring country" required><br>
<datalist id="asp_country">
<option value="UNITED STATES">
<option value="UNITED KINGDOM">
<option value="CANADA">
<option value="AUSTRALIA">
<option value="GERMANY">
<option value="FRANCE">
<option value="NETHERLAND">
</datalist>
<input type="submit" name="submit"><br>
 </form>
<footer>
<ul class="nodesign">
<li><a href=""cover.html">About Us</a></li>
<li><a href=""cover.html">Contact Us</a></li>
<li><a href=""cover.html">Management team</a></li>
<li><a href="cover.html"cover.html">FAQ's</a></li>
</ul>

</footer>


</body>
</html>