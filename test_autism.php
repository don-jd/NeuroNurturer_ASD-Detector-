<?php
include("header.php");
include('connection.php');
?>
<style>
    .table {
        width: 100%; /* Set table width to 100% */
        border-collapse: collapse; /* Collapse table borders */
    }

    .table th,
    .table td {
        padding: 8px; /* Add padding to table cells */
        text-align: left; /* Align text to the left */
        border-bottom: 1px solid #ddd; /* Add bottom border to table cells */
    }

    .table th {
        background-color: #f2f2f2; /* Add background color to table header */
    }
</style>
<div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4><em>Early</em> Eye</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>This advanced facial recognition technology helps identify potential markers of ASD
              in children, enabling early intervention .</p>
          </div>
        </div>
        
<div class="col-lg-12">
  <div class="pricing-item-pro">
    <h4>Questions</h4>
    
    <form  method="POST" >
                    <table  class="table" >
                    <tr>
                        <th>S.NO</th>
                        <th >Please tick one option per question only</th>
                        <th>Definitely Agree</th>
                        <th>Slightly Agree</th>
                        <th>Slightly  Disagree</th>
                        <th>Definitely Disagree</th>
                    </tr>
                    
                        <tr><td>1</td>
                        <td style="width: 70%;"> I often notice small sounds when others do not </td>
                        <td> <input class="form-check-input"  name='a' type='radio' value='1'></td>
                        <td> <input class="form-check-input"  name='a' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='a' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='a' type='radio' value='0'></td>
                        </tr>
                        
                        
                        <tr><td>2</td>
                        <td> I usually concentrate more on the whole
                        picture, rather than the small details </td>
                        <td > <input class="form-check-input"  name='b' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='b' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='b' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='b' type='radio' value='1'></td>
                        </tr>
                        
                        
                        <tr><td>3</td>
                        <td> I find it easy to do more than one thing at
                        once</td>
                        <td> <input class="form-check-input" name='c' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='c' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='c' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='c' type='radio' value='1'></td>
                        </tr>
                        
                        
                        <tr><td>4</td>
                        <td> If there is an interruption, I can switch back to
                        what I was doing very quickly </td>
                        <td> <input class="form-check-input" name='d' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='d' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='d' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='d' type='radio' value='1'></td>
                        </tr>
                        
                        
                        <tr><td>5</td>
                        <td> I find it easy to ‘read between the lines’ when
                        someone is talking to me 
                         </td>
                        <td> <input class="form-check-input" name='e' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='e' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='e' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='e' type='radio' value='1'></td>
                        </tr>
                        
                        
                        <tr><td>6</td>
                        <td> I know how to tell if someone listening to me
                        is getting bored  </td>
                        <td> <input class="form-check-input" name='f' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='f' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='f' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='f' type='radio' value='1'></td>
                        </tr>
                        
                        
                        
                        <tr><td>7</td>
                        <td> When I’m reading a story I find it difficult to
                        work out the characters’ intentions </td>
                        <td> <input class="form-check-input" name='g' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='g' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='g' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='g' type='radio' value='0'></td>
                        </tr>
                        
                        
                        
                        <tr><td>8</td>
                        <td> I like to collect information about categories of 
                        things (e.g. types of car, types of bird, types 
                        of train, types of plant etc)  </td>
                        <td> <input class="form-check-input" name='h' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='h' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='h' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='h' type='radio' value='0'></td>
                        </tr>
                        
                        
                        
                        <tr><td>9</td>
                        <td> I find it easy to work out what someone is
                        thinking or feeling just by looking at their face </td>
                        <td> <input class="form-check-input" name='i' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='i' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='i' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='i' type='radio' value='1'></td>
                        </tr>
                        
                        
                        
                        
                        <tr><td>10</td>
                        <td> I find it difficult to work out people’s intentions </td>
                        <td> <input class="form-check-input" name='j' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='j' type='radio' value='1'></td>
                        <td> <input class="form-check-input" name='j' type='radio' value='0'></td>
                        <td> <input class="form-check-input" name='j' type='radio' value='0'></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <label for="">Age</label>
                                <input type="number" required class="form-control" name="age" placeholder="age" min="18" max="90">
								<br>
								<label for="">Ethnicity</label>
                                <select required class="form-control" name="ethnicity">
                                    <option value="" >Select</option>
                                    <option value="1">White-European</option>
                                    <option value="2">Middle Eastern</option>
                                    <option value="3">Pasifika</option>
                                    <option value="4">Black</option>
                                    <option value="5">Others</option>
                                    <option value="6">Hispanic</option>
                                    <option value="7">Asian</option>
                                    <option value="8">Turkish</option>
                                    <option value="9">South Asian</option>
                                    <option value="10">Latino</option>
                                    <option value="11">others</option>
                                </select>
								<br>
								<label for="">Autisum</label>
                                <select required class="form-control" name="autisum">
                                    <option value="" >Select</option>
                                    <option value="0">no</option>
                                    <option value="1">yes</option>
                                </select>
								<br>
								<label for="">Gender</label>
                                <select required class="form-control" name="gender" id="">
                                    <option value="" >Select</option>
                                    <option value="0">male</option>
                                    <option value="1">female</option>
                                </select>
                                </td>
                                <td colspan="4">
								<br>
								<label for="">Jaudice</label>
                                <select required class="form-control" name="jaudice" id="">
                                    <option value="">Select</option>
                                    <option value="0">no</option>
                                    <option value="1">yes</option>
                                </select>
								<br>
								<label for="">Contry</label>
                                <select required class="form-control" name="contry_of_res" id="">
                                    <option value="">Select</option>
                                    <option value="0">Austria</option>
                                    <option value="1">India</option>
                                    <option value="2">United States</option>
                                    <option value="3">South Africa</option>
                                    <option value="4">Jordan</option>
                                    <option value="5">United Kingdom</option>
                                    <option value="6">Brazil</option>
                                    <option value="7">New Zealand</option>
                                    <option value="8">Canada</option>
                                    <option value="9">Kazakhstan</option>
                                    <option value="10">United Arab Emirates</option>
                                    <option value="11">Australia</option>
                                    <option value="12">Ukraine</option>
                                    <option value="13">Iraq</option>
                                    <option value="14">France</option>
                                    <option value="15">Malaysia</option>
                                    <option value="16">Viet Nam</option>
                                    <option value="17">Egypt</option>
                                    <option value="18">Netherlands</option>
                                    <option value="19">Afghanistan</option>
                                    <option value="20">Oman</option>
                                    <option value="21">Italy</option>
                                    <option value="22">American Samoa</option>
                                    <option value="23">Bahamas</option>
                                    <option value="24">Saudi Arabia</option>
                                    <option value="25">Ireland</option>
                                    <option value="26">Aruba</option>
                                    <option value="27">Sri Lanka</option>
                                    <option value="28">Russia</option>
                                    <option value="29">Bolivia</option>
                                    <option value="30">Azerbaijan</option>
                                    <option value="31">Armenia</option>
                                    <option value="32">Serbia</option>
                                    <option value="33">Ethiopia</option>
                                    <option value="34">Sweden</option>
                                    <option value="35">Iceland</option>
                                    <option value="36">Hong Kong</option>
                                    <option value="37">Angola</option>
                                    <option value="38">China</option>
                                    <option value="39">Germany</option>
                                    <option value="40">Spain</option>
                                    <option value="41">Tonga</option>
                                    <option value="42">Pakistan</option>
                                    <option value="43">Iran</option>
                                    <option value="44">Argentina</option>
                                    <option value="45">Japan</option>
                                    <option value="46">Mexico</option>
                                    <option value="47">Nicaragua</option>
                                    <option value="48">Sierra Leone</option>
                                    <option value="49">Czech Republic</option>
                                    <option value="50">Niger</option>
                                    <option value="51">Romania</option>
                                    <option value="52">Cyprus</option>
                                    <option value="53">Belgium</option>
                                    <option value="54">Burundi</option>
                                    <option value="55">Bangladesh</option>
                    
                                </select>
								<br>
								<label for="">Used App Before</label>
                                <select required class="form-control" name="used_app_before" id="">
                                    <option value="" >Select</option>
                                    <option value="0">no</option>
                                    <option value="1">yes</option>
                                </select>
								<br>
								<label for="">Relation</label>
                                <select required class="form-control" name="relation" id="">
                                    <option value="" >Select</option>
                                    <option value="0">Self</option>
                                    <option value="1">Relative</option>
                                    <option value="2">Parent</option>
                                    <option value="3">not_specified</option>
                                    <option value="4">Others</option>
                                    <option value="5">Health care professional</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                           
                        </tr>
                        
                        <tr >
                            <td><input class="btn btn-primary" type="submit" name="submit"></td>
                        </tr>
                        
                        </table>
                    </form>
    <br><br><br><br>
  </div>
</div>

<script>
  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
      var output = document.getElementById('imagePreview');
      output.style.display = 'block';
      output.innerHTML = '<img src="' + reader.result + '" style="max-width:224px; max-height:224px; border: 5px solid #D5EEFF; border-radius: 30px;">';
    };
    reader.readAsDataURL(event.target.files[0]);
  }
</script>


        
<?php
include('connection.php');
if(isset($_POST['submit']))
{
 
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];
$h = $_POST['h'];
$i = $_POST['i'];
$j = $_POST['j'];

$age = $_POST['age'];
$ethnicity = $_POST['ethnicity'];
$autisum = $_POST['autisum'];
$gender = $_POST['gender'];
$jaudice = $_POST['jaudice'];
$contry_of_res = $_POST['contry_of_res'];
$used_app_before = $_POST['used_app_before'];
$relation = $_POST['relation'];

 
$head="A1_Score,A2_Score,A3_Score,A4_Score,A5_Score,A6_Score,A7_Score,A8_Score,A9_Score,A10_Score,gender,ethnicity,jaundice,austim,contry_of_res,used_app_before,relation";
$data="$a,$b,$d,$e,$f,$g,$h,$i,$j,$age,$gender,$ethnicity,$jaudice,$autisum,$contry_of_res,$used_app_before,$relation";
   
$myfile="test_aut.csv";
$fh=fopen($myfile,'w') or die('canot open file');
$str="$head\n$data";
fwrite($fh,$str);
fclose($fh);   

set_time_limit(0);


echo "<br>";
$python = `python test_aut.py`;
//echo "<pre>".$python."</pre>";

echo "<div class='col-lg-12 col-md-12 well' style='background-color:#aad6ff' >
				      <center><h1>OUTPUT</h1><hr>
					  <pre><h3>".$python."</h3></pre></center> </div>";
			$date=date('Y-m-d');
            // Assuming $con is your database connection
// $result = mysqli_query($con, "INSERT INTO result (user_id, result, date) VALUES ('$_SESSION[uid]', '$python', '$date')");

// if ($result) {
//     echo "Insertion successful!";
// } else {
//     echo "Error: " . mysqli_error($con);
// }


            //insertion of the result to the database
            
			//mysqli_query($con,"insert into result(user_id,result,date) Values ('$_POST[uid]','$python','$date')");

      

}
if (trim($python) === "Suspected Autistic") {
    // Redirect to activities.php
    mysqli_query($con,"insert into result(user_id,result,date) Values ('$_SESSION[uid]','$python','$date')");
    echo "<script>window.location='activities.php'</script>";
}


?>




      </div>
    </div>
  </div> 
  <?php
include("footer.php");
?>