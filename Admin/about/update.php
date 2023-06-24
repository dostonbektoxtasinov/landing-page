<!DOCTYPE html>
<html>

<head>
    <title>Portfolio Mine | About </title>

</head>

<body>
    <div class="container">
        <h1>Please Login</h1>
        <form>
            <div class="form-control rasm">
                <input type="file" required>
                <label>FILE</label>
            </div>
            <div class="input-group">
                <div class="form-control">
                    <input type="number" value="12345" required>
                    <label>Number</label>
                </div>
                <div class="form-control">
                    <input type="number" value="25" required>
                    <label>Age</label>
                </div>
            </div>
            <div class="input-group">
                <div class="form-control">
                    <input type="text" value="Junior" required>
                    <label>Dagree</label>
                </div>
                <div class="form-control">
                    <input type="email" value="dfsgzg@gmail.com" required>
                    <label>Email</label>
                </div>
            </div>
            <div class="form-control input-group">
                <button class="btn">Create</button>
                <a href="./about.php" class="btn float-right-a">
                    <button class="btn">Back</button>
                </a>
            </div>
        </form>
    </div>


</body>

</html>
<script>
    const labels = document.querySelectorAll('.form-control label')

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
    }

    .rasm label {
        margin-left: 150px;
    }

    .rasm input[type="file"] {
        padding: 20px 0 0 50px;
        margin-left: 150px;
    }

    .container {
        background-color: rgba(0, 0, 0, 0.4);
        padding: 20px 40px;
        border-radius: 5px;
    }

    .container h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    .container a {
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

    .input-group {
        display: flex;
    }

    .form-control {
        position: relative;
        margin: 20px 0 40px;
        padding: 0 5px 0 0;
        width: 300px;
    }

    .form-control input {
        background-color: transparent;
        border: 0;
        border-bottom: 2px #fff solid;
        display: block;
        width: 100%;
        padding: 15px 0;
        font-size: 18px;
        color: #fff;
    }

    .form-control input:focus,
    .form-control input:valid {
        outline: 0;
        border-bottom-color: lightblue;
    }

    .form-control label {
        position: absolute;
        top: 15px;
        left: 0;
        pointer-events: none;
    }

    .form-control label span {
        display: inline-block;
        font-size: 18px;
        min-width: 5px;
        transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .form-control input:focus+label span,
    .form-control input:valid+label span {
        color: lightblue;
        transform: translateY(-30px);
    }
</style> 