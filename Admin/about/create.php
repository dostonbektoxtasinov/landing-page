<?php
require "./db.php";



if (isset($_POST['submit'])) {
    $img = $_POST['rasm'];
    $number = $_POST['number'];
    $age = $_POST['age'];
    $dagree = $_POST['dagree'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `About`(`id`, `img`, `number`, `age`, `dagree`, `email`) 
        VALUES ( NULL,'$img','$number','$age','$dagree','$email')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "created successfully";
    } else {
        echo "created not successfully";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <title>Portfolio Mine | About </title>

</head>

<body>
    <div class="box">
        <h1>Please Login</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-inp_lab rasm">
                <input type="file" name="rasm" required>
                <label>FILE</label>
            </div>
            <div class="input-groups">
                <div class="form-inp_lab">
                    <input type="number" name="number" required>
                    <label>Number</label>
                </div>
                <div class="form-inp_lab">
                    <input type="number" name="age" required>
                    <label>Age</label>
                </div>
            </div>
            <div class="input-groups">

                <div class="form-inp_lab">
                    <input type="text" name="dagree" required>
                    <label>Dagree</label>
                </div>
                <div class="form-inp_lab">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

            </div>

            <div class="form-inp_lab input-groups">
                <button class="btn" type="submit" name="submit">Create</button>
                <a href="./about.php" type="button" class="btn button float-right-a">
                    Back
                </a>
            </div>
        </form>
    </div>


</body>

</html>
<script>
    const labels = document.querySelectorAll('.form-inp_lab label')

    labels.forEach(label => {
        label.innerHTML = label.innerText
            .split('')
            .map((letter, index) => `<span style="transition-delay:${index * 50}ms">${letter}</span>`)
            .join('')
    })
</script>
<style>
    @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

    * {
        box-sizing: border-box;
    }

    body {
        background-color: steelblue;
        color: #fff;
        font-family: 'Muli', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        overflow: hidden;
        margin: 0;
    }

    .float-right-a {
        position: relative;
        left: 300px;
        color: #000 !important;
        text-align: center;
    }

    .rasm label {
        margin-left: 150px;
    }

    .rasm input[type="file"] {
        padding: 20px 0 0 50px;
        margin-left: 150px;
    }

    .box {
        background-color: rgba(0, 0, 0, 0.4);
        padding: 20px 40px;
        border-radius: 5px;
    }

    .box h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    .box a {
        text-decoration: none;
        color: lightblue;
    }

    .btn {
        cursor: pointer;
        display: inline-block;
        width: 100%;
        background: lightblue;
        padding: 15px;
        font-family: inherit;
        font-size: 16px;
        border: 0;
        border-radius: 5px;
    }

    .btn:focus {
        outline: 0;
    }

    .btn:active {
        transform: scale(0.98);
    }

    .text {
        margin-top: 30px;
    }

    .input-groups {
        display: flex;
    }

    .form-inp_lab {
        position: relative;
        margin: 20px 0 40px;
        padding: 0 5px 0 0;
        width: 300px;
    }

    .form-inp_lab input {
        background-color: transparent;
        border: 0;
        border-bottom: 2px #fff solid;
        display: block;
        width: 100%;
        padding: 15px 0;
        font-size: 18px;
        color: #fff;
    }

    .form-inp_lab input:focus,
    .form-inp_lab input:valid {
        outline: 0;
        border-bottom-color: lightblue;
    }

    .form-inp_lab label {
        position: absolute;
        top: 15px;
        left: 0;
        pointer-events: none;
    }

    .form-inp_lab label span {
        display: inline-block;
        font-size: 18px;
        min-width: 5px;
        transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .form-inp_lab input:focus+label span,
    .form-inp_lab input:valid+label span {
        color: lightblue;
        transform: translateY(-30px);
    }
</style>