<?php require_once("db.php"); ?>
<?php
function registerUser () {
    $con = dbConnect();

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $password = $_POST['password'];
        $number = $_POST['number'];

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO admin (`email`, `password`, `first_name`, `last_name`, `number`) VALUES(?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssss", $email, $password, $firstName, $lastName, $number);
        $stmt->execute();

        if ($stmt) {
            echo "<h4 class='text-success'>Registration successful</h4>";

            header("Refresh: 3, /project/admin");
        } else {
            echo "Sorry";
        }
    } else {
        echo "SIGN UP";
    }
}

function login () {
    $con = dbConnect();

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT `password` FROM `admin` WHERE `email` = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows < 1){
            echo "Incorrect email or password";
        } else {
            $dbPassword = $result->fetch_object()->password;

            if (password_verify($password, $dbPassword)) {
                echo "Login successful.";

                header("Refresh: 3, /project/admin");
            } else {
                echo "Incorrect email or password";
            }
        }
    } else {
        echo "Login";
    }
}