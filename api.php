<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3xodus API</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            background-color: #060819;
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }

        .root{
            height: 100vh;
            display: grid;
            place-items: center;
        }

        .root__box{
            padding: 10px 30px;
            min-height: 50vh;
            min-width: 60vw;
            background-color: #191F3A;
            -webkit-box-shadow: 1px 2px 69px -25px rgba(0,0,0,0.75);
            -moz-box-shadow: 1px 2px 69px -25px rgba(0,0,0,0.75);
             box-shadow: 1px 2px 69px -25px rgba(0,0,0,0.75);
             color: white;
        }

        .rootBox__header{
            display: grid;
            place-content: center;
        }

        .rootBox__code{
            min-height: 30px;
            width: 100%;
            background-color: rgba(197, 197, 197, 0.205);
            padding: 10px 20px;
            margin-bottom: 10px;
        }

        .flex{
            display: flex;
        }
        
        .flex-ai-c{
            align-items: center;
        }

        .flex-jc-c{
            justify-content: center;
        }
    </style>
</head>
<body>
    <main class="root">
        <div class="root__box">
            <div class="rootBox__header">
                <h1>Welcome to 3xodus API</h1>
            </div>
            <div class="rootBox__content">
                <h3 class="rootBox__contentHeader">
                    Request URL
                </h3>
                <div class="rootBox__code flex flex-ai-c">
                    /v1/getproxies?type=socks4
                </div>
                <h3 class="rootBox__contentHeader">
                    Example Response
                </h3>
                <div class="rootBox__code response-code ">
                    <code>
                        [<br/>
                        <p style="padding-left: 10px;">
{
    "proxy": "0.0.0.0:0",<br/>
    "country": "Indonesia",<br/>
"type": "socks4"<br/>
},<br/>
{
"proxy": "0.0.0.0:0",<br/>
"country": "Indonesia",<br/>
"type": "socks4"<br/>
},<br/>
{
"proxy": "0.0.0.0:0",<br/>
"country": "Brazil",<br/>
"type": "socks4"<br/>
},<br/>
{
"proxy": "0.0.0.0:0",<br/>
"country": "Romania",<br/>
"type": "socks4"<br/>
},<br/>
{
"proxy": "0.0.0.0:0",<br/>
"country": "Cambodia",<br/>
"type": "socks4"<br/>
}</p>]
                    </code>
                </div>
            </div>
        </div>
    </main>
</body>
</html>