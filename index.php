<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/hackers-poulette-logo.png">
    <title>Hackers Poulette</title>
</head>
<body>
    <form action="" class="form">
        <p class="h">Contact form</p>
        <div class="middle">
            <div class="firstColumn">
            <div class="name">
                    <label for="firstname">Your firstname</label>
                    <input type="text">
                </div>
                <div class="lastname">
                    <label for="lastname">Your lastname</label>
                    <input type="text">
                </div>
                <div class="gender">
                    <div class="genderFlex">
                        <label for="gender">Your gender</label>
                        <input type="radio" name="gender">
                    </div>
                    <div class="genderFlex">
                    <label for="man">Man</label>
                        <input type="radio" name="gender">
                        <label for="woman">Woman</label>
                    </div>
                    <div class="genderFlex">
                        <input type="radio" name="gender">
                        <label for="Prefer not to say">Prefer not to say</label>
                    </div>
                </div>
            </div>
            <div class="message">
                <label for="message">Your message</label>
                <input type="text">
            </div>
        </div>
        <div class="subject">
            <p>Subject</p>
        </div>
    </form>
</body>
</html>