<!DOCTYPE html>
<html>
    <title>Login</title>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
    
    <style>

        body {
            font-family: sans-serif;
            color: #333;
        }

        .container {
            margin: 30px auto;
            padding: 32px 44px;
            margin-bottom: 30px;
            background: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-shadow: 1px 1px 1px #ddd;
            width: 300px;
            background: #f5f5f5;
        }

        label {
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="password"]{
            width: 100%;
            border-radius: 4px;
            border: 1px sollid #999;
            padding: 6px;
            margin-bottom: 6px;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #555;
        }

        input[type="submit"] {
            width: 100%;
            padding: 6px;
            font-size: 1em;
            background: #0092d8;
            border: 1px solid #0092d8;
            border-radius: 4px;
            outline: none;
            color:#fff ;
        }

        input[type="submit"]:hover {
            cursor: pointer;
            background:#0376ad ;
        }

        .error {
            border: 1px solid #ff6c6c;
            border-radius: 4px;
            padding: 12px;
            margin-bottom: 18px;
            background: #ff7272;
            color: #fff;
        }
    </style>
    </head>
    <body>
        <h2> <center> Silahkan Login </center> </h2>
        <div class="container">
            <form action="" class="form">
                <div class="error" style="display: none;"></div>

                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="text" id="email" />
                </div>

                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" />
                </div>

                <input type="submit" value="Login">
            </form>
            <script src="app.js"></script>
        </div>
    </body>
</html>