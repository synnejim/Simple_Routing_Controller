<div>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>About Me</title>
        </head>
        <body>
            <h1>About Me</h1>
            <p>{{ $greetings }} <b>{{ $name }}</b> {{ $age }}</p> 
            <p>I live in {{ $address }}</p>

            <button>
                <a href="http://127.0.0.1:8000/skills"> My Skills</a>
            </button>
            <button>
                <a href="http://127.0.0.1:8000/hobbies"> My Hobbies</a>
            </button>
        </body>
    </html>
</div>

