
<form id="signup" autocomplete="off" action="#" method="post" name="myForm">
                        <input type="text" placeholder="Full name" id="Fullname" name="Fullname" class="signup-input" required value="<?php echo $fullname; ?>">
                        <br>
                        <input type="email" placeholder="Email" id="Email" name="Email" class="signup-input" required value="<?php echo $email; ?>">
                        <br>
                        <input type="text" placeholder="Username" id="Username" name="Username" class="signup-input" required value="<?php echo $username; ?>">
                        <br>
                        <input type="password" placeholder="Password" id="Password" name="Password" class="signup-input" required >
                        <br>
                        <input type="password" placeholder="Repeat password" id="RepeatPassword" name="RepeatPassword" class="signup-input" required >
                        <br>
                        <input type="text" placeholder="Số điện thoại" id="PhoneNumber" name="PhoneNumber" class="signup-input" required value="<?php echo $phone; ?>">
                        <br>
                        <select id="Gender" name="Gender" class="select-input">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                        <br>
                        <input type="date" placeholder="Ngày sinh:" id="DOB" name="DOB" class="signup-input" value="<?php echo $dob; ?>">
                        <br>
                        <input type="text" placeholder="Tên đường" id="Address" name="Address" class="signup-input" required value="<?php echo $address; ?>">
                        <br>
                        
                        <select id="District" name="District" class="select-input">
                            <option value="Quận 1">Quận 1</option>
                            <option value="Quận 2">Quận 2</option>
<br>
                        <button class="signup-submit" type="submit" name="signup-press">Sign Up</button>
                    </form>

<?php
    session_start();  // Khởi tạo phiên
    $severname = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname ="final";
    $fullname = "";
    $email = "";
    $username = "";
    $address = "";
    $gender = "";
    $phone = "";
    $dob="";
    $conn = new mysqli($severname,$dbusername,$dbpassword,$dbname);
    if($conn->connect_error){
        die("Connection failed". $conn->connect_error);
    }
    if(isset($_POST['signup-press'])){
        $fullname = $_POST['Fullname'];
        $email = $_POST['Email'];
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $repeatPassword = $_POST['RepeatPassword'];
        $address = $_POST['Address'];
        $gender = $_POST['Gender'];
        $phone = $_POST['PhoneNumber'];
        $dob = $_POST['DOB'];
        $district = $_POST['District'];
        $currentTime = date('Y-m-d H:i:s');
        $idcustomer="";
        $sql = "SELECT MAX(IdCustomer) AS max_id FROM customer";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Lấy kết quả
            $row = $result->fetch_assoc();
            $max_id = $row["max_id"];
            // Tách số từ ID
            $number = substr($max_id, 3);
            // Tăng số lên 1
            $new_number = intval($number) + 1;
            // Tạo ID mới
            $idcustomer = "US-" . $new_number;
        } else {
            // Nếu không tìm thấy bản ghi nào, đặt idcustomer là "US-1"
            $idcustomer = "US-1";
        }
$check_email_query = "SELECT * FROM customer WHERE EmailCustomer = '$email'";
        $check_email_query_run = mysqli_query($conn, $check_email_query);
        if(mysqli_num_rows($check_email_query_run) > 0){
            echo "<script>
                alert('Email đã tồn tại. Vui lòng thử lại với email khác.');
            </script>";
        }
        else{
            if($password == $repeatPassword ){
                $insert_query_customer = "INSERT INTO customer(IdCustomer,FullNameCustomer, PhoneCustomer, EmailCustomer, Gender, UsernameCustomer, PasswordCustomer,Date, Status,DOB) 
                VALUE ('$idcustomer','$fullname','$phone','$email','$gender','$username','$password','$currentTime','Unlock','$dob')";
                $insert_query_address = "INSERT INTO address(IdAddress,IdCustomer,AddressCustomer,District,Ward,City)
VALUE('$idaddress','$idcustomer','$address','$district','$ward','$city')";
                $insert_query_run_customer = mysqli_query($conn,$insert_query_customer);
                $insert_query_run_address = mysqli_query($conn,$insert_query_address);
                echo "<script>
                    alert('Đăng ký thành công.');
                    window.location.href='../Customer/SignIn.php';
                </script>";
            }
            else{
                echo "<script>
                    alert('Mật khẩu không khớp. Vui lòng thử lại.');
                </script>";
            }
        }
    } 
    $conn->close();
?>
<script>
    function validateForm() {
  var emailInput = document.getElementById("Email");
  var phoneInput = document.getElementById("PhoneNumber");
  var emailValue = emailInput.value;
  var phoneValue = phoneInput.value;
  
  var phonePattern = /^(0\d{9}|0\d{2}[.\s-]\d{3}[.\s-]\d{2}[.\s-]\d{2})$/;
  var emailPattern = /^[a-zA-Z0-9_.]+@gmail\.com$/;

  var isPhoneValid = phonePattern.test(phoneValue.replace(/[.\s-]/g, ''));
  var isEmailValid = emailPattern.test(emailValue);

  if (isPhoneValid && isEmailValid) {
    document.getElementById("validationResult").textContent = "Số điện thoại và email hợp lệ";
  } else if (isPhoneValid) {
    document.getElementById("validationResult").textContent = "Số điện thoại hợp lệ, email không hợp lệ";
  } else if (isEmailValid) {
    document.getElementById("validationResult").textContent = "Email hợp lệ, số điện thoại không hợp lệ";
  } else {
    document.getElementById("validationResult").textContent = "Số điện thoại và email không hợp lệ";
  }
}

</script>


