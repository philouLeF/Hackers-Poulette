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
    <header>
            <ul class="nav">
                <li>Home</li>
                <li>Products</li>
                <li>Pricing</li>
                <li>Contact</li>
            </ul>
    </header>

    <main>
        <img src="assets/img/hackers-poulette-logo.png" alt="Hackers Poulette logo">
    <form action="" class="form">
        <p class="h">Contact form</p>
        <div class="middle">
            <div class="firstColumn">
                <div class="name flexColumn">
                    <label for="firstname">Your firstname</label>
                    <input type="text">
                </div>
                <div class="lastname flexColumn">
                    <label for="lastname">Your lastname</label>
                    <input type="text">
                </div>

                <div class="gender">
                    <div class="genderFlex">
                        <p>Your gender</p>
                    </div>
                    <div class="genderFlex">
                        <input type="radio" name="gender">
                        <label for="woman">Woman</label>
                    </div>
                    <div class="genderFlex">
                        <input type="radio" name="gender">
                        <label for="man">Man</label>
                    </div>
                    <div class="genderFlex">
                        <input type="radio" name="gender">
                        <label for="preferNotToSay">Prefer not to say</label>
                    </div>
                </div>

                <div class="mail flexColumn">
                    <label for="">Your email address</label>
                    <input type="text">
                </div>
                <div class="country">
                    <label for="country">Your country</label>
                    <select name="country" id="country"> <!-- trouver une api -->
                        <option value="belgium">Belgium</option>
                        <option value="france">France</option>
                        <option value="luxembourg">Luxembourg</option>
                        <option value="netherlands">Netherlands</option>
                    </select>
                </div>
            </div>
            <div class="message">
                <label for="message">Your message</label>
                <textarea name="message"cols="40" rows="18" placeholder="Tell us what you want :)"></textarea>
            </div>
        </div>
        <div class="subject">
            <label for="subject">What is your request about ?</label>
            <select name="subject" id="subject">
                <option value="products">Our products</option>
                <option value="job">Our job offers</option>
                <option value="other">Other</option>
            </select>
        </div>
    </form>
</body>
</html>