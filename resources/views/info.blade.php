
@extends('master')
<div class="w3-main" style="margin-left:340px;margin-right:40px;margin-top:70px">
    <h1>
<p><b>Developer a prevádzkovateľ portálu</p>

</h1>

    <p><img src="https://www.nugisfinem.org/wp-content/uploads/2017/12/sipka_nugis.png"width="40" height="20 " alt="-->"> Vytvorila spoločnost <u>Mrkvosoft</u>.</p>
    <p><img src="https://www.nugisfinem.org/wp-content/uploads/2017/12/sipka_nugis.png"width="40" height="20 " alt="-->"> V prípade otázok nás môžete kontaktovať na telefónom čísle 0905 123 654
    <p> alebo nám napíšte pomocou formuláru.</p></p>

    </b>
</div>


    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            * {
                box-sizing: border-box;
            }

            /* Style inputs */
            input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            /* Style the container/contact section */
            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 10px;
            }

            /* Create two columns that float next to eachother */
            .column {
                float: right;
                width: 40%;
                margin-top: 6px;
                padding: 20px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            .w3-main{
                text-align: center;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .column, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
            }
        </style>
    </head>
    <div>

        <div class="w3-main" style="margin-left:340px;margin-right:40px;margin-top:70px">

    <div class="container">

        <div class="row">
            <div class="column">


                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2653.712739805666!2d18.089252315655024!3d48.30837597923741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b3ee43b2f6763%3A0x75a567f979f5bed3!2sUniverzita+Kon%C5%A1tant%C3%ADna+Filozofa+v+Nitre!5e0!3m2!1ssk!2ssk!4v1544738417175" style="width: 100%;height: 50%" f></iframe>

            </div>
            <div class="column">
                <form action="send_form_email.php">

                    <label for="fname">Meno</label>
                    <input type="text" id="fname" name="firstname" placeholder="Vaše meno..">
                    <label for="lname">Priezvisko</label>
                    <input type="text" id="lname" name="lastname" placeholder="Vaše priezvisko..">
                    <label for="email">Váš email</label>

                    <input type="text" id="email" name="email" placeholder="Váš email.">

                    <label for="subject">Predmet</label>
                    <textarea id="subject" name="subject" placeholder="Sem napíšte váš dotaz prosím.." style="height:170px"></textarea>
                    <input type="submit" value="Odoslať">
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>


    </body>
    </html>



